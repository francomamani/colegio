<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        return response()->json(Usuario::orderBy('nombres')->paginate(10), 200);
    }
    public function store() {
        $usuario = new Usuario();
        $usuario->gestion_id = request()->input('gestion_id');
        $usuario->cuenta = request()->input('cuenta');
        $usuario->password = Hash::make(request()->input('password'));
        $usuario->nombres = request()->input('nombres');
        $usuario->apellidos = request()->input('apellidos');
        $usuario->cedula = request()->input('cedula');
        $usuario->direccion = request()->input('direccion');
        $usuario->celular = request()->input('celular');
        $usuario->tipo_usuario = request()->input('tipo_usuario');
        $usuario->save();
        return response()->json($usuario, 201);
    }
}
