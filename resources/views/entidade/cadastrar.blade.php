@extends('layouts.app')

@section('content')
    <p class="font-weight-bold">Entidade</p>
    <form method="post" id="form_cadastro_entidade" action="/entidade/gravar">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        Nome: <input class="form-control border border-dark" align="left" type="text" id="nome" name="nome"/>
        CNPJ: <input class="form-control border border-dark" type="text" placeholder="" id="cnpj" name="cnpj">
        Tipo: <input class="form-control border border-dark" type="text" placeholder="" id="tipo" name="tipo">
        <div class="row">
            <div class="col">
                Latitude: <input class="form-control border border-dark" type="text" placeholder="" id="latitude" name="latitude">
            </div>
            <div class="col">
                Longitude: <input class="form-control border border-dark"  type="text" placeholder="" id="longitude" name="longitude">
            </div>
        </div>
        Status: <input class="form-control border border-dark" type="text" placeholder="" id="status" name="status">
        Entidade Vinculada: <input class="form-control border border-dark" type="text" placeholder="" id="entidade_vinculada" name="entidade_vinculada">
        Endereço: <input class="form-control border border-dark" type="text" placeholder="Endereço" id="endereco" name="endereco">
        <br>

        <p class="font-weight-bold">Informações do Representante</p>

        Nome: <input class="form-control border border-dark" type="text" placeholder="" id="representante" name="representante">
        Email: <input class="form-control border border-dark" type="text" placeholder="" id="email" name="email">
        <div class="row">
            <div class="col">
                Telefone Fixo: <input class="form-control border border-dark" type="text" placeholder="Telefone fixo" id="telefone_fixo" name="telefone_fixo">
            </div>
            <div class="col">
                Celular: <input class="form-control border border-dark" type="text" placeholder="Celular" id="telefone_clular" name="telefone_celular">
            </div>
        </div>


        <div class="card-header" id="content">
            <a type="submit" class="btn btn-warning" value="Voltar" href="/entidade">Voltar</a>
            <input type="submit" class="btn btn-warning" value="Salvar" onClick="alert('Cadastro realizado com sucesso!')"/>

        </div>
        <div>

        </div>
    </form>



@endsection

