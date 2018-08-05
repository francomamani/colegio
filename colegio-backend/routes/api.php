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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//usuarios
Route::get('usuarios', 'UsuarioController@index');
Route::post('usuarios', 'UsuarioController@store');
Route::resource('gestiones', 'GestionController', ['except' => ['edit', 'create']]);
Route::resource('cursos', 'CursoController', ['except' => ['edit', 'create']]);
Route::resource('profesores', 'ProfesorController', ['except' => ['edit', 'create']]);
Route::resource('estudiantes', 'EstudianteController', ['except' => ['edit', 'create']]);