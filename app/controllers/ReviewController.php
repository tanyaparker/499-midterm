<?php
use \Yelp\Facebook\FacebookPage;

class ReviewController extends BaseController {

	public function search($id)
	{
		$reviews = Review::search($id);
		$restaurant = Restaurant::getRestaurant($id);

		// $fbpage = new \Yelp\Facebook\FacebookPage(PAGE ID HERE);
		// $fbpage = $fbpage->get();

		// $facebook = new FacebookPage();
		// $result = $facebook->getResults($search);

		return View::make('reviews', [
			'reviews'  => $reviews,
			'restaurant' => $restaurant
		]);
	}
}