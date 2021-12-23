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
  });
  Route::group(['middleware'=>['checks']],function(){
    Route::view('login','login');
    Route::view('register','register');
   });
