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

Route::get('/login',function (){
    return view('login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/clientes','ClienteController@index');

Route::get('/clientes/edit/{id}','ClienteController@edit');

Route::get('/clientes/delete/{id}','ClienteController@destroy');

