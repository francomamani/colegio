<?php

namespace App\Http\Controllers;

use App\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    public function index()
    {
        return response()->json(Permiso::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Permiso::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Permiso::find($id), 200);
    }

    public function update($id)
    {
        $permiso = Permiso::find($id);
        $permiso->update(\request()->all());
        return response()->json($permiso, 200);
    }

    public function destroy($id)
    {
        $permiso = Permiso::find($id);
        $permiso->delete();
        return response()->json($permiso, 200);
    }
}
