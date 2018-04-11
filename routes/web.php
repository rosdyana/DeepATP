<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Mail\Contact;
use App\Mail\TaskFinish;
use App\Mail\TaskSubmit;

use App\Models\Task;
use App\Models\Protein;
use App\Models\TaskDetail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/home',function(){
    return view('home');
});

Route::get('/proteins',function(Request $request){

    $proteins = \DB::table('proteins');

    $types_filtered = [];
    if ($request->has('types_filtered')){
        $types_filtered = explode(',',$request->get('types_filtered'));
        $proteins = $proteins->whereIn('sub_type',$types_filtered);
    } else
        $types_filtered = ['Complex I','Complex II','Complex III','Complex IV','Complex V','N/A'];

    $org_filtered = '';
    if ($request->has('org_filtered')){
        $org_filtered = $request->get('org_filtered');
        $proteins = $proteins->where('org_type',$org_filtered);
    }

    $proteins = $proteins->paginate(25);

    $types = \DB::table('types')->get()->mapWithKeys(function ($item) {
        return [$item->sub_type => $item->COUNT];
    });

    $organisms = \DB::table('organisms')->limit(10)->get()->mapWithKeys(function ($item) {
        return [$item->org_type => $item->COUNT];
    });

    return view('proteins',compact('proteins','types','types_filtered','organisms','org_filtered'));
})->name('proteins');

Route::get('/proteins/download',function(Request $request){
    $proteins = \DB::table('proteins');

    $types_filtered = [];
    if ($request->has('types_filtered')){
        $types_filtered = explode(',',$request->get('types_filtered'));
        $proteins = $proteins->whereIn('sub_type',$types_filtered);
    } else
        $types_filtered = ['Complex I','Complex II','Complex III','Complex IV','Complex V','N/A'];

    $org_filtered = '';
    if ($request->has('org_filtered')){
        $org_filtered = $request->get('org_filtered');
        $proteins = $proteins->where('org_type',$org_filtered);
    }

    $proteins = $proteins->get();

    $file = str_random(10).'.fasta';
    $content = '';
    foreach ($proteins as $protein) {
        $content .= '>'.$protein->code.'|'.$protein->org_type.'|'.$protein->sub_type.PHP_EOL.$protein->seq_content.PHP_EOL;
    }

    \Storage::put($file,$content);

    $headers = [
        'Content-Type' => 'application/x-fasta',
    ];

    return response()->download(storage_path().'/app/'.$file, "data.fasta", $headers)->deleteFileAfterSend(true);

})->name('download');

Route::get('/proteins/{id}',function($id){
    $protein = \DB::table('proteins')->where('code',$id)->first();
    return view('detail',compact('protein'));
});

Route::get('/submission',function(){
    return view('submission');
});

Route::post('/submission',function(Request $request){
    $validator = \Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'file' => 'required_without:data',
        'data' => 'required_without:file'
    ]);

    if ($validator->fails())
    return redirect()->back()->withErrors($validator)->withInput();

    try {
        $content = '';
        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $upload = $request->file('file');
            $file = $upload->move(storage_path() .'/uploads', rand(11111, 99999) . '.' . $upload->extension());
            $content = \File::get($file);

            \File::delete($file);
        } else {
            $content = $request->get('data');
        }

        $arr = preg_replace('/>.*/', '{{$0}}', $content);
        $arr = str_replace(["\r", "\n"], '', $arr);
        $arr = explode("{{", $arr);
        array_shift($arr);

        if (count($arr)==0)
        return redirect()->back()->withInput()->with('error', 'No fasta data found! Please follow the sample sequences and try again.');

        if (count($arr) > 20)
        return redirect()->back()->with('error', 'You reached the limitation of our web service! Please submit lower or equal 20 proteins per once.');

        // Task
        $task = Task::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'status' => 'In Queue'
        ]);

        foreach ($arr as $emt) {
            $pro = explode("}}", $emt);
            $task->details()->create([
                'name' => $pro[0],
                'code' => quickRandom(6),
                'status' => 'In Queue',
                'sequence' => $pro[1],
                'result' => ''
            ]);
        }

        \Mail::to($task->email)->send(new \App\Mail\TaskSubmit($task));
        App\Jobs\Prediction::dispatch($task);

        return redirect('task/'. $task->id);
    } catch (Exception $ex) {
        return redirect()->back()->with('error', 'Invalid Data! Please try again!');
    }
});

Route::get('/task/{id}',function($id){
    $task = Task::find($id);
    return view('result',compact('task'));
});

Route::get('/contact',function(){
    return view('contact');
});

Route::post('/contact',function(Request $request){
    $inputs = $request->all();
    $validator = \Validator::make($inputs, [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required',
    ]);

    if ($validator->fails())
    return redirect()->back()->withErrors($validator)->withInput();

    \Mail::to(env('MAIL_ADMIN'))->send(new Contact($inputs));
    return view('contact_success');
});
