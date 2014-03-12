<?php

class ReviewController extends BaseController {

	public function search($id)
	{
		$reviews = Review::search($id);
		$restaurant = Restaurant::getRestaurant($id);

		$fbpage = new \Yelp\Facebook\FacebookPage($restaurant[0]->facebook_page);
		$fbpage = $fbpage->get();

		return View::make('reviews', [
			'reviews'  => $reviews,
			'restaurant' => $restaurant,
			'fbpage' => $fbpage
		]);
	}
}