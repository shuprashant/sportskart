<!DOCTYPE html>
<html>
<head>
	<title>sportskart.tk</title>
</head>
<style type="text/css">
	p{font-size:45px;}
</style>
<body>
	<?php
	$json= '{
			"title": "Sportskart",
			"site": "A Registration Website."
		}' ;
		$data= json_decode($json);
		echo "<p>";
		echo $data->title;
		echo "<br>";
		echo "<br>";
		echo $data->site;
		echo "<p>";
	?>
</body>
</html>