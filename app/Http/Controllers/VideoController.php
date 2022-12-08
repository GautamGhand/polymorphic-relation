<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function create()
    {
        return view('videos.create');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'tag' => 'required|max:255'
        ]);

        $video=Video::create($attributes);

        $video->tags()->create([
            'name' => $attributes['tag']
        ]);

        return redirect()->route('welcome.video', $video);
    }
}
