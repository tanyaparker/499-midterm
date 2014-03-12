<?php

class RestaurantController extends BaseController {

	public function search()
	{
		$restaurants = Restaurant::getReviews();

		return View::make('restaurants', [
			'restaurants'  => $restaurants
		]);
	}

}