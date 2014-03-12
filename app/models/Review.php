<?php

class Review extends Eloquent {

	public static function search($id) 
	{
		$reviews = DB::table('reviews')
			->select('id', 'restaurant_id', 'review_description', 'rating', 'created_at')
			->where('restaurant_id', '=', $id)
			->get();
		return $reviews;
	}

}