<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function show($id)
    {
        $utag = Tag::findOrfail($id);

        return view('post.index')
            ->with('title', $tag->tag)
            ->with('posts', $tag->posts);
    }
}
