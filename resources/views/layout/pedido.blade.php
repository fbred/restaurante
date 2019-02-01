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

                        <form action="/pedidos/produto/categoria/{categoria}/{{$mesa}}" method="POST">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">

                            <div class="card-body py-5">
                                <div class="form-group">
                                    <label for="multi-select">Lanches</label>
                                    <select id="categoria" name="categoria">
                                        <option value="">Escolha Um lanche</option>

                                    </select>
                                    <label for="multi-select">Bebidas</label>
                                    <select id="bebida" name="bebida">
                                        <option value="">Escolha uma Bebida</option>

                                    </select>
                                    <label for="multi-select">Pizzas</label>
                                    <select id="pizza" name="Pizza">
                                        <option value="">Uma Pizza</option>

                                    </select>

                                </div>
                            </div>


                        <div class="card-footer" style="align-content: center">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5">Adicionar</button>
                                </div>

                                <div class="col-6">
                                    <button type="submit" class="btn btn-secondary px-5">Salvar</button>
                                </div>
                            </div>
                        </div>
                        </form>
                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection