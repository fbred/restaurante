@extends('layout.template')

@section('content')
<script type="text/javascript">

    $(function () {
       var select = $('#categoria');
        var id = 0;
        var selectProduto = $('#produto')
        url = '/obter/produto'

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
                                id = selecionada.value;
                                    for( id in data){
                                            selectProduto.append('<option value="'+data[id].id+'">'+data[id].descricao+'</option>');
                                    }
                            }
                        }
                    })

                }

            }


        });
        function getProduct() {

        }

    })
    
</script>
    
    
    
    <div class="page-wrapper flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card p-md-5">
                        <div class="card-header text-center text-uppercase h4 font-weight-light">
                            Pedido Mesa {{$mesa}}
                        </div>

                        <form action="/pedidos/produto/categoria/{categoria}" method="POST">
                                @csrf
                            <input type="hidden" name="mesa_id" value="{{$mesa}}">

                            <div class="card-body py-5">
                                <div class="form-group">
                                    <label for="multi-select">Categoria</label>
                                    <select id="categoria" name="categoria">
                                        <option value="">Escolha uma Categoria</option>
                                        @foreach($cat as $c)
                                    <option name="opcao" value="{{$c->id}}"><a href="/add/item/{{$mesa}}"></a>{{$c->descricao}}</option>
                                        @endforeach
                                    </select>

                                    <select id="produto" name="">
                                        <option value="">Escolha uma Produto</option>
                                    </select>

                                    <label class="card-body">Quantidade</label>
                                    <input type="number" class="card-text" name="quantidade">

                                </div>
                            </div>


                        <div class="card-footer" style="align-content: center">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary px-5" >Adicionar</button>
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