<?php

namespace App\Http\Controllers\Api\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\User as UserResource;

class ShowController extends Controller
{
    public function __invoke(string $name)
    {
        $user = User::where('name', $name)->first()
        ->load([
            'posts.user',
            // 'posts.likes',
            // 'posts.tags'
        ]);


        $posts = $user->posts->sortByDesc('created_at');

        return new UserResource($user,$posts);
    }
}
