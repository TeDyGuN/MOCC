@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Inicio</a></li>
                <li class="active">Admin</li>
            </ol>
            <div class="col-md-3">
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
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Reportes
                    </div>
                    <div class="panel-body">

                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{ url('reportes/docente') }}">Reportes Docente</a></li>
                            <li class="list-group-item"><a href="{{ url('reportes/instituto') }}">Reportes Institucion</a></li>
                            <li class="list-group-item"><a href="{{ url('reportes/curso') }}">Reportes Cursos Registrados</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Cursos Terminados
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nombres</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Curso</th>
                                    <th>Nota</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($ct as $c)
                                    <tr>
                                        <td>{{ $c->nombre .' '.$c->apellidos }}</td>
                                        <td>{{ $c->celular }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td>{{ $c->titulo }}</td>
                                        <td>{{ $c->nota }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
