<!doctype html>
<html>
<head>
	<title>Yelp</title>
</head>

<body>
	<h1><?php echo $restaurant[0]->restaurant_name; ?></h1>

	<p><h2><b>Facebook Activity</b></h2>
	<ul>
		<li>Likes: <?php //Likes ?></li>
		<li>Checkins: <?php //Checkins ?></li>
	</ul>
	<hr>

	<p><h2><b>Reviews</b></h2>
<?php
	if(sizeof($reviews) >= 1) {

	foreach($reviews as $r) :
		$img_url = $r->rating . "_star.png";
		echo "<img src='$img_url'> <br />";
		echo "$r->review_description <br />";
		echo "<hr><p>";
	endforeach;

	}
	else {
		echo "<h1>Sorry. This restaurant has no reviews yet.</h1>";
	}
?>

</body>
</html>