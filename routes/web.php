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
Route::get('curso/{idc}/{idm}/{idt}', 'CursoController@getViewModulo');
Route::post('curso/terminarC', 'CursoController@Pcursoterminado');
Route::get('storage/{archivo}', function ($archivo) {

    $url = storage_path().$archivo;
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