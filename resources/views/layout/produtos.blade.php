@extends('layout.template')

@section('content')
<div class="cad border">
        <div class="card-body">
            <h5 class="cad-title">Tabela de Produtos</h5>
            @if(count($prod)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>

                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Imagem</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($prod as $p)

                        <tr>
                            <td>{{$p->descricao}}</td>
                            <td>{{$p->preco}}</td>
                            <td>{{$p->categoria}}</td>
                            <td>{{$p->imagem}}</td>
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


