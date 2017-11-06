<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SubmitTask;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }


    public function postSubmit(\Request $req) {
        try {
            $content = '';
            if (\Request::hasFile('file') && \Request::file('file')->isValid()) {
                $upload = \Request::file('file');
                $file = $upload->move(storage_path() .'/uploads', rand(11111, 99999) . '.' . $upload->extension());
                $content = \File::get($file);
            } else {
                $content = \Request::get('data');
            }
            $task = [
                'email' => \Request::get('email'),
                'status' => 'queue',
                'proteins' => '',
                'submit_time' => new \DateTime()
            ];
            $arr = preg_replace('/>.*/', '{{$0}}', $content);
            $arr = str_replace(["\r", "\n"], '', $arr);
            $arr = explode("{{", $arr);
            array_shift($arr);
            if (count($arr)==0) return redirect('submit')->with('error', 'No fasta found! Please try again!');
			if (count($arr)>100) return redirect('submit')->with('error', 'Please submit less than 100 proteins!');
            foreach ($arr as $emt) {
                $pro = explode("}}", $emt);
                $protein = [
                    'name' => $pro[0],
                    'data' => $pro[1],
                    'class_a' => '',
                    'class_b' => '',
                    'class_c' => ''
                ];
                $chk = \DB::table('proteins')->whereData($protein['data'])->first();
                if ($chk == null) {
                    $id = \DB::table('proteins')->insertGetId($protein);
                    $task['proteins'] .= $id . ',';
                } else
                    $task['proteins'] .= $chk->id . ',';
            }
            $task['proteins'] = substr_replace($task['proteins'], "", -1);
            $id = \DB::table('tasks')->insertGetId($task);
            Mail::to($task['email'])->send(new SubmitTask($id));
            return redirect('result/' . $id);
        } catch (Exception $ex) {
            return redirect('submit')->with('error', 'Invalid Data! Please try again!');
        }
    }
    public function result($id) {
        $task = \DB::table('tasks')->whereId($id)->select()->first();
        if ($task == null)
            return abort(404);
        $proteins = \DB::table('proteins')->whereIn('id', explode(',', $task->proteins))->get();
        return view('result', [
            'task' => $task,
            'proteins' => $proteins,
        ]);
    }


    protected $totTasks;
    protected $totProteins;
    protected $queueTasks;
    public function submission(){

      return view('submission', [

      ]);
    }


    public function postContact() {
        Mail::to($task['email'])->send(new SubmitTask($id));
    }
}
