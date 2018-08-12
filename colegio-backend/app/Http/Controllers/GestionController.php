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
        $gestion = request()->input('gestion');
        $bimestre = request()->input('bimestre');
        $existe = Gestion::where('gestion', $gestion)
                           ->where('bimestre', $bimestre)
                           ->exists();
        if (!$existe) {
            $response = Gestion::create(request()->all());
            return response()->json($response, 200);
        } else {
            return response()->json(['error' => 'El bimestre ya existe'], 500);
        }
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
        return response()->json(['message' => 'La gestion '. $gestion->gestion .' fue eliminada exitosamente'], 200);
    }
}
