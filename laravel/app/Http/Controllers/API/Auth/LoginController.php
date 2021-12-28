<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // ログイン処理
        if (Auth::attempt($credentials)) {
            $user = User::whereEmail($request->email)->first();

            $user->tokens()->delete();

            // トークンの作成と取得
            $token = $user->createToken("login:user{$user->id}")->plainTextToken;

            return response()->json(['token' => $token], Response::HTTP_OK);
        }

        return response()->json('User Not Found.', Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}
