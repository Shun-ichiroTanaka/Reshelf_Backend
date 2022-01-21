<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Cart extends JsonResource {
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request) {
		return parent::toArray($request);
		// return [
        //     'user' => $this->user,
        //     'posts' => $this->posts,
        //     'cart_counts' => $this->cart_counts,
        //     'totalPrice' => $this->totalPrice,
		// ];
	}
}
