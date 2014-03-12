<?php

class Restaurant extends Eloquent {

	public static function search()
	{
		$restaurants = DB::table('restaurants')->get();
		return $restaurants;	
	}

	public static function getReviews() {
		$query = DB::table('reviews')
			->select('id', 'restaurant_id', 'review_description', 'rating', 'created_at');
		$reviews = $query->get();
		return $reviews;
	}
}