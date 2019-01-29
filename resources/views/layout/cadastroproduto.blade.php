@extends('layout.template')

@section('content')

    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Cadastro Cliente
                        </div>

                        <div class="card-body py-5">
                            <div class="form-group">
                                <label class="form-control-label">Nome</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Endreço</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">Data de Nascimento</label>
                                <input type="text" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="multi-select">Sexo</label>
                                <select id="multi-select">
                                    <option value="M">Masculino</option>
                                    <option value="F">Feminino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Telefone</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="card-footer" style="align-content: center">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5">Cadastrar</button>
                                </div>

                                <div class="col-6">
                                    <button type="submit" class="btn btn-danger px-5">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection