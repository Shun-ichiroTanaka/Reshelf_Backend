<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', Api\Auth\LogoutController::class);
});

// post
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', Api\Post\IndexController::class);
    Route::post('/', Api\Post\StoreController::class);
    Route::get('/{post}', Api\Post\ShowController::class);
    Route::patch('/{post}', Api\Post\UpdateController::class);
    Route::delete('/{post}', Api\Post\DestroyController::class);
});

// Social Auth
// Route::post('sociallogin/{provider}', 'Api/Auth/Social/SocialSignupController@index');
// Route::get('auth/{provider}/callback', 'Api/Auth/Social/FacebookLoginController@index')->where('provider', '.*');

// ユーザー登録
Route::post('/auth/register', Api\Auth\RegisterController::class);
// ログイン
Route::post('/auth/login', Api\Auth\LoginController::class);
