@extends('layouts.app')


@section('content')


        <a class="center">Editando Curso</a>


                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                Nome: <input class="form-control form-control-lg" type="text" id="nome" name="nome" value="{{$entidade->nome}}"/>
                CNPJ: <input class="form-control" type="text" placeholder="" id="cnpj" name="cnpj" value="{{$entidade->cnpj}}">
                Tipo: <input class="form-control form-control-sm" type="text" placeholder="" id="tipo" name="tipo" value="{{$entidade->tipo}}">
                Latitude: <input class="form-control form-control-sm" type="text" placeholder="" id="latitude" name="latitude" value="{{$entidade->latitude}}">
                Longitude: <input class="form-control form-control-sm" type="text" placeholder="" id="longitude" name="longitude" value="{{$entidade->longitude}}">
                Status: <input class="form-control form-control-sm" type="text" placeholder="" id="status" name="status" value="{{$entidade->status}}">
                Entidade Vinculada: <input class="form-control form-control-sm" type="text" placeholder="" id="entidade_vinculada" name="entidade_vinculada" value="{{$entidade->entidade_vinculada}}"><br>

                <a class="brand">Responsável</a><br>
                Nome: <input class="form-control form-control-sm" type="text" placeholder="" id="representante" name="representante" value="{{$entidade->representante}}">
                Email: <input class="form-control form-control-sm" type="text" placeholder="" id="email" name="email" value="{{$entidade->email}}">
                Telefone Fixo: <input class="form-control form-control-sm" type="text" placeholder="Telefone fixo" id="telefone_fixo" name="telefone_fixo" value="{{$entidade->telefone_fixo}}">
                Celular: <input class="form-control form-control-sm" type="text" placeholder="Celular" id="telefone_clular" name="telefone_celular" value="{{$entidade->telefone_celular}}">
                Endereço: <input class="form-control form-control-sm" type="text" placeholder="Celular" id="endereco" name="endereco" value="{{$entidade->endereco}}">
                <a href="/entidade/atualizar/{{$entidade->id}}" class="btn btn-warning" >Salvar</a>
            <form method="post" id="form_cadastro_entidade" action="/entidade/atualizar/{{$entidade->id}}">

            </form>


@endsection

