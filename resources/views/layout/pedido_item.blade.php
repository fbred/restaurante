@extends('layout.template')

@section('content')

    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Pedido Mesa {{$mesa}}
                        </div>

                        <form action="/pedido/incluir" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="card-body py-5">
                                <div class="form-group">
                                    <label for="multi-select">Categoria</label>
                                    <select id="multi-select" name="categoria">
                                        <option value="">Escolha uma Categoria</option>
                                        @foreach($cat as $c)
                                        <option value="{{$c->id}}">{{$c->descricao}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <option>--- Select State ---</option>
                            @if(!empty($states))
                                @foreach($states as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            @endif


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
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection