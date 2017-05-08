@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li class="active">Crear Curso</li>
            </ol>
            <div class="panel panel-primary">
                <div class="panel-heading" style="background: #00a2e8;">
                    <h3 class="panel-title">Nuevo Curso</h3>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data"  method="POST" action="{{ url('admin/saveCurso') }}">
                        {{ csrf_field() }}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Hay problemas con tus Entradas<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Titulo del curso: </label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Docentes</label>
                            <div class="col-md-6">
                                <select class="form-control" name="docente">
                                    @foreach($docentes as $m)
                                        <option value="{{ $m->id }}">{{$m->nombre . ' '. $m->apellidos}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label colorazul" style="font-size: 1.2em">Institutos</label>
                            <div class="col-md-6">
                                <select class="form-control" name="inst">
                                    @foreach($institutos as $m)
                                        <option value="{{ $m->id }}">{{$m->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('num_modulo') ? ' has-error' : '' }}">
                            <label for="num_modulo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Numero de Modulos: </label>
                            <div class="col-md-6">
                                <input id="num_modulo" type="number" class="form-control" name="num_modulo" value="{{ old('num_modulo') }}" required autofocus>

                                @if ($errors->has('num_modulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('num_modulo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{--<div class="form-group">--}}
                            {{--<label for="archivo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Imagen de Presentacion</label>--}}
                            {{--<div class="col-md-3">--}}
                                {{--<input type="file"  name="img_present" id="img_present"/>--}}
                            {{--</div>--}}
                            {{--<label for="img_present" class="col-md-3 control-label colorazul">Solo Archivos de Imagen: .jpg .png</label>--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label for="archivo" class="col-md-4 control-label colorazul" style="font-size: 1.2em">Excel de Curso</label>
                            <div class="col-md-3">
                                <input type="file" required name="archivo" id="archivo"/>
                            </div>
                            <label for="archivo" class="col-md-3 control-label colorazul">Solo Archivos Excel: .xls .xlsx</label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                        {{ $success = Session::get('success')}}
                        @if ($success)
                            <div class="alert alert-success">
                                <strong>!!Felicidades!!</strong>Se creo el Curso Correctamente<br><br>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
