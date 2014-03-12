<?php

class ReviewController extends BaseController {

	public function search($id)
	{
		$reviews = Review::search($id);
		$restaurant = Restaurant::getRestaurant($id);

		return View::make('reviews', [
			'reviews'  => $reviews,
			'restaurant' => $restaurant
		]);
	}
}