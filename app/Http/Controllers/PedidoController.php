<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\ItensPedido;
use App\Models\Pedidos;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($mesa)
    {
        $cat = Categorias::all();

        return view('layout.pedido',compact('mesa','cat'));
    }

    public function selecaoprodutocategoria($categoria,$mesa){

        $prod = Produtos::all()->where('categoria','=',$categoria);

        return view('layout.pedido_item',compact('prod','mesa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addItem(Request $request){
        $pedido = DB::table('pedidos')->where('status','=',1)->where('mesa_id','=',$request->mesa_id)->get();
        $produto = Produtos::find($request->produto_id);
        $data = ['pedido_id'=>$pedido[0]->id,'quantidade'=>$request->quantidade,'descricao'=>$produto->descricao,'preco'=>$produto->preco];
        $itemPedido = ItensPedido::create($data);
        return $itemPedido;

    }

    public function addPedido($id){
        $p = DB::table('pedidos')->where('mesa_id','=',$id)->where('status','=',1)->first();
        if(!$p){
            $data  = ['status'=> 1,'cliente_id'=>1,'mesa_id' =>$id];
            $pedido = Pedidos::create($data);
        }

        return $id;
    }
}
