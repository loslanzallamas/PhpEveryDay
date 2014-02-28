<!DOCTYPE html>
<html>
	<head>
		<title>Check SQL</title>
	</head>
	<body>
		<form method="post">
			Username <input type="text" name="uname" value="" />
			<br>
			Password <input type="text" name="password" />
			<br>
			<input type="submit" value="Submit" name="submit" /> 
		</form>
	</body>
</html>

<?php
	$uname = $_REQUEST['uname'];	
	$password = $_REQUEST['password'];
	
	if( $uname or $password){

		$conn = mysql_connect("localhost","alien","alienduce")
			or die(mysql_error());
		$db = mysql_select_db("database1");
		$sql = "INSERT INTO user (uname, password) values('".$uname."','".md5($password)."')";
		echo $sql;
		
		$q = mysql_query($sql) or die(mysql_error());
		mysql_close();

	}
?>