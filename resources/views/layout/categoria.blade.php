@extends('layout.template')

@section('content')
    <div class="cad border">
        <div class="card-body">
            <h5 class="cad-title">Clientes</h5>
            @if(count($categoria)>0)
                <table class="table table-ordered table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descrição</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categoria as $cat)

                        <tr>
                            <td>{{$cat->id}}</td>
                            <td>{{$cat->descricao}}</td>
                            <td>
                                <div class="float-right">
                                    <a href="/categoria/edit/{{$cat->id}}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Editar</a>
                                {{--<a href="/categoria/delete/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>--}}
                                </div>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                @else
                    <h2 class="card-text">Nenhum Categoria encontrado</h2>
            @endif

        </div>
    </div>

@endsection


