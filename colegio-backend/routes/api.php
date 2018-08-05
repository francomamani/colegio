<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

//usuarios
Route::get('usuarios', 'UsuarioController@index');
Route::post('usuarios', 'UsuarioController@store');
Route::resource('gestiones', 'GestionController', ['except' => ['edit', 'create']]);
Route::resource('cursos', 'CursoController', ['except' => ['edit', 'create']]);
Route::resource('profesores', 'ProfesorController', ['except' => ['edit', 'create']]);
Route::resource('estudiantes', 'EstudianteController', ['except' => ['edit', 'create']]);
Route::resource('videos', 'VideoController', ['except' => ['edit', 'create']]);
Route::resource('paralelos', 'ParaleloController', ['except' => ['edit', 'create']]);
Route::resource('asignaturas', 'AsignaturaController', ['except' => ['edit', 'create']]);
Route::resource('asignacion_videos', 'AsignacionVideoController', ['except' => ['edit', 'create']]);
Route::resource('horarios', 'HorarioController', ['except' => ['edit', 'create']]);
Route::resource('inscripciones', 'InscripcionController', ['except' => ['edit', 'create']]);
Route::resource('calificaciones', 'CalificacionController', ['except' => ['edit', 'create']]);
Route::resource('comunicados', 'ComunicadoController', ['except' => ['edit', 'create']]);
Route::resource('imagenes', 'ImagenController', ['except' => ['edit', 'create']]);
Route::resource('permisos', 'PermisoController', ['except' => ['edit', 'create']]);
Route::resource('tipo_asignaturas', 'TipoAsignaturaController', ['except' => ['edit', 'create']]);
