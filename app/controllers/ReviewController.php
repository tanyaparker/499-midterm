<?php

class ReviewController extends BaseController {

	public function search($id)
	{
		$reviews = Review::search($id);

		return View::make('reviews', [
			'reviews'  => $reviews
		]);
	}
}