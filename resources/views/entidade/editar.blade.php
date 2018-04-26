@extends('layouts.app')


@section('content')


        <a class="font-weight-bold">Editando Entidade</a>

        <form method="post" id="form_cadastro_entidade" action="/entidade/atualizar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <input type="hidden" name="id" value="{{$entidade->id}}">
                Nome: <input class="form-control border border-dark" align="left" type="text" id="nome" name="nome" value="{{$entidade->nome}}"/>
                CNPJ: <input class="form-control border border-dark" type="text" placeholder="" id="cnpj" name="cnpj" value="{{$entidade->cnpj}}">
                Tipo: <input class="form-control border border-dark" type="text" placeholder="" id="tipo" name="tipo" value="{{$entidade->tipo}}">
                <div class="row">
                    <div class="col">
                        Latitude: <input class="form-control border border-dark" type="text" placeholder="" id="latitude" name="latitude" value="{{$entidade->latitude}}">
                    </div>
                    <div class="col">
                        Longitude: <input class="form-control border border-dark"  type="text" placeholder="" id="longitude" name="longitude" value="{{$entidade->longitude}}">
                    </div>
                </div>
                Status: <input class="form-control border border-dark" type="text" placeholder="" id="status" name="status" value="{{$entidade->status}}">
                Entidade Vinculada: <input class="form-control border border-dark" type="text" placeholder="" id="entidade_vinculada" name="entidade_vinculada" value="{{$entidade->entidade_vinculada}}">
                Endereço: <input class="form-control border border-dark" type="text" placeholder="Endereço" id="endereco" name="endereco" value="{{$entidade->endereco}}">

                <a class="brand">Responsável</a><br>
                Nome: <input class="form-control border border-dark" type="text" placeholder="" id="representante" name="representante" value="{{$entidade->representante}}">
                Email: <input class="form-control border border-dark" type="text" placeholder="" id="email" name="email" value="{{$entidade->email}}">
                <div class="row">
                    <div class="col">
                        Telefone Fixo: <input class="form-control border border-dark" type="text" placeholder="Telefone fixo" id="telefone_fixo" name="telefone_fixo" value="{{$entidade->telefone_fixo}}">
                    </div>
                    <div class="col">
                        Celular: <input class="form-control border border-dark" type="text" placeholder="Celular" id="telefone_clular" name="telefone_celular" value="{{$entidade->telefone_celular}}">
                    </div>
                </div>



            <div class="card-header" id="content">


                <input type="submit" class="btn btn-warning " value="Salvar" onClick="alert('Edição feita com sucesso!')"/>
            </div>

        </form>


@endsection

