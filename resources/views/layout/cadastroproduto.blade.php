@extends('layout.template')
@csrf
@section('content')

    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Cadastro Produtos
                        </div>
                        <form action="/produtos/inserir" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="card-body py-5">
                                    <div class="form-group">
                                        <label for="produto" class="form-control-label">Descrição</label>
                                        <input type="text" class="form-control" name="desricaoproduto">
                                    </div>

                                    <div class="form-group">
                                        <label for="preco" class="form-control-label">Preço</label>
                                        <input type="number" class="form-control" name="precoproduto">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="multi-select">Categoria</label>
                                        <select id="multi-select" name="categoria">
                                            <option value="">Escolha uma Categoria</option>
                                            <option value="1">Bebidas</option>
                                            <option value="2">Laches</option>
                                            <option value="3">Pizzas</option>
                                            <option value="4">Espetinhos</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="preco" class="form-control-label">Imagem</label>
                                        <input type="file" class="form-control" name="imagem">
                                    </div>


                                <div class="card-footer" style="align-content: center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-5">Cadastrar</button>
                                        </div>

                                        <div class="col-6">
                                            <a href="/clientes" class="btn btn-danger px-5">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>



@endsection