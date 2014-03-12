<?php

class RestaurantController extends BaseController {

	public function search()
	{
		$restaurants = Restaurant::search();

		return View::make('restaurants', [
			'restaurants'  => $restaurants
		]);
	}
}