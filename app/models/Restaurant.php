<?php

class Restaurant extends Eloquent {

	public static function search()
	{
		$restaurants = DB::table('restaurants')->get();
		return $restaurants;	
	}

	public static function getRestaurant($id)
	{
		$restaurant = DB::table('restaurants')
			->where('id', '=', $id)
			->get();
		return $restaurant;
	}
}