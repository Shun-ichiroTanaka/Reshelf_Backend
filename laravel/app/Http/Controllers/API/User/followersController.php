<?php

namespace App\Http\Controllers\Api\User;

use App\User;

class FollowersController extends Controller
{
    public function __invoke(string $name)
    {
        $user = User::where('name', $name)->first()
            ->load('followers.followers');

        $followers = $user->followers->sortByDesc('created_at');

        return response()->json([
            'user' => $user,
            'followers' => $followers,
        ]);
    }
}
