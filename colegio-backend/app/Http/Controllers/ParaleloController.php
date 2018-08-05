<?php

namespace App\Http\Controllers;

use App\Paralelo;

class ParaleloController extends Controller
{
    public function index()
    {
        return response()->json(Paralelo::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Paralelo::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Paralelo::find($id), 200);
    }

    public function update($id)
    {
        $paralelo = Paralelo::find($id);
        $paralelo->update(\request()->all());
        return response()->json($paralelo, 200);
    }

    public function destroy($id)
    {
        $paralelo = Paralelo::find($id);
        $paralelo->delete();
        return response()->json($paralelo, 200);
    }
}
