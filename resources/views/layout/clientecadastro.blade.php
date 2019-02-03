@extends('layout.template')

@section('content')
@csrf
    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Cadastro Cliente
                        </div>
                        <form action="/clientes/inserir" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label ">Nome</label>
                                <input type="text" class="form-control {{$errors->has('nome') ? 'is-invalid' : ''}}" name="nome">

                                @if($errors->has('nome'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('nome')}}

                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Endreço</label>
                                <input type="text" class="form-control {{$errors->has('endereco') ? 'is-invalid' : ''}}" name="endereco">
                                @if($errors->has('endereco'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('endereco')}}

                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Data de Nascimento</label>
                                <input type="date" class="form-control {{$errors->has('nascimento') ? 'is-invalid' : ''}}" name="nascimento">
                                @if($errors->has('nascimento'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('nascimento')}}

                                    </div>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="multi-select">Sexo</label>
                                <select id="multi-select" name="sexo">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Telefone</label>
                                <input type="text" class="form-control {{$errors->has('telefone') ? 'is-invalid' : ''}}" name="telefone">
                                @if($errors->has('telefone'))
                                    <div class="invalid-feedback">
                                        {{$errors->first('telefone')}}

                                    </div>
                                @endif
                            </div>
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
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection