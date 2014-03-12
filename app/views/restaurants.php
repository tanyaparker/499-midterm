<?php require_once 'box.css'; ?>

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
		echo "Facebook Page: <a href='#'>$r->facebook_page</a> <br />";
		echo "<a href='#'>link to reviews</a> <br />";
		echo "<hr>";
	endforeach;

	}
	else {
		echo "<h1>Sorry. There are no restaurants to display.</h1>";
	}
?>

</body>
</html>