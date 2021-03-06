@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li class="active">{{ $curso[0]->titulo }}</li>
            </ol>
            <h3 style="visibility: hidden;">{{ $success = Session::get('success')}}</h3>
              @if ($success)
                  <div style="margin-top: 20px;"class="alert alert-info">
                      {{ session('success')}}
                  </div>
              @endif
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
            <p class="text-hide">{{ $i = 0 }}</p>
            @foreach($modulos as $c)

                <div class="col-md-2">
                    <div class="thumbnail">
                        <h6 style="height: 40px;"><a href="{{ url('curso/'. $curso[0]->id.'/'.$c->id.'/'.$tt[$i++]  ) }}">{{ $c->nombre }}</a></h6>
                        <img id="img-miniatura" style="height: 150px; width: 100%" src="{{ asset('/images/'.$c->img_url ) }}" alt="...">
                        <span class="label label-success">Progreso</span>
                        <div class="progress">
                            @if($help[$c->n_modulo] == 0)
                                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;text-align: center;color: black">
                                    0%
                                </div>
                            @else
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $help[$c->n_modulo] }}" aria-valuemin="0" aria-valuemax="100" style="{{'width:'.$help[$c->n_modulo].'%' }};">
                                    {{ $help[$c->n_modulo].'%' }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
                <div class="col-md-2">
                    <div class="thumbnail" >
                        @if ($bloq)
                            <h5 style="height: 40px;">Test Completado</h5>
                        @else
                          <h5 style="height: 40px;"><a href="{{ url('curso/test/'.$curso[0]->id )}}">Test</a></h5>
                        @endif
                        <img class="center-block" style="height: 150px; width: 100%;" id="img-miniatura" src="{{ asset('/images/test.png' ) }}" alt="...">

                        <span class="label label-success">Nota</span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $nota }}" aria-valuemin="0" aria-valuemax="100" style="{{ 'width: '. $nota  .'%'}};">
                                {{ $nota }}
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
