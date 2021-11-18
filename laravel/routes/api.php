<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [LoginController::class, 'logout']);
});

// post
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PostController::class, 'index']);
    Route::post('/', [PostController::class, 'store']);
    Route::get('/{post}', [PostController::class, 'show']);
    Route::patch('/{post}', [PostController::class, 'update']);
    Route::delete('/{post}', [PostController::class, 'destroy']);
});

// Social Auth
Route::post('sociallogin/{provider}', 'Api/Auth/Social/SocialSignupController@index');
Route::get('auth/{provider}/callback', 'Api/Auth/Social/FacebookLoginController@index')->where('provider', '.*');

// ユーザー登録
Route::post('/auth/register', [RegisterController::class, 'register']);
// ログイン
Route::post('/auth/login', [LoginController::class, 'login']);
