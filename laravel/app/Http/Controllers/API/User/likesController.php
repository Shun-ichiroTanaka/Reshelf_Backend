<?php

namespace App\Http\Controllers\Api\User;

use App\User;

class UserController extends Controller
{
    public function __invoke(string $name)
    {
        $user = User::where('name', $name)->first()
            ->load(['likes.user', 'likes.likes', 'likes.tags']);

        $posts = $user->likes->sortByDesc('created_at');

        return response()->json([
            'user' => $user,
            'posts' => $posts,
        ]);
    }
}
