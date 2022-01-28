<?php

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
class IndexController extends Controller
{
    /**
     * コースの情報とそれに付随する情報も渡す
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(){
        return new PostResource(Post::all()->sortByDesc('created_at')
        ->load(['user']));
    }
}
