<?php

namespace App\Http\Controllers\Api\Cart;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Cart as CartResource;

class IndexController extends Controller
{
    public function __invoke()
    {
        // dd('テスト');
        $user = User::findOrFail(Auth::id());
        $posts = $user->posts;
        $cart_counts = 0;
        $totalPrice = 0;

        foreach($posts as $post){
            $cart_counts += $post->carts->count();
            $totalPrice += $post->price;
        }
        // // dd($posts, $cart_counts);

        // // return view('user.cart',
        // //     compact('posts', 'cart_counts'));
        return new CartResource($user,$posts, $cart_counts, $totalPrice);
    }
}
