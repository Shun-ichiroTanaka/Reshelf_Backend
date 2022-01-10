<?php

namespace App\Http\Controllers\Api\User;

use App\User;

class UserController extends Controller
{
    public function __invoke(string $name)
    {
        $user = User::where('name', $name)->first()
            ->load(['posts.user', 'posts.likes', 'posts.tags']);

        $posts = $user->posts->sortByDesc('created_at');

        return response()->json([
            'user' => $user,
            'posts' => $posts
        ]);
    }
}
