<?php

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DestroyController extends Controller
{
    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Post $post)
    {

        $post->delete();

        // return new PostResource($post);
        return response(null, 204);
    }
}
