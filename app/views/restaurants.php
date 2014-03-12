<!doctype html>
<html>
<head>
	<title>Yelp</title>
</head>

<body>
	<h1>Yelp</h1>

<?php 
	if(sizeof($restaurants) >= 1) {

	foreach($restaurants as $r) :
		echo "<p><b>$r->restaurant_name ($r->city)</b> <br />";
		echo "$r->type <br />";
		if($r->facebook_page == null) 
			echo "Not on Facebook <br />";
		else
			echo "Facebook Page: <a href='http://www.facebook.com/$r->facebook_page'>here</a> <br />";
		echo "<a href='/restaurants/$r->id/reviews'>View Reviews</a> <br />";
		echo "<hr>";
	endforeach;

	}
	else {
		echo "<h1>Sorry. There are no restaurants to display.</h1>";
	}
?>

</body>
</html>