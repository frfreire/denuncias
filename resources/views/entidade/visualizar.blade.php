@extends('layouts.app')

@section('content')


    <table class="table table-hover table-p-3 mb-2 bg-dark text-white">

        @foreach($ver as $v)
        <tbody>
        <p class="font-weight-bold" align="center">Informações da Entidade</p>
        <tr>
            <th scope="row">Entidade</th>
            <td colspan="4">{{$v->nome}}</td>

        </tr>
        <tr>
            <th scope="row">CNPJ</th>
            <td colspan="4">{{$v->cnpj}}</td>

        </tr>
        <tr>
            <th scope="row">Tipo</th>
            <td colspan="4">{{$v->tipo}}</td>

        </tr>
        <tr>
            <th scope="row">Latitude</th>
            <td colspan="2">{{$v->latitude}}</td>
            <th scope="row">Longitude</th>
            <td colspan="2">{{$v->latitude}}</td>
        </tr>
        <tr>
            <th scope="row">Status</th>
            <td colspan="4">{{$v->status}}</td>

        </tr>
        <tr>
            <th scope="row">Entidade Vinculada</th>
            <td colspan="4">{{$v->entidade_vinculada}}</td>

        </tr>
        <tr>
            <th scope="row">Endereço</th>
            <td colspan="4">{{$v->endereco}}</td>

        </tr>
        </tbody>
    </table >
        <p class="font-weight-bold" align="center">Informações do Representante</p>
    <table class="table table-hover table-p-3 mb-2 bg-dark text-white">
        <tbody>
        <tr>
            <th scope="row">Representante</th>
            <td colspan="4">{{$v->representante}}</td>

        </tr>
        <tr>
            <th scope="row">Email</th>
            <td colspan="4">{{$v->email}}</td>

        </tr>
        <tr>
            <th scope="row">Telefone Fixo</th>
            <td colspan="2">{{$v->telefone_fixo}}</td>
            <th scope="row">Telefone Fixo</th>
            <td colspan="2">{{$v->telefone_celular}}</td>

        </tr>

        </tbody>
        @endforeach
    </table>

    <a type="submit" class="btn btn-warning" value="Cadastrar" href="/entidade">Voltar</a>

@endsection

