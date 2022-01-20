<?php

namespace App\Http\Controllers\Api\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class AddController extends Controller
{
    public function __invoke(Request $request)
    {
        $itemInCart = Cart::where('post_id', $request->post_id)
        ->where('user_id', Auth::id())->first();

        if($itemInCart){
            $itemInCart->save();
        } else {
            Cart::create([
                'user_id' => Auth::id(),
                'post_id' => $request->post_id,
            ]);
        }
        // dd($request);
    }
}
