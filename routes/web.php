<?php

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
    return view('auth.login');
});

Route::get('dashboard' , 'DashboardController@index')->name('dashboard');

Route::get('/name/{name}' ,function($name){
	return 'Hola soy '.$name;
});

Route::post('login','Auth\LoginController@login')->name('login');
Route::resource('form', 'FormuController');
