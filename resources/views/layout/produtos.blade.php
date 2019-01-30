@extends('layout.template')
@csrf
@section('content')
<script>

        var alert = $('#alertDelete');
        window.setTimeout(function(){ alert.fadeOut("slow") }, 5000);



</script>
    <div class="cad border">
        <div class="card-body">
            @if((\Session::has('message')))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="alertDelete">
                   {{\Session::get('message')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <h5 class="cad-title">Tabela de Produtos</h5>
            @if(count($prod)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>

                        <th>Descrição</th>
                        <th>Preço</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prod as $p)

                        <tr>
                            <td>{{$p->descricao}}</td>
                            <td>{{$p->preco}}</td>
                            <td>
                                <a href="/produtos/edit/{{$p->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/produtos/delete/{{$p->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                {{--<a href="{{route('clientes.edit',$p->id)}}" class="btn btn-sm btn-primary">Editar</a>--}}
                                {{--<a href="{{route('clientes.delete',$p->id)}}" class="btn btn-sm btn-danger">Apagar</a>--}}
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="card-text">Nenhum cliente encontrado</h2>
            @endif

        </div>
    </div>


@endsection


