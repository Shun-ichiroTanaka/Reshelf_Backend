<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use App\Http\Controllers\Controller;

class ShowController extends Controller
{
    public function __invoke(string $name)
    {

        $user = User::where('name', $name)->first()
        ->load([
            'post.user',
            'post.likes',
            // 'post.tags'
        ]);

        $post = $user->post->sortByDesc('created_at');

        return response()->json([
            'user' => $user,
            'post' => $post,
        ]);
    }
}
