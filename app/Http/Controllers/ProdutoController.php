<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = Produtos::all();
        return view('layout.produtos',compact('prod'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categoria = Categorias::all();
        return view('layout.cadastroproduto', compact('categoria'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prod = new Produtos();
        $prod->descricao = $request->input('desricaoproduto');
        $prod->preco = $request->input('precoproduto');
        $prod->categoria = $request->input('categoria');
        $prod->imagem = $request->input('imagem');
        $prod->save();
        return redirect('/produtos/lista')->with('message','Produto cadastrado com Sucesso');
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
        $prod = Produtos::find($id);/*encontra a categoria*/
        if (isset($prod)){
            Return view('layout/editarproduto',compact('prod'));/*vai para a view categoria passando o registro encontrado pelo modo compact*/
        }
        return redirect('layout.produtos');/*caso não se encontre nada ou tente ascessar diretamente pela URL*/
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
        $prod = Produtos::find($id);
        if (isset($prod)){
            $prod->descricao = $request->input('desricaoproduto');
            $prod->preco = $request->input('precoproduto');
            $prod->save();
        }

        return redirect('/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod =  Produtos::find($id);
        if(isset($prod)){
            $prod->delete();
        }
        return redirect('produtos')->with('message','Apagado com sucesso');
    }

    public function getProduto($id){

        $produtos = Produtos::where('categoria','=',$id)->get();
        return $produtos;
    }

}
