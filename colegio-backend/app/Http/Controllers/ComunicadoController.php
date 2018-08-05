<?php

namespace App\Http\Controllers;

use App\Comunicado;
use Illuminate\Http\Request;

class ComunicadoController extends Controller
{
    public function index()
    {
        return response()->json(Comunicado::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Comunicado::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Comunicado::find($id), 200);
    }

    public function update($id)
    {
        $comunicado = Comunicado::find($id);
        $comunicado->update(\request()->all());
        return response()->json($comunicado, 200);
    }

    public function destroy($id)
    {
        $comunicado = Comunicado::find($id);
        $comunicado->delete();
        return response()->json($comunicado, 200);
    }

}
