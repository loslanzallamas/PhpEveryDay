<!DOCTYPE HTML>
<html>
<head>
	<title>GET vs Cookie example</title>
</head>
<body>
	<form method="get" action="ExampleGetVsCookie.php">
		Input your name: <input type="text" name="name" size="30" /><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>

<?php
	$submit = $_REQUEST['submit'];
	$name = $_REQUEST['name'];
	
	if($submit){
		echo $name;
		echo "<br>";
		echo "Value from GET ";
		echo $_GET["name"];
		echo "<br>";
		echo "Value from cookie ";
		echo $_COOKIE["name"];
		echo "<br>";
	} else {
		setcookie("name","Micaela");
	}
?>