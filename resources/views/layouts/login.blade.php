<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Laravel</title>--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">--}}

    <!-- Styles -->
    {{--<style>--}}
        {{--html, body {--}}
            {{--background-color: #fff;--}}
            {{--color: #636b6f;--}}
            {{--font-family: 'Raleway', sans-serif;--}}
            {{--font-weight: 100;--}}
            {{--height: 100vh;--}}
            {{--margin: 0;--}}
        {{--}--}}

        {{--.full-height {--}}
            {{--height: 100vh;--}}
        {{--}--}}

        {{--.flex-center {--}}
            {{--align-items: center;--}}
            {{--display: flex;--}}
            {{--justify-content: center;--}}
        {{--}--}}

        {{--.position-ref {--}}
            {{--position: relative;--}}
        {{--}--}}

        {{--.top-right {--}}
            {{--position: absolute;--}}
            {{--right: 10px;--}}
            {{--top: 18px;--}}
        {{--}--}}

        {{--.content {--}}
            {{--text-align: center;--}}
        {{--}--}}

        {{--.title {--}}
            {{--font-size: 84px;--}}
        {{--}--}}

        {{--.links > a {--}}
            {{--color: #636b6f;--}}
            {{--padding: 0 25px;--}}
            {{--font-size: 12px;--}}
            {{--font-weight: 600;--}}
            {{--letter-spacing: .1rem;--}}
            {{--text-decoration: none;--}}
            {{--text-transform: uppercase;--}}
        {{--}--}}

        {{--.m-b-md {--}}
            {{--margin-bottom: 30px;--}}
        {{--}--}}
    {{--</style>--}}

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Sistema para Gestão de Informações - SGI</title>
        <!-- Bootstrap core CSS-->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Sistema para Gestão de Informações') }}</a>
        </div>
        <!-- /.navbar-header -->
        {{--@if(Auth::user()->tp_metodo_autenticacao != \App\Enum\TipoAutenticacaoEnum::PORTAL)--}}
            {{--<ul class="nav navbar-top-links navbar-right">--}}
                {{--<li class="dropdown">--}}
                    {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#">--}}
                        {{--<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>--}}
                    {{--</a>--}}
                    {{--<ul class="dropdown-menu dropdown-user">--}}
                        {{--<li>--}}
                            {{--<a href="{{ url('/usuario/meus-dados') }}"><i class="fa fa-user fa-fw"></i>Meus Dados</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url('usuario/meus-dados/alterar_email')}}"><i class="fa fa-envelope fa-fw"></i>Alterar E-mail</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{url('usuario/meus-dados/alterar_senha')}}"><i class="fa fa-lock fa-fw"></i>Alterar Senha</a>--}}
                        {{--</li>--}}

                        {{--</li>--}}
                        {{--<li class="divider"></li>--}}
                        {{--<li>--}}
                            {{--<a href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                {{--document.getElementById('logout-form').submit();">--}}
                                {{--<i class="fa fa-sign-out fa-fw"></i>Sair--}}
                            {{--</a>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--{{ csrf_field() }}--}}
                            {{--</form>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                    {{--<!-- /.dropdown-user -->--}}
                {{--</li>--}}
                {{--<!-- /.dropdown -->--}}
            {{--</ul>--}}
    {{--@endif--}}
    <!-- /.navbar-top-links -->

    </nav>
    {{--@if(Auth::user()->tp_metodo_autenticacao != \App\Enum\TipoAutenticacaoEnum::PORTAL)--}}
        {{--<nav class="sidebar sidebar-nav navbar-collapse collapse in">--}}
            {{--<ul class="nav" id="side-menu">--}}
                {{--@inject('menus', 'App\Models\Menu')--}}
                {{--@foreach($menus->with('filhoMenu')->get() as $menu)--}}
                    {{--@can($menu->id_menu, auth()->user())--}}

                        {{--<li>--}}
                            {{--<a href="{{ url($menu->tx_url_menu) }}" title="{{ $menu->tx_nome_menu }}"><i class="{{ $menu->tx_classe_css_menu }}"></i>--}}
                                {{--<span>{{ $menu->tx_nome_menu }}</span>--}}
                                {{--@if($menu->filhoMenu->isNotEmpty())--}}
                                    {{--<span class="fa arrow"></span>--}}
                                {{--@endif--}}
                            {{--</a>--}}
                            {{--@if($menu->filhoMenu->isNotEmpty())--}}
                                {{--<ul class="nav nav-second-level collapse">--}}
                                    {{--@foreach($menu->filhoMenu as $submenu)--}}
                                        {{--<li>--}}
                                            {{--<a href="{{ url($submenu->tx_url_menu) }}">{{ $submenu->tx_nome_menu }}</a>--}}
                                        {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                            {{--@endif--}}
                        {{--</li>--}}

                    {{--@endcan--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</nav>--}}
{{--@endif--}}

<!-- Conteudo Central -->
    <div id="page-wrapper">
        @yield('content')
    </div>


</div>
{{--<div class="flex-center position-ref full-height">--}}
    {{--@if (Route::has('login'))--}}
        {{--<div class="top-right links">--}}
            {{--@auth--}}
                {{--<a href="{{ url('/home') }}">Home</a>--}}
            {{--@else--}}
                {{--<a href="{{ route('login') }}">Login</a>--}}
                {{--<a href="{{ route('register') }}">Register</a>--}}
            {{--@endauth--}}
        {{--</div>--}}
    {{--@endif--}}

{{--</div>--}}
</body>
</html>
