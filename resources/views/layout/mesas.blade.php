@extends('layout.template')

@section('content')


        <div class="row">
            @if($mesas)
                @foreach($mesas as $mesa)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-light">
                       Mesa {{$mesa->numero_mesa}}

                        <div class="card-actions">
                            <a  class="btn" data-target="#modal-1">
                                <i class="fa fa-pencil-alt" data-toggle="modal" data-target="#{{$mesa->id}}"></i>
                            </a>

                            <a href="#" class="btn">
                                <i class="fa fa-cog"></i>
                            </a>
                        </div>

                    </div>

                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <img src="{{asset('imgs/mesa.png')}}">

                                @if(count($mesa->pedidoAberto) > 0)
                                <p class="text fa-pull-rightl">Mesa Ocupada</p>
                                    @else
                                    <p class="text fa-pull-rightl">Mesa Livre</p>
                                @endif

                            </div>
                            @if(count($mesa->pedidoAberto) > 0)
                                <a href=""  class="btn btn-danger btn-sm fa-pull-right">Fechar Pedido</a>
                               @else
                             <a href=""  class="btn btn-primary btn-sm fa-pull-right">Adicionar Pedido</a>
                           @endif
                    </div>
                    </div>
                </div>
            </div>

                @if(count($mesa->pedidoAberto) > 0)
                <div class="modal fade" id="{{$mesa->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Mesa {{$mesa->numero_mesa}}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <div class="card">
                                    <div class="card-header bg-light">
                                        Itens do Pedido
                                    </div>

                                    <div class="card-body">
                                        @if(count($mesa->pedidoAberto[0]->itens) > 0)
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Preço</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $total = 0
                                                ?>
                                                @foreach($mesa->pedidoAberto[0]->itens as $item)
                                                    <?php
                                                    $total+=($item->quantidade*$item->preco)
                                                    ?>
                                                <tr>
                                                    <td>{{$item->id}}</td>
                                                    <td>{{$item->descricao}}</td>
                                                    <td>{{$item->quantidade}}</td>
                                                    <td>{{$item->preco}}</td>
                                                    <td>{{($item->quantidade*$item->preco)}}</td>
                                                </tr>
                                                    @endforeach
                                              </tbody>
                                            </table>
                                            <div class="fa-pull-right">
                                                Total ={{$total}}
                                            </div>
                                        </div>
                                            @else
                                            <p>Nenhum intem adicionado</p>
                                        @endif
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-link" data-dismiss="modal">Fechar</button>
                                <button type="button" class="btn btn-primary">Editar Pedido</button>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif



                @endforeach
            @endif
        </div>





@endsection