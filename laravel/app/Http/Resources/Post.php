<?php

namespace App\Http\Resources;

use App\Http\Resources\User as UserResource;
use Illuminate\Http\Resources\Json\JsonResource;

class Post extends JsonResource {
	public function toArray($request) {
		return parent::toArray($request);
		// return [
		// 	'id' => $this->id,
        //     'title' => $this->title,
        //     'price' => $this->price,
        //     'body' => $this->body,
		// 	'describe' => $this->describe,
        //     'thumbnail' => $this->thumbnail,

        //     'is_open' => $this->is_open,
        //     'is_free' => $this->is_free,

		// 	'created_at' => $this->created_at->diffForHumans(),
		// 	'updated_at' => $this->updated_at->diffForHumans(),

        //     'like_count' => $this->likes->count(),
		// 	'user' => $this->user,
		// 	// 'users' => new UserResource($this->user),
		// ];
	}
}
