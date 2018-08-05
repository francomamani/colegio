<?php

namespace App\Http\Controllers;

use App\Profesor;

class ProfesorController extends Controller
{
    public function index()
    {
        return response()->json(Profesor::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Profesor::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Profesor::find($id), 200);
    }

    public function update($id)
    {
        $profesor = Profesor::find($id);
        $profesor->update(\request()->all());
        return response()->json($profesor, 200);
    }

    public function destroy($id)
    {
        $profesor = Profesor::find($id);
        $profesor->delete();
        return response()->json($profesor, 200);
    }
}
