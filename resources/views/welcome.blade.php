<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>AXEZO</title>

    {{--azul marino, plomo negro y anaranjado--}}

    <!-- CSS MINE -->
    <link href="{{ asset('/css/xz.css') }}" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{ asset('/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/jumbotron.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container-fluid">
        <div class="navbar-header">
            <div class="side">
                <img src="{{ asset('/images/logo.png') }}"  width="72px" height="72px" alt="Responsive image">
            </div>
            <div class="side">
                <a class="under tp" href="#">AXEZO</a>
                <div id="rectangle"></div>
                <p class="under ts" href="#"><strong>CURSOS VIRTUALES GRATIS</strong></p>
            </div>


        </div>
        <div id="navbar2" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"  style="padding: 15px 0 0 0; margin-right: 25px">
                        <img src="{{ asset('/images/b1.gif') }}"  width="250px" height="60px" alt="Responsive image">
                    </a>
                </li>
                <li >
                    <a href="#" style="padding: 15px 0 0 0">
                        <img src="{{ asset('/images/b2.gif') }}"  width="250px" height="60px" alt="Responsive image">
                    </a>
                </li>
            </ul>
        </div>
        {{--<div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-right">
                <li>
                    <figure>
                        <img src="{{ asset('/images/b1.gif') }}"   alt="Responsive image">
                    </figure>
                </li>
                <li>
                    <figure>
                        <img src="{{ asset('/images/b2.gif') }}"   alt="Responsive image">
                    </figure>
                </li>
            </ul>
        </div><!--/.navbar-collapse -->--}}
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container-fluid">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3 margen" >
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/rwm2ZSQdzyE"></iframe>
            </div>

            <p class="text-justify" style="margin-top: 20px"><strong>XZ: </strong>Actualizate en las area tecnologica y sociales</p>
            <ul>
                <li><p class="text-justify"><strong>Curso: </strong>Los cursos son 100% en linea y gratiutos</p></li>
                <li><p class="text-justify"> <strong>Certificado: </strong>Al aprobar el usuario cualquiera de los cursos virtuales, se le otorgara un certificado digital o en fisico con las respectivas firmas y sellos de la Universidad o Instituto Tecnico que acredita el curso y de Axezo</p></li>
                <li><p class="text-justify"> <strong>Registro: </strong>Los datos que el usuario llene en el registro se usaran para emitir el certificado</p></li>
            </ul>
        </div>
        <div class="col-md-2 margen">
            <div class="thumbnail" style="padding: 0;">
                <img id="img-miniatura" src="{{ asset('/images/ex2.jpg') }}" alt="...">
                <div class="caption">
                    <h5><strong>Psicologia de la Atraccion Interpersonal: Caso Norte Potosi</strong></h5>
                    <p>Universidad XXX</p>

                </div>
                <div class="bordertop">
                    <p style="margin-bottom: 0; padding-bottom: 0"><span class="label label-warning">Gratis</span> <a href="#" class="btn btn-primary text-right" style="background-color: #00a2e8;float: right" role="button">Iniciar el Curso</a></p>
                </div>
            </div>
            <div class="thumbnail" style="padding: 0;">
                <img id="img-miniatura" src="{{ asset('/images/ex1.jpg') }}" alt="...">
                <div class="caption">
                    <h5><strong>Psicologia de la Atraccion Interpersonal: Caso Norte Potosi</strong></h5>
                    <p>Universidad XXX</p>

                </div>
                <div class="bordertop">
                    <p style="margin-bottom: 0; padding-bottom: 0"><span class="label label-warning">Gratis</span> <a href="#" class="btn btn-primary text-right" style="background-color: #00a2e8;float: right" role="button">Iniciar el Curso</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-2 margen">
            <div class="thumbnail" style="padding: 0;">
                <img id="img-miniatura" src="{{ asset('/images/ex3.jpg') }}" alt="...">
                <div class="caption">
                    <h5><strong>Psicologia de la Atraccion Interpersonal: Caso Norte Potosi</strong></h5>
                    <p>Universidad XXX</p>

                </div>
                <div class="bordertop">
                    <p style="margin-bottom: 0; padding-bottom: 0"><span class="label label-warning">Gratis</span> <a href="#" class="btn btn-primary text-right" style="background-color: #00a2e8;float: right" role="button">Iniciar el Curso</a></p>
                </div>
            </div>
            <div class="thumbnail" style="padding: 0;">
                <img id="img-miniatura" src="{{ asset('/images/ex4.jpg') }}" alt="...">
                <div class="caption">
                    <h5><strong>Psicologia de la Atraccion Interpersonal: Caso Norte Potosi</strong></h5>
                    <p>Universidad XXX</p>

                </div>
                <div class="bordertop">
                    <p style="margin-bottom: 0; padding-bottom: 0"><span class="label label-warning">Gratis</span> <a href="#" class="btn btn-primary text-right" style="background-color: #00a2e8;float: right" role="button">Iniciar el Curso</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-2 margen">
            <div class="thumbnail" style="padding: 0;">
                <img id="img-miniatura" src="{{ asset('/images/ex5.jpg') }}" alt="...">
                <div class="caption">
                    <h5><strong>Psicologia de la Atraccion Interpersonal: Caso Norte Potosi</strong></h5>
                    <p>Universidad XXX</p>

                </div>
                <div class="bordertop">
                    <p style="margin-bottom: 0; padding-bottom: 0"><span class="label label-warning">Gratis</span> <a href="#" class="btn btn-primary text-right" style="background-color: #00a2e8;float: right" role="button">Iniciar el Curso</a></p>
                </div>
            </div>
            <div class="thumbnail" style="padding: 0;">
                <img id="img-miniatura" src="{{ asset('/images/ex6.jpg') }}" alt="...">
                <div class="caption">
                    <h5><strong>Psicologia de la Atraccion Interpersonal: Caso Norte Potosi</strong></h5>
                    <p>Universidad XXX</p>

                </div>
                <div class="bordertop">
                    <p style="margin-bottom: 0; padding-bottom: 0"><span class="label label-warning">Gratis</span> <a href="#" class="btn btn-primary text-right" style="background-color: #00a2e8;float: right" role="button">Iniciar el Curso</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3 margen">
            @if (Auth::check())
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background: #00a2e8;">
                        <h3 class="panel-title">Perfil</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-3 hidden-xs" style="padding: 0;">
                            <img src="{{ asset("/images/user2-160x160.png") }}" alt="Foto" class="img-thumbnail img-responsive">
                        </div>
                        <div class="col-sm-9">
                            <p id="datos">{{ Auth::user()->nombre.' '.Auth::user()->apellidos}}</p>
                            <p id="datos">{{ Auth::user()->celular}}</p>
                            <p id="datos">{{ Auth::user()->email}}</p>
                            <div>
                                <a href="{{ route('logout') }}">
                                    Ver Perfil
                                </a>
                                <a class="pull-right" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    Salir
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @else
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background: #00a2e8;">
                        <h3 class="panel-title">Ingresar</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-sm-3 control-label">E-Mail</label>

                                <div class="col-sm-9">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-sm-3 control-label">Contraseña</label>

                                <div class="col-sm-9">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            {{--
                                                    <div class="form-group">
                                                        <div class="col-md-6 col-md-offset-4">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>--}}
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Ingresar
                                    </button>

                                    {{--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>--}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading" style="background: #00a2e8;">
                        <h3 class="panel-title">Registro</h3>
                    </div>
                    <div class="panel-body">
                        <p>Los datos que llene se usaran para emitir su certificado y comunicarnos con usted</p>
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                                <label for="nombre" class="col-sm-3 control-label">Nombres: </label>

                                <div class="col-sm-9">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                                <label for="apellidos" class="col-sm-3 control-label">Apellidos: </label>

                                <div class="col-sm-9">
                                    <input id="apellidos" type="text" class="form-control" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                    @if ($errors->has('apellidos'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('apellidos') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                                <label for="celular" class="col-sm-3 control-label">Celular: </label>

                                <div class="col-sm-9">
                                    <input id="celular" type="text" class="form-control" name="celular" value="{{ old('celular') }}" required autofocus>

                                    @if ($errors->has('celular'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('celular') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-sm-3 control-label">E-Mail: </label>

                                <div class="col-sm-9">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-sm-3 control-label">Contraseña: </label>

                                <div class="col-sm-9">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-sm-3 control-label">Confirmar Contraseña: </label>
                                <div class="col-sm-9">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif

        </div>
    </div>

    <hr>

    <footer>
        <p><i>Universidades e Institutos Tecnicos que respaldan academicamente a AXEZO</i></p>
        <div id="footer-axezo">
            <img src="{{ asset('/images/logo2.jpg') }}">
            <img src="{{ asset('/images/logo3.png') }}">
            <ul>
                <li>Calle Ma. L. Bustos N° 477 Cochabamba</li>
                <li>4569645</li>
                <li>60276790</li>
                <li>Axezo</li>
                <li>axezo16@gmail.com</li>
            </ul>
        </div>

    </footer>
</div> <!-- /container -->



<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('/js/jquery.min.js') }}"><\/script>')</script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
</body>
</html>
