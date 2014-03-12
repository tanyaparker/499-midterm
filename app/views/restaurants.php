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
		echo "<p><b>Restaurant Name (City)</b> <br />";
		echo "Type of Cuisine <br />";
		echo "Facebook Page: link to facebook page <br />";
		echo "link to reviews <br />";
		//$r->title;
		echo "<hr>";
	endforeach;

	}
	else {
		echo "<h1>Sorry. There are no restaurants to display.</h1>";
	}
?>

</body>
</html>