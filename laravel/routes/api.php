<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', API\Auth\LogoutController::class);
});

// user
Route::group(['prefix' => 'users'],function () {
    Route::get('/{name}', API\User\ShowController::class);
    Route::get('/{name}/likes', API\User\LikesController::class);
    Route::get('/{name}/followings', API\User\FollowingsController::class);
    Route::get('/{name}/followers', API\User\FollowersController::class);

    Route::middleware('auth:sanctum')->group(function () {
        Route::put('/{name}/follow', API\User\FollowsController::class);
        Route::delete('/{name}/follow', API\User\UnfollowsController::class);
    });
});

// post
Route::group(['prefix' => 'posts'], function () {
    Route::get('/', API\Post\IndexController::class);
    Route::post('/', API\Post\StoreController::class);
    Route::get('/{post}', API\Post\ShowController::class);
    Route::patch('/{post}', API\Post\UpdateController::class);
    Route::delete('/{post}', API\Post\DestroyController::class);
});


// Social Auth
// Route::post('sociallogin/{provider}', 'API/Auth/Social/SocialSignupController@index');
// Route::get('auth/{provider}/callback', 'API/Auth/Social/FacebookLoginController@index')->where('provider', '.*');

Route::post('/auth/register', API\Auth\RegisterController::class);
Route::post('/auth/login', API\Auth\LoginController::class);
