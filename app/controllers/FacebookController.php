<?php

use \Yelp\Facebook\FacebookPage;

class FacebookController extends BaseController {

	public function search()
	{
		return View::make('facebook/search');
	}

	public function results()
	{
		$search = Input::get('search');

		$facebook = new FacebookPage();
		$result = $facebook->getResults($search);

		if($result) {
			$name = $result->name;
			$likes = $result->likes;
			$website = $result->website;
			$pic = $result->cover->source;

			return View::make('facebook/results', [
				'name'    => $name,
				'likes'   => $likes,
				'website' => $website,
				'pic'     => $pic
			]);
		}
		else {
			return Redirect::to('facebook/search')	
				->withInput()
				->with('errors', 'Sorry, ' . $search . ' does not exist.');
		}
	}

}

?>