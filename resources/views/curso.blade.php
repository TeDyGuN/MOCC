@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Cursos</a></li>
                <li class="active">{{ $curso[0]->titulo }}</li>
            </ol>
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $curso[0]->url_video }}"></iframe>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        {{ $curso[0]->c_desc }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Facilitador
                    </div>
                    <div class="panel-body">
                        <p>{{ $tutor[0]->nombre .' '.$tutor[0]->apellidos }}, {{ $tutor[0]->t_desc }}
                        </p>
                        <a class="alert-danger" href="{{$tutor[0]->t_web}}">Mayor Informacion</a>
                    </div>
                    <div class="panel-body">
                        <h5>Contacto</h5>
                        <p>Celular: {{ $tutor[0]->celular }}</p>
                        <p>Email: {{ $tutor[0]->email }}</p>
                        <p>Web: {{ $tutor[0]->t_web }}</p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Institucion Acreditaroa
                    </div>
                    <div class="panel-body">
                        <p>{{ $curso[0]->i_nombre}}</p>
                        <p>{{ $curso[0]->i_desc }}</p>
                        <a class="alert-danger" href="http://{{$curso[0]->i_web}}">Mayor Informacion</a>
                    </div>
                    <div class="panel-body">
                        <h5>Contacto</h5>
                        <p>Direccion: {{ $curso[0]->i_dir }}</p>
                        <p>Telefono : {{ $curso[0]->i_tel }}</p>
                        <p>Email    : {{ $curso[0]->i_email }}</p>
                        <p>Web      : <a href="http://{{$curso[0]->i_web}}">{{ $curso[0]->i_web }}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($modulos as $c)
                <div class="col-md-2">
                    <div class="thumbnail">
                        <h6 style="height: 40px;">{{ $c->nombre }}</h6>
                        <img id="img-miniatura" style="height: 150px; width: 100%" src="{{ asset('/images/'.$c->img_url ) }}" alt="...">
                        <span class="label label-success">Progreso</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                80%
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-md-2">
                    <div class="thumbnail" >
                        <h5 style="height: 40px;">Test</h5>
                        <img class="center-block" style="height: 150px; width: 100%;" id="img-miniatura" src="{{ asset('/images/test.png' ) }}" alt="...">

                        <span class="label label-success">Nota</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                80/100
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
