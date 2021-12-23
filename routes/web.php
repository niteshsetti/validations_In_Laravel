<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Validation;
use  App\Http\Controllers\AgeController;
use Illuminate\Support\Facades\Mail;

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
    return redirect('/age');
});
Route::get('/age', function () {
    return view('age');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('register',[Validation::class,'register_validation']);
Route::post('dashboard',[Validation::class,'login_validation']);
Route::post('agecheck',[AgeController::class,'age_checker']);
Route::get('/error',function(){
  return view('age_un');
});
Route::get('/list', function () {
    return view('view');
});
  Route::get('/signout',function(){
    if(session()->has('data')){
       session()->forget('data');
       return redirect('/login');
    }
  });
  Route::group(['middleware'=>['check']],function(){
   Route::view('main','main');
   Route::view('view','view');

  });
  Route::group(['middleware'=>['checks']],function(){
    Route::view('login','login');
    Route::view('register','register');
});
Route::get('/Mail',function(){
 $name="Nitesh";
  $to="nitesh5d7@sasi.ac.in";
  $data=array('name'=>'Nitesh','body'=>'Test mail');
  Mail::send('mail',$data,function($message) use($to,$name){
    $message->to($to)->subject('Web TEsting Mail');

  });
  echo "Mail Sent Successfully";
});
