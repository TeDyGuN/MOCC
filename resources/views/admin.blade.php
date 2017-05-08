@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li class="active">Admin</li>
            </ol>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Crear Cursos
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ url('admin/docente') }}">Registar Docente</a></li>
                            <li class="list-group-item"><a href="{{ url('admin/institucion') }}">Registar Institucion</a></li>
                            <li class="list-group-item"><a href="{{ url('admin/crear_curso') }}">Crear Curso</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <h2>asdasdasd</h2>
            </div>
            <div class="col-md-4">
                <h2>asdasdasd</h2>
            </div>
        </div>
    </div>
@endsection
