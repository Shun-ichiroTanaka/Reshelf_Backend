<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Post as PostResource;

class User extends JsonResource {
	/**
	 * リソースを配列へ変換
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		// return parent::toArray($request);
		return [
			'id' => $this->id,
			'name' => $this->name,
            'nickname' => $this->nickname,
			'email' => $this->email,
			'description' => $this->description,
			'icon_img' => $this->icon_img,
			'cover_img' => $this->cover_img,

			'twitter_url' => $this->twitter_url,
			'youtube_url' => $this->youtube_url,
			'facebook_url' => $this->facebook_url,
			'linked_in_url' => $this->linked_in_url,

            'posts' => PostResource::collection($this->posts),
            'likes' => $this->likes,

			'created_at' => $this->created_at,
			'updated_at' => $this->updated_at,
		];
	}
}
