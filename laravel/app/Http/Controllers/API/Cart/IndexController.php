<?php

namespace App\Http\Controllers\Api\Cart;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\Cart as CartResource;

class IndexController extends Controller
{
    // カート商品と合計金額を返す
    public function __invoke()
    {
        $user = User::findOrFail(Auth::id());
        $posts = $user->posts;
        $totalPrice = 0;

        foreach($posts as $post){
            $totalPrice += $post->price;
        }

        return new CartResource($posts, $totalPrice);
    }
}
