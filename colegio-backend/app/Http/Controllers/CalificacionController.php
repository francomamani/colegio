<?php

namespace App\Http\Controllers;

use App\Calificacion;

class CalificacionController extends Controller
{
    public function index()
    {
        return response()->json(Calificacion::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Calificacion::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Calificacion::find($id), 200);
    }

    public function update($id)
    {
        $calificacion = Calificacion::find($id);
        $calificacion->update(\request()->all());
        return response()->json($calificacion, 200);
    }

    public function destroy($id)
    {
        $calificacion = Calificacion::find($id);
        $calificacion->delete();
        return response()->json($calificacion, 200);
    }

}
