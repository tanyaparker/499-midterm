<?php

class Restaurant extends Eloquent {

	public static function search()
	{
		$restaurants = DB::table('restaurants')->get();
		return $restaurants;	
	}
}