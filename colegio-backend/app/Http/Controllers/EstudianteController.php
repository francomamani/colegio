<?php

namespace App\Http\Controllers;

use App\Estudiante;

class EstudianteController extends Controller
{
    public function index()
    {
        return response()->json(Estudiante::with('usuario')->paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Estudiante::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Estudiante::find($id), 200);
    }

    public function update($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->update(\request()->all());
        return response()->json($estudiante, 200);
    }

    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return response()->json($estudiante, 200);
    }
}
