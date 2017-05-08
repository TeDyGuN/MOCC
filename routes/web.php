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
Route::get('/', 'CursoController@getCurso');
Route::get('curso/{id}', 'CursoController@getViewCurso');
Route::get('curso/test/{id}', 'TestController@getTestView');
Route::post('curso/SaveTest', 'TestController@SaveTest');
Route::get('curso/{idc}/{idm}/{idt}', 'CursoController@getViewModulo');
Route::post('curso/terminarC', 'CursoController@Pcursoterminado');
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
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('perfil', 'PerfilController@getPerfil');
Route::post('perfil/update', 'PerfilController@updatePerfil');

Route::get('admin', 'AdminController@getAdmin');
Route::get('admin/docente', 'AdminController@getDocente');
Route::post('admin/save_docente', 'AdminController@saveDocente');

Route::get('admin/institucion', 'AdminController@getInstitucion');
Route::post('admin/save_inst', 'AdminController@saveInstitucion');

Route::get('admin/crear_curso', 'AdminController@getCrearCurso');
Route::post('admin/saveCurso', 'AdminController@saveCurso');
//Route::post('perfil/update', 'PerfilController@updatePerfil');
