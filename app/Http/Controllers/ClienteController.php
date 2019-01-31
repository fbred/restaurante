<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Clientes::all();
        return view('layout.cliente',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.clientecadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $request->validate([
            'nome' => 'required|min:3|max:20|unique:clientes',
            'endereco' => 'required',
            'nascimento' => 'required',
            'sexo' => 'required',
            'telefone'=>'required'

        ]);*/

         $clien = new Clientes();
        $clien->nome = $request->input('nome');
        $clien->endereco = $request->input('endereco');
        $clien->data_nascimento = $request->input('nascimento');
        $clien->sexo = $request->input('sexo');
        $clien->telefone = $request->input('telefone');
        $clien->save();
        return redirect('clientes/lista');
        //$this->index();
       // return view('layout.cliente');


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
        $cliente = Clientes::find($id);
        if (isset($cliente)){
            Return view('layout/editarcliente',compact('cliente'));
        }
        return redirect('layout.cliente');
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
         $clien = Clientes::find($id);
        if (isset($clien)){

            $clien->nome = $request->input('nome');
            $clien->endereco = $request->input('endereco');
            $clien->data_nascimento = $request->input('nascimento');
            $clien->sexo = $request->input('sexo');
            $clien->telefone = $request->input('telefone');
            $clien->save();
        }

        return redirect('/clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente =  Clientes::find($id);/*Usando a classe categoria busca através do find pelo ide e armazena em categoria*/
        if(isset($cliente)){
            $cliente->delete();/*depois de verificar que o ID existe deleta do BD pelo ID passado*/
        }
        return redirect('clientes')->with('message','Apagado com sucesso');/*Retorna a categoriar*/
    }
}
