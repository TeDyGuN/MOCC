<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="height: 60px;">
            <div class="container">
                <div class="navbar-header">
                    <!-- Branding Image -->
                    <a class="navbar-brand" style="padding: 0"  href="{{ url('/') }}">
                        <img alt="Brand" style="width: 60px;height: 60px" src="{{ asset('images/logo.png') }}">
                    </a>
                    <a href="" style="margin-left: 10px;" class="navbar-brand">AXEZO</a>
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" >
                        <li>
                            <img width="60px" height="60px" src="{{ asset('/images/user2-160x160.png') }}" alt="">
                        </li>
                        <li class="dropdown">
                            <a href="perfil" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nombre.' '.Auth::user()->apellidos }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Mis Cursos</a></li>
                                <li><a href="#">Ver Perfil</a></li>
                                <li><a href="#">Salir</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vue.min.js') }}"></script>

</body>
@yield('other_scripts')
</html>
