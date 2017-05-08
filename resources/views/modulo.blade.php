@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li><a href="{{ url('curso/'.$modulo[0]->c_id) }}">{{ $modulo[0]->c_titulo }}</a></li>
                <li class="active">{{ $modulo[0]->nombre }}</li>
            </ol>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Lista de Temas
                    </div>
                    <div class="panel-body" id="app">
                        <ul class="list-group" >
                            {{--@for ($i = 1; $i < $id_t; $i++)--}}
                            @for ($i = $tt; $i < $id_t; $i++)
                                @if($p[$i-$tt+1] == 1)
                                    <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-$tt]->id  ) }}" class="list-group-item list-group-item-success"><span class="badge">03:00</span>{{ $temas[$i-$tt]->nombre }}</a>
                                @else
                                    <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-$tt]->id  ) }}" class="list-group-item"><span class="badge">03:00</span>{{ $temas[$i-$tt]->nombre }}</a>
                                @endif
                            @endfor
                            <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-$tt]->id  ) }}" class="list-group-item active"><span class="badge">03:00</span>{{ $temas[$i-$tt]->nombre }}</a>
                            @for ($i = $id_t + 1; $i <= ($tt + $modulo[0]->n_cursos-1); $i++)
                                @if($p[$i-$tt+1] == 1)
                                    <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-$tt]->id  ) }}" class="list-group-item list-group-item-success"><span class="badge">03:00</span>{{ $temas[$i-$tt]->nombre }}</a>
                                @else
                                    <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-$tt]->id  ) }}" class="list-group-item"><span class="badge">03:00</span>{{ $temas[$i-$tt]->nombre }}</a>
                                @endif
                            @endfor
                                {{--@for ($i = 1; $i <= $modulo[0]->n_cursos; $i++)
                                    @if($p[$i] == 1)
                                        <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-1]->id  ) }}" class="list-group-item list-group-item-success"><span class="badge">3 Minutos</span>{{ $temas[$i-1]->nombre }}</a>
                                    @else
                                        <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-1]->id  ) }}" class="list-group-item"><span class="badge">3 Minutos</span>{{ $temas[$i-1]->nombre }}</a>
                                    @endif
                                    @if($temas[$i-1]->id == $id_t)
                                        <a href="{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id.'/'.$temas[$i-1]->id  ) }}" class="list-group-item active"><span class="badge">3 Minutos</span>{{ $temas[$i-1]->nombre }}</a>
                                    @endif
                                @endfor--}}
                        </ul>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Mas Contenido
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            @foreach($docs as $d)
                                <a href="{{url('/storage/'.$d->url)}}" class="list-group-item">{{ $d->nombre }}</a>
                            @endforeach
                            {{--<a href="#" class="list-group-item active">
                                Cras justo odio
                            </a>--}}
                        </div>
                    </div>

                </div>
            </div>
            <form role="form" method="POST" name="form_1" action="{{ url('curso/terminarC') }}">
                {{ csrf_field() }}
                <input id="id_tema" type="hidden" name="id_tema" value="{{ $temas[$id_t-$tt]->id }}" required>
                <input id="id_tema" type="hidden" name="id_curso" value="{{ $modulo[0]->c_id }}" required>
                <input id="id_tema" type="hidden" name="id_modulo" value="{{ $modulo[0]->id }}" required>
                <input id="id_tema" type="hidden" name="n_cursos" value="{{ $modulo[0]->n_cursos }}" required>
            </form>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $temas[$id_t-$tt]->nombre}}
                    </div>
                    <div class="panel-body">
                        {{ $temas[$id_t-$tt]->descripcion}}
                        {{--<div style="margin-top: 10px;" class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $temas[0]->url_video }}"></iframe>
                        </div>--}}
                        <div style="margin-top: 10px;"  id="player"></div>
                        <script src="http://www.youtube.com/player_api"></script>
                        <script>
                            // create youtube player
                            var player;
                            var next = {{$id_t}} + 1;
                            function onYouTubePlayerAPIReady() {
                                player = new YT.Player('player', {
                                    videoId: '{{ $temas[$id_t-$tt]->url_video }}',
                                    events: {
                                        'onReady': onPlayerReady,
                                        'onStateChange': onPlayerStateChange
                                    }
                                });
                            }

                            // autoplay video
                            function onPlayerReady(event) {
                                //event.target.playVideo();
                            }
                            // when video ends
                            function onPlayerStateChange(event) {
                                if(event.data === 0) {
                                    document.form_1.submit();
                                    //window.location.href = '{{ url('curso/'.$modulo[0]->c_id.'/'.$modulo[0]->id) }}'+'/'+next;
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('other_scripts')
    {{--<script type="text/javascript">
        new Vue({
            el: '#app',
            data: {
                temas: {!! json_encode($temas->toArray()) !!}
            }
        });
    </script>--}}
@endsection
