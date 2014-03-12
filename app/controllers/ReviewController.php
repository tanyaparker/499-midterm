<?php

use \Yelp\Facebook\FacebookPage;

class ReviewController extends BaseController {

	public function search($id)
	{
		$reviews = Review::search($id);
		$restaurant = Restaurant::getRestaurant($id);

		$facebook = new FacebookPage();
		$fbpage = $facebook->getResults($restaurant[0]->facebook_page);

		return View::make('reviews', [
			'reviews'  => $reviews,
			'restaurant' => $restaurant,
			'fbpage' => $fbpage
		]);
	}
}