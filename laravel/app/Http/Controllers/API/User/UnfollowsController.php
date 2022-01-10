<?php

namespace App\Http\Controllers\Api\User;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke(Request $request, string $name)
    {
        $user = User::where('name', $name)->first();

        if ($user->id === $request->user()->id)
        {
            return abort('404', 'Cannot follow yourself.');
        }

        $request->user()->followings()->detach($user);

        return response()->json([
            'name' => $name
        ]);
    }
}
