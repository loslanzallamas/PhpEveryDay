<!DOCTYPE HTML> 
<html>
	<head>
		<title>POST example</title>
	</head>
	<body>
		<form action="ExamplePost.php" method="post">
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