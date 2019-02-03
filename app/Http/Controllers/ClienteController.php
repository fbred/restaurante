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
        $regras = [
            'nome' => 'required|min:3|max:20',
            'endereco' => 'required',
            'nascimento' => 'required',
            'telefone' => 'required'

        ];

        //colocando o :attribute o larável trata o campo genericamente e exibe a mensagem pré determinada
        $mensagems = [
            'required' => 'o atributo :attribute não pode estar em branco',
            'nome.required' => 'o nome e requerido',
            'nome.min' => 'É nescessário mais de 02 caracteres',
            'nome.max' => 'o maximo aceito é de 20 caracteres',
            'nome.unique' =>'o nome já está em uso',
            'nascimento.required' => 'A data é requerida',
            'telefone.required' => 'a data é requerida'
        ];
        $request->validate($regras, $mensagems);

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
        $regras = [
            'nome' => 'required|min:3|max:20',
            'endereco' => 'required',
            'nascimento' => 'required',
            'telefone' => 'required'

        ];

        //colocando o :attribute o larável trata o campo genericamente e exibe a mensagem pré determinada
        $mensagems = [
            'required' => 'o atributo :attribute não pode estar em branco',
            'nome.required' => 'o nome e requerido',
            'nome.min' => 'É nescessário mais de 02 caracteres',
            'nome.max' => 'o maximo aceito é de 20 caracteres',
            'nome.unique' =>'o nome já está em uso',
            'nascimento.required' => 'A data é requerida',
            'telefone.required' => 'a data é requerida'
        ];
        $request->validate($regras, $mensagems);

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
