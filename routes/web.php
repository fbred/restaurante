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
Route::get('/clientes','ClienteController@index');

Route::get('/clientes/edit/{id}','ClienteController@edit');

Route::get('/clientes/delete/{id}','ClienteController@destroy');

Route::get('/clientes/cadastro','ClienteController@create');

Route::post('/clientes/inserir','ClienteController@store');

Route::get('/clientes/lista','ClienteController@index');

Route::get('/clientes/edit/{id}','ClienteController@edit');

Route::post('/clientes/update/{id}','ClienteController@update');


/*################################CATEGORIAS##########################3*/

Route::get('/categoria','CategoriaController@index');

Route::post('/categoria/inserir','CategoriaController@store');

Route::get('/categoria/cadastro','CategoriaController@create');


/*################################PRODUTOS##########################3*/
Route::get('/produtos','ProdutoController@index');

Route::get('/produtos/cadastro','ProdutoController@create');

Route::post('/produtos/inserir','ProdutoController@store');

//Route::get('/produtos/lista','ProdutoController@index');
Route::get('/produtos/lista','ProdutoController@index');

Route::get('/produtos/delete/{id}','ProdutoController@destroy');

Route::get('/produtos/edit/{id}','ProdutoController@edit');

Route::post('/produtos/update/{id}','ProdutoController@update');


/*#######################################MESAS###################################*/

Route::get('adicionar/pedido/{mesa}','PedidoController@addPedido');

Route::post('/pedidos/produto/categoria/{categoria}','Pedidocontroller@selecaoprodutocategoria');

Route::get('/mesas','MesaControleer@index');

Route::get('/obter/produto/{id}','ProdutoController@getProduto');

Route::post('/pedido/adicionar/item','PedidoController@addItem');

Route::get('pedido/fechar/{id_pedido}','PedidoController@fecharPedido');

Route::post('/mesa/adicionar','MesaController@store');


//#######################PEDIDOS#############################
Route::get('/lista/pedido','PedidoController@index');

