<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FacebookController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            $isUser = User::where('fb_id', $user->id)->first();
            $avatar = $user->getAvatar();
            var_dump($avatar);

            // 既にアカウントがあったらログインしてリダイレクト
            if ($isUser) {
                Auth::login($isUser);
                return redirect('/');

            // アカウントがまだない場合、新規作成してリダイレクト
            } else {
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'fb_id' => $user->id,
                    'avatar' => $avatar,
                    'password' => encrypt('admin123'),
                ]);

                Auth::login($createUser);
                return redirect('/');
            }

        // エラー
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
