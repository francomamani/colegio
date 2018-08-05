<?php

namespace App\Http\Controllers;

use App\Gestion;

class GestionController extends Controller
{
    public function index()
    {
        return response()->json(Gestion::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Gestion::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Gestion::find($id), 200);
    }

    public function update($id)
    {
        $gestion = Gestion::find($id);
        $gestion->update(\request()->all());
        return response()->json($gestion, 200);
    }

    public function destroy($id)
    {
        $gestion = Gestion::find($id);
        $gestion->delete();
        return response()->json($gestion, 200);
    }
}
