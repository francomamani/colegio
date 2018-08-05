<?php

namespace App\Http\Controllers;

use App\Asignatura;

class AsignaturaController extends Controller
{
    public function index()
    {
        return response()->json(Asignatura::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Asignatura::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Asignatura::find($id), 200);
    }

    public function update($id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->update(\request()->all());
        return response()->json($asignatura, 200);
    }

    public function destroy($id)
    {
        $asignatura = Asignatura::find($id);
        $asignatura->delete();
        return response()->json($asignatura, 200);
    }
}
