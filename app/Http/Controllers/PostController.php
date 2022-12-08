<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|max:255',
            'tag' => 'required|max:255'  
        ]);

        $post = Post::create([
            'name' => $attributes['name']
        ]);

        $post->tags()->create([
            'name' => $attributes['tag']
        ]);

        return redirect()->route('welcome', $post);
    }

}
