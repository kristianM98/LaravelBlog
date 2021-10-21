<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrfail($id);

        return view('post.index')
            ->with('title', $user->email)
            ->with('posts', $user->posts);
    }
}
