@extends('layout.template')
@csrf
@section('content')

    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Editar Produtos
                        </div>
                        <form action="/produtos/update/{{$prod->id}}" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="card-body py-5">
                                    <div class="form-group">
                                        <label for="produto" class="form-control-label">Descrição</label>
                                        <input type="text" class="form-control" name="desricaoproduto" value="{{$prod->descricao}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="preco" class="form-control-label">Preço</label>
                                        <input type="number" class="form-control" name="precoproduto" value="{{$prod->preco}}">
                                    </div>



                                <div class="card-footer" style="align-content: center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-5">Cadastrar</button>
                                        </div>

                                        <div class="col-6">
                                            <a href="/produtos" class="btn btn-danger px-5">Cancelar</a>
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