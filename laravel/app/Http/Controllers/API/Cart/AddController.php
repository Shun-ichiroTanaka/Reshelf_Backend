<?php

namespace App\Http\Controllers\Api\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    // カートの追加
    public function __invoke(Request $request)
    {
        // カートに商品があるか確認
        $itemInCart = Cart::where('post_id', $request->post_id)
        ->where('user_id', Auth::id())->first();

        // 商品があれば
        if($itemInCart){
            $itemInCart->quantity += $request->quantity;
            $itemInCart->save();

        } else {
            Cart::create([
                'user_id' => Auth::id(), // ログインユーザー
                'post_id' => $request->post_id,
            ]);
        }
    }
}
