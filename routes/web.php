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
Route::get('/main', function () {
    return view('main');
});
Route::get('/list', function () {
    return view('view');
});
