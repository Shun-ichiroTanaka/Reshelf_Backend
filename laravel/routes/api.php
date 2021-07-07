<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('auth/facebook', 'FacebookController@facebookRedirect');
// Route::get('auth/facebook/callback', 'FacebookController@loginWithFacebook');

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth',
], function ($router) {
    // facebook login
    // Route::get('/facebook', [FacebookController::class, 'facebookRedirect']);
    // Route::get('/facebook/callback', [FacebookController::class, 'loginWithFacebook']);
    // Route::get('/{service}', [SocialLoginController::class, 'redirect']);
    // Route::get('/{service}/callback', [SocialLoginController::class, 'callback']);

    // jwt
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});

Route::get('/user', [AuthController::class, 'user']);
