<!DOCTYPE HTML> 
<html>
	<head>
		<title>GET example</title>
	</head>
	<body>
		<form action="ExampleGet.php" method="get">
			<input type="text" name="name" size="30"><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>
<?php

	$name = $_REQUEST['submit'];
	if($name){
		echo $_REQUEST['name'];
	}

?>