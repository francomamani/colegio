<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return response()->json(Curso::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Curso::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Curso::find($id), 200);
    }

    public function update($id)
    {
        $curso = Curso::find($id);
        $curso->update(\request()->all());
        return response()->json($curso, 200);
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();
        return response()->json($curso, 200);
    }
}
