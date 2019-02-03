<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categorias::all();
        return view('layout.categoria',compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layout.cadastrocategoria');
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
            'descricao' => 'required|min:3|max:20|unique:categorias',
        ];

        $mensagems = [
            'descricao.required' => 'A descrição não pode estar em branco',
            'descricao.min' => 'É nescessário mais de 02 caracteres',
            'descricao.max' => 'o maximo aceito é de 20 caracteres',
            'descricao.unique' =>'A categoria já está em uso',
        ];

        $request->validate($regras, $mensagems);

        $cat = new Categorias();
        $cat->descricao = $request->input('descricao');
        $cat->save();
        return redirect('/categoria')->with('message','Categoria Cadastrada com Sucesso');
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

        $cat = Categorias::find($id);
        if (isset($cat)){
            Return view('layout/editarcategoria',compact('cat'));
        }
        return redirect('layout.categorias');

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
            'descricao' => 'required|min:3|max:20',
        ];

        $mensagems = [
            'descricao.required' => 'A descrição não pode estar em branco',
            'descricao.min' => 'É nescessário mais de 02 caracteres',
            'descricao.max' => 'o maximo aceito é de 20 caracteres',
        ];

        $request->validate($regras, $mensagems);

        $cat = Categorias::find($id);
        if (isset($cat)){
            $cat->descricao = $request->input('descricao');
            $cat->save();
        }

        return redirect('/categoria')->with('message','Categoria Editada com sucesso');
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
}
