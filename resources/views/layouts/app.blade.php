<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('/storage/images/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Materialize CSS -->
    <link href="{{ asset('/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- Materialize CSS -->
    <link href="{{ asset('/css/materialize_custom.css') }}" type="text/css" rel="stylesheet" media="screen,projection">

    <!-- Custom CSS -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    @hasSection('styles')
        @yield('styles')
    @endif

</head>
<body>

<div id="app">

    <nav class="purple darken-3" role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="index.html" class="brand-logo">
                <div class="valign-wrapper">
                    <img class="responsive-img" src="{{asset('storage/images/logo.png')}}" alt="Lancey Leilões">
                </div>
            </a>
            <ul class="right hide-on-med-and-down">
                <li>
                    <a href="{{url('/')}}/login">
                        <div class="valign-wrapper">
                            <i class="material-icons">account_circle</i><span class="texto">Faça seu login</span>
                        </div>
                    </a>
                </li>
                <li><a href="{{url('/')}}/pessoa_fisica">Cadastre-se</a></li>
                <li><a href="{{url('/')}}/quem_somos">Quem Somos</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Fale Conosco</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">
                        <div class="valign-wrapper"><i class="material-icons">account_circle</i><span class="texto">Faça seu login</span>
                        </div>
                    </a></li>
                <li><a href="#">Cadastre-se</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Faq</a></li>
                <li><a href="#">Fale Conosco</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <header class="purple darken-3">
        <div class="section no-pad-bot" id="index-banner">
            <div class="container">
                <br><br>
                <h1 class="header center orange-text">Em breve a Lancey</h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">A plataforma que irá democratizar o leilão de imóveis.</h5>
                </div>
                <div class="row center">
                    <a href="http://materializecss.com/getting-started.html" id="download-button"
                       class="btn-large waves-effect waves-light orange">Conheça nossa plataforma</a>
                </div>
                <br><br>

            </div>
        </div>

        <div class="container">
            <div class="section pesquisa">
                <form method="get" action="" class="row">
                    <div class="col s12 xl3">
                        <label for="tipo_leilao" class="titulo">SELECIONE SEU INTERESSE</label>
                        <div class="input-field">
                            <select name="tipo_leilao" id="tipo_leilao" multiple>
                                <option value="" disabled>Tipo do Leilão</option>
                                <option value="1">Judicial</option>
                                <option value="2">Extrajudicial</option>
                                <option value="3">Privado</option>
                            </select>
                        </div>

                    </div>

                    <div class="col s12 xl3">
                        <label for="tipo_imovel" class="titulo">QUAL TIPO DE IMÓVEL?</label>
                        <div class="input-field">
                            <select name="tipo_imovel" id="tipo_imovel" multiple>
                                <option value="" disabled class="red">Tipo do imóvel</option>
                                <option value="1">Apartamento</option>
                                <option value="2">Casa</option>
                                <option value="3">Loja</option>
                            </select>
                        </div>

                    </div>

                    <div class="col s12 xl5">
                        <label for="localidade" class="titulo">ONDE ?</label>
                        <div class="input-field">
                            <i class="material-icons prefix">textsms</i>
                            <input type="text" name="localidade" id="localidade" placeholder="Digite um bairro ou cidade" class="autocomplete">
                        </div>
                    </div>

                    <div class="col s12 xl1">
                        <br>
                        <div class="input-field center">
                            <button class="btn waves-effect waves-light" type="submit">Buscar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- Fim de .container -->

    </header>





    <main role="main">

        @yield('content')

    </main>


    <footer>

        <div class="container pt-4 pb-5">
            <div class="row">
                <div class="col-xl-8">
                    <h6 class="fonte-cor-secundaria">Newsletter</h6>
                    <p>Cadastre-se para receber as novidades.</p>
                    <form id="form_newslleter" class="d-flex justify-content-middle">
                        <div class="d-inline-block">
                            <input type="email" name="email" class="form-control email" placeholder="Email">
                        </div>
                        <div class="d-inline-block">
                            <button class=" btn btn-cor-secundaria ml-1 mr-1">Cadastrar</button>
                        </div>
                    </form>
                </div>
                <div class="col-xl-2">
                    <h6 class="fonte-cor-secundaria">Informações</h6>
                    <ul>
                        <li><a href="{{url('/')}}/quem_somos">Quem Somos</a></li>
                        <li><a href="{{url('/')}}">Termos de uso</a></li>
                        <li><a href="{{url('/')}}">Perguntas Frequentes</a></li>
                        <li><a href="{{url('/')}}">Fale Conosco</a></li>
                    </ul>
                </div>
                <div class="col-xl-2">
                    <h6 class="fonte-cor-secundaria">Minha Conta</h6>
                    <ul>
                        <li><a href="{{url('/')}}/pessoa_fisica">Cadastre-se</a></li>
                        <li><a href="{{url('/')}}/login">Login</a></li>
                        <li><a href="{{url('/')}}">Esqueci minha senha</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="container-fluid">
            <div class="row copyright">
                <div class="col-xl text-center pt-3 pb-5">
                    <div>Uma empresa do grupo <i class="icone_brasilbrokers"></i></div>
                    <div class="linha_branca_footer mt-1 mb-1"></div>
                    <div>2019 Copyright Brasil Brokers. Todos os direitos reservados</div>
                </div>
            </div>
        </div>

    </footer>

</div>

<!-- Bootstrap JS, JQuery and Core plugin JavaScript -->
<script src="{{ asset(mix('/js/app.js')) }}"></script>
<script src="{{ asset('js/materialize.js')}}"></script>
<script src="{{ asset('js/init.js') }}"></script>

@hasSection('scripts')
    @yield('scripts')
@endif

</body>
</html>
