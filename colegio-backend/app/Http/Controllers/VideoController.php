<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return response()->json(Video::with('usuario')->paginate(10), 200);
    }

    public function store()
    {
        return response()->json(Video::create(request()->all()), 200);
    }

    public function show($id)
    {
        return response()->json(Video::find($id), 200);
    }

    public function update($id)
    {
        $video = Video::find($id);
        $video->update(\request()->all());
        return response()->json($video, 200);
    }

    public function destroy($id)
    {
        $video = Video::find($id);
        $video->delete();
        return response()->json($video, 200);
    }
}
