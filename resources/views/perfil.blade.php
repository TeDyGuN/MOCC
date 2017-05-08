@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li class="active">Perfil</li>
            </ol>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Perfil</h3>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="{{ url( 'perfil/update' ) }}">
                      {{ csrf_field() }}
                      {{-- <input type="hidden" name="id_test" value="{{ $test_array['id_test'] }}"> --}}
                          <p><strong>Nombres y apellidos: </strong>{{ $perfil[0]->nombre . ' '.$perfil[0]->apellidos}}</p>

                          <p><strong>Email: </strong>{{ $perfil[0]->email }}</p>
                          <p><strong>Celular: </strong></p>
                          <input id="celular" type="text" class="form-contro" name="celular" value="{{ $perfil[0]->celular }}">

                          <p>{{ $perfil[0]->pais }}</p>
                          <p>{{ $perfil[0]->ciudad }}</p>
                          {{--
                          @for ($i=1; $i <= $test_array['n_preguntas'] ; $i++)
                              <input type="hidden" name="{{ 'id_pregunta'.$test_array[$i]['id'] }}" value="{{ $test_array[$i]['id'] }}">
                              <h3>{{$i.' - '. $test_array[$i]['pregunta']}}</h3>
                              @for ($j=1; $j <=4 ; $j++)
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="{{ "optionsRadios".$i }}" id="{{ "optionsRadios".$j }}" value="{{$j}}">
                                        {{ $test_array[$i]['respuestas'][$j]['respuesta'] }}
                                  </label>
                                </div>
                              @endfor
                          @endfor
                      <div class="form-group">
                          <div class="col-md-8 col-md-offset-4"> --}}
                              <button type="submit" class="btn btn-primary">
                                  Guardar Datos
                              </button>
                              {{ $success = Session::get('success')}}</h3>
                                @if ($success)
                                    <div style="margin-top: 20px;"class="alert alert-info">
                                        {{ session('success')}}
                                    </div>
                                @endif

                              {{--<a class="btn btn-link" href="{{ route('password.request') }}">
                                  Forgot Your Password?
                              </a>--}}

                          </form>
                        </div>
                <div class="panel-heading">
                    <h3 class="panel-title">Cursos Terminados</h3>
                </div>
                <div class="panel-body">
                  <div class="col-md-6 margen">
                      @foreach($cursos as $c)
                          <div class="col-md-4 thumbnail" style="padding:0;padding-left: 15px;padding-right: 15px;border: 0;">
                              <img id="img-miniatura" src="{{ asset('/images/'.$c->url_img ) }}" alt="...">
                              <div class="caption">
                                  <h5><strong>{{  $c->titulo }}</strong></h5>

                              </div>
                              <div class="bordertop">
                                  <p>Gratis</p>
                                  {{-- @if(Auth::guest())
                                      <p style="margin-bottom: 0; padding-bottom: 0"><a href="" data-toggle="modal" data-target="#myModal" class="btn btn-primary text-right" style="background-color: #e2e20b;float: right; border-color: #e2e20b;color: black; position: absolute;right: 20px;" role="button">Ir al Curso</a></p>
                                  @else
                                      @if(count($c_tests) > 0)
                                        @foreach ($c_tests as $d)
                                            @if($c->id == $d->curso_id)
                                                <p style="margin-bottom: 0; padding-bottom: 0"><a href="{{ url('curso/'.$c->id) }}" class="btn btn-primary text-right" style="background-color: #e2e20b;float: right; border-color: #e2e20b;color: black;position: absolute;right: 20px;" role="button">Curso Completado</a></p>
                                            @else --}}
                                                <p style="margin-bottom: 0; padding-bottom: 0"><a href="{{ url('curso/'.$c->id) }}" class="btn btn-primary text-right" style="background-color: #e2e20b;float: right; border-color: #e2e20b;color: black;position: absolute;right: 20px;" role="button">Recibir Certificado</a></p>
                                            {{-- @endif
                                        @endforeach
                                      @else
                                          <p style="margin-bottom: 0; padding-bottom: 0"><a href="{{ url('curso/'.$c->id) }}" class="btn btn-primary text-right" style="background-color: #e2e20b;float: right; border-color: #e2e20b;color: black;position: absolute;right: 20px;" role="button">Ir al Curso</a></p>

                                      @endif

                                  @endif --}}
                              </div>
                          </div>
                      @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
@endsection
