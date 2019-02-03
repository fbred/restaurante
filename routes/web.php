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

Route::get('/login02',function (){
    return view('layout.login');
});
/*################################CLIENTES##########################*/
Route::get('/clientes',['middleware' => 'auth', 'uses' =>'ClienteController@index']);

Route::get('/clientes/edit/{id}',['middleware' => 'auth', 'uses' =>'ClienteController@edit']);

Route::get('/clientes/delete/{id}',['middleware' => 'auth', 'uses' =>'ClienteController@destroy']);

Route::get('/clientes/cadastro',['middleware' => 'auth', 'uses' =>'ClienteController@create']);

Route::post('/clientes/inserir',['middleware' => 'auth', 'uses' =>'ClienteController@store']);

Route::get('/clientes/lista',['middleware' => 'auth', 'uses' =>'ClienteController@index']);

Route::get('/clientes/edit/{id}',['middleware' => 'auth', 'uses' =>'ClienteController@edit']);

Route::post('/clientes/update/{id}',['middleware' => 'auth', 'uses' =>'ClienteController@update']);


/*################################CATEGORIAS##########################3*/

Route::get('/categoria',['middleware' => 'auth', 'uses' =>'CategoriaController@index']);

Route::post('/categoria/inserir',['middleware' => 'auth', 'uses' =>'CategoriaController@store']);

Route::get('/categoria/cadastro',['middleware' => 'auth', 'uses' =>'CategoriaController@create']);


/*################################PRODUTOS##########################3*/
Route::get('/produtos',['middleware' => 'auth', 'uses' =>'ProdutoController@index']);

Route::get('/produtos/cadastro',['middleware' => 'auth', 'uses' =>'ProdutoController@create']);

Route::post('/produtos/inserir',['middleware' => 'auth', 'uses' =>'ProdutoController@store']);

//Route::get('/produtos/lista','ProdutoController@index');
Route::get('/produtos/lista',['middleware' => 'auth', 'uses' =>'ProdutoController@index']);

Route::get('/produtos/delete/{id}',['middleware' => 'auth', 'uses' =>'ProdutoController@destroy']);

Route::get('/produtos/edit/{id}',['middleware' => 'auth', 'uses' =>'ProdutoController@edit']);

Route::post('/produtos/update/{id}',['middleware' => 'auth', 'uses' =>'ProdutoController@update']);


/*#######################################MESAS###################################*/

Route::get('adicionar/pedido/{mesa}',['middleware' => 'auth', 'uses' =>'PedidoController@addPedido']);

Route::post('/pedidos/produto/categoria/{categoria}',['middleware' => 'auth', 'uses' =>'Pedidocontroller@selecaoprodutocategoria']);

Route::get('/mesas',['middleware' => 'auth', 'uses' =>'MesaControleer@index']);

Route::get('/obter/produto/{id}','ProdutoController@getProduto');

Route::post('/pedido/adicionar/item','PedidoController@addItem');

Route::get('pedido/fechar/{id_pedido}','PedidoController@fecharPedido');

Route::post('/mesa/adicionar','MesaController@store');

