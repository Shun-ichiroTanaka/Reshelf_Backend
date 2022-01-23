<?php
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', Api\User\IndexController::class);
    Route::post('/logout', Api\Auth\LogoutController::class);

    // cart
    Route::prefix('cart')->group(function(){
        Route::get('/', Api\Cart\IndexController::class);
        Route::post('add', Api\Cart\AddController::class);
        Route::post('delete/{item}', Api\Cart\DeleteController::class);
        Route::get('checkout', Api\Cart\CheckoutController::class);
        Route::get('success', Api\Cart\SuccessController::class);
        Route::get('cancel', Api\Cart\CancelController::class);
    });
});

// user
Route::group(['prefix' => 'users'],function () {
    Route::get('/{name}', Api\User\ShowController::class);
    Route::patch('/{name}', Api\User\UpdateController::class);
    Route::get('/{name}/likes', Api\User\LikesController::class);
    Route::get('/{name}/followings', Api\User\FollowingsController::class);
    Route::get('/{name}/followers', Api\User\FollowersController::class);

    Route::middleware('auth:sanctum')->group(function () {
        Route::put('/{name}/follow', Api\User\FollowsController::class);
        Route::delete('/{name}/follow', Api\User\UnfollowsController::class);
    });
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
// Route::post('sociallogin/{provider}', 'API/Auth/Social/SocialSignupController@index');
// Route::get('auth/{provider}/callback', 'API/Auth/Social/FacebookLoginController@index')->where('provider', '.*');

Route::post('/auth/register', Api\Auth\RegisterController::class);
Route::post('/auth/login', Api\Auth\LoginController::class);
