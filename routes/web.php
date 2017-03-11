<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('curso/{id}', 'CursoController@getViewCurso');

Route::group(['prefix'=> 'curso', 'namespace' => 'Curso'], function()
{
    /*Route::get('succes', 'LoginController@loginExitoso');
    Route::get('nuevotrabajo', 'TrabajoController@nuevoTrabajo');
    Route::get('find', 'TrabajoController@buscar');
    Route::post('guardar', 'TrabajoController@save');
    Route::get('ListaTrabajos', 'TrabajoController@listadoTrabajos');
    Route::get('MisTrabajos', 'TrabajoController@misTrabajos');
    Route::post('NuevaRevision', 'TrabajoController@nueva_revision');
    Route::post('getRevision', 'TrabajoController@getRevision');
    Route::post('getListaRevision', 'TrabajoController@getListaRevision');
    Route::get('ListaRevision', 'SeguimientoController@ListaRevision');
    Route::get('revision/cursante/{id}', 'SeguimientoController@seguimientoCursante');
    Route::post('revision/guardar', 'SeguimientoController@saveRevision');
    Route::get('storage/{archivo}', function ($archivo) {
        $url = storage_path('app/').$archivo;
        //verificamos si el archivo existe y lo retornamos
        if (\Illuminate\Support\Facades\Storage::exists($archivo))
        {
            return response()->download($url);
        }
        //si no se encuentra lanzamos un error 404.
        abort(404);

    });
    Route::get('storage/Documentacion/{archivo}', function ($archivo) {
        $public_path = public_path();
        $url = $public_path.'/storage/'.$archivo;
        //verificamos si el archivo existe y lo retornamos
        if (Storage::exists($archivo))
        {
            return response()->download($url);
        }
        //si no se encuentra lanzamos un error 404.
        abort(404);
    });*/
});
