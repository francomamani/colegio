<?php

namespace App\Http\Controllers;

use App\AsignacionVideo;

class AsignacionVideoController extends Controller
{
    public function index()
    {
        return response()->json(AsignacionVideo::paginate(10), 200);
    }

    public function store()
    {
        return response()->json(AsignacionVideo::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(AsignacionVideo::find($id), 200);
    }

    public function update($id)
    {
        $asignacion_video = AsignacionVideo::find($id);
        $asignacion_video->update(\request()->all());
        return response()->json($asignacion_video, 200);
    }

    public function destroy($id)
    {
        $asignacion_video = AsignacionVideo::find($id);
        $asignacion_video->delete();
        return response()->json($asignacion_video, 200);
    }
}
