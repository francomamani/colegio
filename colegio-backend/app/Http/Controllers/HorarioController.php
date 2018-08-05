<?php

namespace App\Http\Controllers;

use App\Horario;

class HorarioController extends Controller
{
    public function index()
    {
        return response()->json(Horario::orderBy('dia')->get(), 200);
    }

    public function store()
    {
        return response()->json(Horario::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Horario::find($id), 200);
    }

    public function update($id)
    {
        $horario = Horario::find($id);
        $horario->update(\request()->all());
        return response()->json($horario, 200);
    }

    public function destroy($id)
    {
        $horario = Horario::find($id);
        $horario->delete();
        return response()->json($horario, 200);
    }

}
