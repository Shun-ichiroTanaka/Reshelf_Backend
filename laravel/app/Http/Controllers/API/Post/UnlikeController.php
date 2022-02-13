<?php

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
class UnlikeController extends Controller
{
    /**
     * いいね解除機能
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Post $post)
    {
        $post->likes()->detach($request->user()->id);

        return response()->json([
            'id' => $post->id,
            'countLikes' => $post->count_likes,
        ]);
    }
}
