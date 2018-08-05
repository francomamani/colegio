<?php

namespace App\Http\Controllers;

use App\TipoAsignatura;

class TipoAsignaturaController extends Controller
{
    public function index()
    {
        return response()->json(TipoAsignatura::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(TipoAsignatura::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(TipoAsignatura::find($id), 200);
    }

    public function update($id)
    {
        $tipo_asignatura = TipoAsignatura::find($id);
        $tipo_asignatura->update(\request()->all());
        return response()->json($tipo_asignatura, 200);
    }

    public function destroy($id)
    {
        $tipo_asignatura = TipoAsignatura::find($id);
        $tipo_asignatura->delete();
        return response()->json($tipo_asignatura, 200);
    }
}
