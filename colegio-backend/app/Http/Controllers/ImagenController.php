<?php

namespace App\Http\Controllers;

use App\Imagen;
use Illuminate\Http\Request;

class ImagenController extends Controller
{
    public function index()
    {
        return response()->json(Imagen::paginate(10), 200);
    }

    public function store()
    {
        if (request()->hasFile('imagen')){
            $path_imagen = request()->file('imagen')->store('imagenes');
            $imagen = new Imagen();
            $imagen->url = $path_imagen;
            $imagen->descripcion = request()->input('descripcion');
            $imagen->save();
            return response()->json($imagen, 201);
        }
    }

    public function show($id)
    {
        return response()->json(Imagen::find($id), 200);
    }

    public function update($id)
    {
        $imagen = Imagen::find($id);
        $imagen->update(\request()->all());
        return response()->json($imagen, 200);
    }

    public function destroy($id)
    {
        $imagen = Imagen::find($id);
        $imagen->delete();
        return response()->json($imagen, 200);
    }

}
