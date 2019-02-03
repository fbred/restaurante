@extends('layout.template')

@section('content')
    <div class="cad border">
        <div class="card-body">
            <h5 class="cad-title">Clientes</h5>
            @if(count($clientes)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>

                        <th>Nome</th>
                        <th>Endereço</th>
                        <th>Data de Nascimento</th>
                        <th>sexo</th>
                        <th>Telefome</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)

                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->endereco}}</td>
                            <td>{{$cliente->data_nascimento}}</td>
                            <td>{{$cliente->sexo}}</td>
                            <td>{{$cliente->telefone}}</td>
                            <td>
                                <a href="/clientes/edit/{{$cliente->id}}" class="btn btn-sm btn-primary">Editar</a>
                                <a href="/clientes/delete/{{$cliente->id}}" class="btn btn-sm btn-danger">Apagar</a>
                                {{--<a href="{{route('clientes.edit',$cliente->id)}}" class="btn btn-sm btn-primary">Editar</a>--}}
                                {{--<a href="{{route('clientes.delete',$cliente->id)}}" class="btn btn-sm btn-danger">Apagar</a>--}}
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


