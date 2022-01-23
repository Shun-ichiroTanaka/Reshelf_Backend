<?php

namespace App\Http\Controllers\Api\Cart;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
class DeleteController extends Controller
{
    public function __invoke($id)
    {
        Cart::where('post_id', $id)
        ->where('user_id', Auth::id())
        ->delete();
    }
}
