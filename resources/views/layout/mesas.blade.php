@extends('layout.template')

@section('content')
{{--adicionar mensagem de apagado com sucesso--}}

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
                            <script>
                                $(function () {
                                    //#####Adicionando pedido ##########
                                    $('#adicionarpedido{{$mesa->numero_mesa}}').click(function () {
                                        $.ajax({
                                            url: 'adicionar/pedido/{{$mesa->numero_mesa}}',
                                            data: '',
                                            type: "get",
                                            beforeSend: '',
                                            erro: function(){
                                                alert('Erro na solicitação, procure o Administrador.');
                                            },
                                            success: function(data){
                                                if (data == ''){
                                                    alert('Ouve um erro ao adicionar pedido')
                                                }else{
                                                    location.reload();
                                                }

                                            }
                                        })
                                    })
                                    //#####Adicionando Pedido##########
                                })
                            </script>
                            @if(count($mesa->pedidoAberto) > 0)
                                <a href=""  class="btn btn-danger btn-sm fa-pull-right">Fechar Pedido</a>
                               @else
                             <button id="adicionarpedido{{$mesa->numero_mesa}}"  class="btn btn-primary btn-sm fa-pull-right">Adicionar Pedido</button>
                           @endif
                    </div>
                    </div>
                </div>
            </div>

                @if(count($mesa->pedidoAberto) > 0)
                        <script type="text/javascript">

                            $(function () {
                                var select = $('#categoria{{$mesa->id}}');
                                var id = 0;
                                var selectProduto = $('#produto{{$mesa->id}}')
                                url = '/obter/produto'
                                //#####Buscando produto por categoria##########
                                select.click( function () {
                                    var selecionada = this.options[this.selectedIndex];

                                    if (selecionada.value !== ''){
                                        if(id != selecionada.value){
                                            $.ajax({
                                                url: url+'/'+selecionada.value,
                                                data: '',
                                                type: "get",
                                                beforeSend: '',
                                                erro: function(){
                                                    alert('Erro na solicitação, procure o Administrador.');
                                                },
                                                success: function(data){
                                                    if (data == ''){
                                                        alert('Nenhum produto encontrado para essa categoria')
                                                    }else{

                                                        for( id in data){
                                                            selectProduto.append('<option value="'+data[id].id+'">'+data[id].descricao+'</option>');
                                                        }

                                                    }
                                                    id = selecionada.value;
                                                }
                                            })
                                        }
                                    }
                                });
                                //##### Fim Buscando produto por categoria##########

                                //#####Adicionando item ##########
                                var form = $('form[name="form_item{{$mesa->id}}"]')
                                form.submit(function (event) {
                                    event.preventDefault()
                                    var produto_id = $(this).find('select[name="produto{{$mesa->id}}"]').val();
                                    var dados = $(this).serialize();
                                    var todos = dados + '&produto_id=' + produto_id;
                                    $.ajax({
                                        url: 'pedido/adicionar/item',
                                        data: todos,
                                        type: "post",
                                        beforeSend: '',
                                        erro: function(){
                                            alert('Erro na solicitação, procure o Administrador.');
                                        },
                                        success: function(data){
                                            if (data == ''){
                                                alert('Item não adicionado')
                                            }else{
                                                novaLinha = "<tr>" +
                                                    "<td class='id'>"+data.id+"</td>" +
                                                    "<td class='descricao'>"+data.descricao+"</td>" +
                                                    "<td class='quantidade'>"+data.quantidade+"</td>" +
                                                    "<td class='preco'>"+data.preco+"</td>" +
                                                    "<td class='total'>"+(data.quantidade*data.preco)+"</td>" +
                                                    "</tr>";
                                                {{--var index = parseInt('{{count($mesa->pedidoAberto[0]->itens)}}');--}}
                                                {{--$('#itempedido{{$mesa->id}} > tbody > tr').eq(index+1).before(novaLinha);--}}
                                                $('#itempedido{{$mesa->id}} > tbody > tr').after(novaLinha);
                                                var precototal = $('.precototal{{$mesa->id}}').text();
                                                var total = parseFloat(precototal)+(data.quantidade*data.preco)
                                                $('.precototal{{$mesa->id}}').text(total)
                                            }
                                        }
                                    })
                                })
                                //#####FIm Adicionando item ##########
                            })

                        </script>
                        <div class="modal fade" id="{{$mesa->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
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

                                        <form action="pedido/adicionar/item" method="POST" name="form_item{{$mesa->id}}">
                                            @csrf
                                            <input type="hidden" name="mesa_id" value="{{$mesa->id}}">
                                            {{--<input type="hidden" name="pedido_id" value="">--}}

                                            <div class="card-body py-5">
                                                <div class="form-group">
                                                    <label for="multi-select">Categoria</label>
                                                    <select id="categoria{{$mesa->id}}" name="categoria{{$mesa->id}}">
                                                        <option value="">Escolha uma Categoria</option>
                                                        @foreach($cat as $c)
                                                            <option name="opcao" value="{{$c->id}}"><a href="/add/item/{{$mesa}}"></a>{{$c->descricao}}</option>
                                                        @endforeach
                                                    </select>

                                                    <select id="produto{{$mesa->id}}" name="produto{{$mesa->id}}">
                                                        <option value="">Escolha uma Produto</option>
                                                    </select>

                                                    <label class="card-body">Quantidade</label>
                                                    <input type="number" class="card-text" name="quantidade">

                                                </div>
                                            </div>


                                            <div class="card-footer" style="align-content: center">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-primary px-5" id="adicionaritem">Adicionar</button>
                                                    </div>

                                                    <div class="col-6">
                                                        <button type="submit" class="btn btn-secondary px-5">Salvar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                        <div class="table-responsive">
                                            <table id="itempedido{{$mesa->id}}" class="table table-striped">
                                                <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Produto</th>
                                                    <th>Quantidade</th>
                                                    <th>Preço</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody class="table{{$mesa->id}}">
                                                <?php
                                                $total = 0
                                                ?>
                                                @if(count($mesa->pedidoAberto[0]->itens) > 0)

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
                                                @else
                                                    <p>Nenhum intem adicionado</p>
                                                @endif
                                              </tbody>
                                            </table>
                                            <div class="fa-pull-right">
                                                Total =<div class="precototal{{$mesa->id}}">{{$total}}</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button  type="button" class="btn btn-link" data-dismiss="modal">Fechar</button>
                                <button id="fechar{{$mesa->id}}" type="button" class="btn btn-primary">Editar Pedido</button>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif



                @endforeach
            @endif
        </div>





@endsection