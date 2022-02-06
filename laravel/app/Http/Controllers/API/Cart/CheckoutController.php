<?php

namespace App\Http\Controllers\Api\Cart;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Stock;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function __invoke()
    {

        $user = User::findOrFail(Auth::id());
        $posts = $user->posts;

        $lineItems = [];
        foreach($posts as $post){
            // $quantity = '';
            // $quantity = Stock::where('post_id', $post->id)->sum('quantity');

            // if($post->pivot->quantity > $quantity){
            //     return redirect()->route('user.cart.index');
            // } else {
                $lineItem = [
                    'name' => $post->name,
                    'description' => $post->description,
                    'amount' => $post->price,
                    'currency' => 'jpy',
                    // 'quantity' => $post->pivot->quantity,
                ];
                array_push($lineItems, $lineItem);
            // }
        }
        // dd($lineItems);
        // foreach($posts as $post){
        //     Stock::create([
        //         'post_id' => $post->id,
        //         'type' => \Constant::post_LIST['reduce'],
        //         'quantity' => $post->pivot->quantity * -1
        //     ]);
        // }

        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [$lineItems],
            'mode' => 'payment',
            'success_url' => route('user.cart.success'),
            'cancel_url' => route('user.cart.cancel'),
        ]);

        $publicKey = env('STRIPE_PUBLIC_KEY');

        // return view('user.checkout',
        //     compact('session', 'publicKey'));
    }
}
