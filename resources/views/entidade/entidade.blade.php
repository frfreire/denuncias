@extends('layouts.app')

@section('content')
<div id="content">

        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <thead>

                    <tr>
                        <th>Nome</th>
                        <th>CNPJ</th>
                        <th>Entidade Vinculada</th>
                        <th>Status</th>
                        <th>Tipo</th>
                        <th>Opçoes</th>
                    </tr>
                </thead>
                @foreach($entidades as $e)
                <tbody>
                    <tr>
                        <td><p>{{$e->nome}}</p></td>
                        <td><p>{{$e->cnpj}}</p></td>
                        <td><p>{{$e->entidade_vinculada}}</p></td>
                        <td><p>{{$e->status}}</p></td>
                        <td><p>{{$e->tipo}}</p></td>
                        <td>
                            <a class="fa fa-fw fa-wrench" id="messagesDropdown" href="/entidade/editar/{{$e->id}}" title="Editar"></a>
                            <a class="fa fa-search" id="messagesDropdown" href="/entidade/visualizar/{{$e->id}}" title="Visualizar"></a>
                            <a class="fa fa-trash" id="messagesDropdown" href="/entidade/deletar/{{$e->id}}" title="Remover" onClick="alert('Entidade removida!!')"></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>

    </div>
@endsection




