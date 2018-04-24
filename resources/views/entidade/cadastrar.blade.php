@extends('layouts.app')

@section('content')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    Nome: <input class="form-control form-control-lg" type="text" id="nome" name="nome"/>
    CNPJ: <input class="form-control" type="text" placeholder="" id="cnpj" name="cnpj">
    Tipo: <input class="form-control form-control-sm" type="text" placeholder="" id="tipo" name="tipo">
    Latitude: <input class="form-control form-control-sm" type="text" placeholder="" id="latitude" name="latitude">
    Longitude: <input class="form-control form-control-sm" type="text" placeholder="" id="longitude" name="longitude">
    Status: <input class="form-control form-control-sm" type="text" placeholder="" id="status" name="status">
    Entidade Vinculada: <input class="form-control form-control-sm" type="text" placeholder="" id="entidade_vinculada" name="entidade_vinculada"><br>

    <a class="brand">Responsável</a><br>
    Nome: <input class="form-control form-control-sm" type="text" placeholder="" id="representante" name="representante">
    Email: <input class="form-control form-control-sm" type="text" placeholder="" id="email" name="email">
    Telefone Fixo: <input class="form-control form-control-sm" type="text" placeholder="Telefone fixo" id="telefone_fixo" name="telefone_fixo">
    Celular: <input class="form-control form-control-sm" type="text" placeholder="Celular" id="telefone_clular" name="telefone_celular">
    Endereço: <input class="form-control form-control-sm" type="text" placeholder="Celular" id="endereco" name="endereco">
    <input type="submit" class="button">
    <div id="content">
<a class="brand">Entidade</a><br><br>

        <form method="post" id="form_cadastro_entidade" action="/entidade/gravar">

        </form>

    </div>

@endsection

