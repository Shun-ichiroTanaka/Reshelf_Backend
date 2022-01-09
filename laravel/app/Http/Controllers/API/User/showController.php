<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function __invoke(string $name)
    {
        $user = User::where('name', $name)->first()
            ->load(['posts.user', 'posts.likes', 'posts.tags']);

        $posts = $user->posts->sortByDesc('created_at');

        return view('users.show', [
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
