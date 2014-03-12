<?php

class Restaurant extends Eloquent {

	public static function search($title, $genre_id, $rating_id)
	{
		$query= Dvd::where('title', 'LIKE', "%$title%")
			->take(30)
			->join('genres', function($join) {
				$join->on('dvds.genre_id', '=', 'genres.id');
				})
			->join('ratings', function($join) {
				$join->on('dvds.rating_id', '=', 'ratings.id');
				})
			->join('labels', function($join) {
				$join->on('dvds.label_id', '=', 'labels.id');
				})
			->join('sounds', function($join) {
				$join->on('dvds.sound_id', '=', 'sounds.id');
				})
			->join('formats', function($join) {
				$join->on('dvds.format_id', '=', 'formats.id');
				});

		if($genre_id != "All") {
			$query->where('genre_id', '=', $genre_id);
		}	

		if($rating_id != 'All') {
			$query->where('rating_id', '=', $rating_id);
		}	

		$dvds = $query->get();
		return $dvds;	
	}

	public static function getReviews() {
		$query = DB::table('reviews')
			->select('id', 'restaurant_id', 'review_description', 'rating', 'created_at');
		$genres = $query->get();
		return $reviews;
	}
}