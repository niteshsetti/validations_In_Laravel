<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Validation;
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
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('register',[Validation::class,'register_validation']);
Route::post('dashboard',[Validation::class,'login_validation']);
/*Route::get('/main', function () {
    return view('main');
});
Route::get('/list', function () {
    return view('view');
});*/
/*Route::get('/main',function(){
  if(!session()->has('data')){
      return redirect("login")->with('status','Please Login-First');
  }
  else{
    return view('main');
  }
});
Route::get('/login',function(){
    if(session()->has('data')){
        return redirect('/main');
    }
    else{
    return view('/login');
    }
  });*/
  Route::get('/signout',function(){
    if(session()->has('data')){
       session()->forget('data');
       return redirect('/login');
    }
  });
  /*Route::get('/list',function(){
    if(!session()->has('data')){
        return redirect("login")->with('status','Please Login-First');
    }
    else{
      return view('view');
    }
  });*/
  Route::group(['middleware'=>['check']],function(){
   Route::view('main','main');
  });
