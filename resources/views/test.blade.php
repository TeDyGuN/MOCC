@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
      <div class="panel panel-primary">
          <div class="panel-heading">
              <h3 class="panel-title">Examen</h3>
          </div>
          <div class="panel-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url( 'curso/SaveTest' ) }}">
                {{ csrf_field() }}
                <input type="hidden" name="id_test" value="{{ $test_array['id_test'] }}">
                <input type="hidden" name="n_preguntas" value="{{ $test_array['n_preguntas'] }}">
                <input type="hidden" name="id_curso" value="{{ $test_array['id_curso'] }}">

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
                    <div class="col-md-8 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Enviar Examen
                        </button>

                        {{--<a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>--}}
                    </div>
                </div>
            </form>

          </div>
      </div>

    </div>
</div>
@endsection
