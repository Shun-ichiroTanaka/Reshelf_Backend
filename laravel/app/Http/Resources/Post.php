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
		// 	// 'describe' => $this->describe,
        //     'body' => $this->body,
        //     // 'thumbnail' => $this->thumbnail,
        //     // 'isOpen' => $this->isOpen,
		// 	'created_at' => $this->created_at->diffForHumans(),
		// 	'updated_at' => $this->updated_at->diffForHumans(),
		// 	'user' => $this->user,
		// 	// 'like_count' => $this->likes->count(),
		// 	'users' => new UserResource($this->user),
		// ];
	}
}
