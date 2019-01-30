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

/*################################PRODUTOS##########################*/
Route::get('/clientes','ClienteController@index');

Route::get('/clientes/edit/{id}','ClienteController@edit');

Route::get('/clientes/delete/{id}','ClienteController@destroy');

Route::get('/clientes/cadastro','ClienteController@create');

/*################################PRODUTOS##########################3*/
Route::get('/produtos','ProdutoController@index');

Route::get('/produtos/cadastro','ProdutoController@create');

Route::post('/produtos/inserir','ProdutoController@store');

Route::get('/produtos/lista','ProdutoController@index');

Route::get('/produtos/delete/{id}','ProdutoController@destroy');

Route::get('/produtos/edit/{id}','ProdutoController@edit');

Route::post('/produtos/update/{id}','ProdutoController@update');

/*#######################################MESAS###################################*/

Route::get('/pedidos/{mesa}','PedidoController@index');