<!doctype html>
<html>
<head>
	<title>Yelp</title>
</head>

<body>
	<h1><?php echo $restaurant[0]->restaurant_name; ?></h1>

<?php if($fbpage != null) {?>
	<p><h2><b>Facebook Activity</b></h2>
	<ul>
		<li>Likes: <?php echo "$fbpage->likes"; ?></li>
		<li>Checkins: <?php echo "$fbpage->checkins"; ?></li>
	</ul>
	<hr>
<?php }?>

	<p><h2><b>Reviews</b></h2>
<?php
	if(sizeof($reviews) >= 1) {

	foreach($reviews as $r) :
		if($r->rating == 0)
			echo "<img width='100' height='50' src='http://clipart-finder.com/data/png/Anonymous_zero_star_rating.png'> <br />";
		if($r->rating == 1)
			echo "<img width='100' height='50' src='http://4.bp.blogspot.com/-GmoX3Cm1lwU/Urgmc5u6YkI/AAAAAAAAFtg/cEGTwNVumUI/s1600/one+star.png'> <br />";
		if($r->rating == 2)
			echo "<img width='100' height='50' src='http://shannonathompson.files.wordpress.com/2014/03/two-star-rating.png'> <br />";
		if($r->rating == 3)
			echo "<img width='100' height='50' src='http://theathletestable.files.wordpress.com/2011/10/three-stars_0.png'> <br />";
		if($r->rating == 4)
			echo "<img width='100' height='30' src='http://community.mis.temple.edu/drinkabeer/files/2014/02/45.png'> <br />";
		if($r->rating == 5)
			echo "<img width='100' height='50' src='http://iceball.org/wp-content/uploads/2013/12/5stars.png'> <br />";
		echo "$r->review_description <br />";
		echo "<hr><p>";
	endforeach;

	}
	else {
		echo "<h2>Sorry. This restaurant has no reviews yet.</h2>";
	}
?>

</body>
</html>