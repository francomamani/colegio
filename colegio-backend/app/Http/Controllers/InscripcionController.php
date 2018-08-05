<?php

namespace App\Http\Controllers;

use App\Inscripcion;

class InscripcionController extends Controller
{
    public function index()
    {
        return response()->json(Inscripcion::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Inscripcion::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Inscripcion::find($id), 200);
    }

    public function update($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->update(\request()->all());
        return response()->json($inscripcion, 200);
    }

    public function destroy($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->delete();
        return response()->json($inscripcion, 200);
    }

}
