<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\User;

class FollowingsController extends Controller
{
    public function __invoke(string $name)
    {
        $user = User::where('name', $name)->first()
            ->load('followings.followers');

        $followings = $user->followings->sortByDesc('created_at');

        return response()->json([
            'user' => $user,
            'followings' => $followings,
        ]);
    }
}
