<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/index','MainControler@index');
Route::post('ch/login','MainControler@check_login');
Route::get('m/sucess','MainControler@sucess_login');
Route::get('/main/logout','MainControler@logout');