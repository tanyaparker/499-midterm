<?php require_once 'box.css'; ?>

<!doctype html>
<html>
<head>
	<title>YEelp</title>
</head>

<body>
	<h1>Yelp</h1>

<?php 
	if(sizeof($restaurants) >= 1) {

	foreach($restaurants as $r) :
		echo "Restaurant Name (City)";
		echo "Type of Cuisine";
		echo "Facebook Page: link to facebook page";
		echo "link to reviews";
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