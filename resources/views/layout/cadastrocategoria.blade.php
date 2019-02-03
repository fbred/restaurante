@extends('layout.template')
@csrf
@section('content')

    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Cadastro Categoria
                        </div>
                        <form action="/categoria/inserir" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <div class="card-body py-5">
                                    <div class="form-group">
                                        <label for="produto" class="form-control-label">Descrição</label>
                                        <input type="text" class="form-control {{$errors->has('descricao') ? 'is-invalid' : ''}}" name="descricao">
                                        @if($errors->has('descricao'))
                                            <div class="invalid-feedback">
                                                {{$errors->first('descricao')}}

                                            </div>
                                        @endif
                                    </div>

                                    <br>

                                <div class="card-footer" style="align-content: center">
                                    <div class="row">
                                        <div class="col-6">
                                            <button type="submit" class="btn btn-primary px-5">Cadastrar</button>
                                        </div>

                                        <div class="col-6">
                                            <a href="/categoria" class="btn btn-danger px-5">Cancelar</a>
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