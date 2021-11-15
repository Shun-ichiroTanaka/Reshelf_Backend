<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class FacebookController extends Controller
{
    public function index()
    {
        try {
            $fb_data = [];
            $fb_data['user'] = Socialite::driver('facebook')->user();
            $fb_data['isUser'] = User::where('fb_id', $fb_data['user']->id)->first();
            $fb_data['avatar'] = $fb_data['user']->getAvatar();
            var_dump($fb_data['avatar']);

            // 既にアカウントがあったらログインしてリダイレクト
            if ($fb_data['isUser']) {
                Auth::login($fb_data['isUser']);
                dd($fb_data);
            // アカウントがまだない場合、新規作成してリダイレクト
            } else {
                $createUser = User::create([
                    'name' => $fb_data['user']->name,
                    'email' => $fb_data['user']->email,
                    'fb_id' => $fb_data['user']->id,
                    'avatar' => $fb_data['avatar'],
                    'password' => encrypt('admin123'),
                ]);

                Auth::login($createUser);
                dd($createUser);
            }

        // エラー
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }
}
