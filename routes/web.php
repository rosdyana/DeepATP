<?php
use Illuminate\Http\Request;
use App\Mail\Contact;
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

Route::get('/submission',function(){
    return view('submission');
});
Route::get('/task/{id}', 'HomeController@result');

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
// Route::post('/contact', 'HomeController@contactus');

Route::post('/submission', 'HomeController@postSubmit');
