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
		
		if((ctype_alnum($uname)==false) or (ctype_alnum($password)==false)){
			die("Sorry, but uname or password are not numeric");
		};

		$conn = mysql_connect("localhost","alien","alienduce")
			or die(mysql_error());
		$db = mysql_select_db("database1");
		$sql = "SELECT COUNT(1) AS hay FROM user WHERE uname='".$uname."' and password=md5('".$password."')";
		
		echo $sql."<br>";
		
		$q = mysql_query($sql) or die(mysql_error());
		$r = mysql_fetch_array($q);
		$number = $r[hay];
		mysql_close();
		
		if($number > 0){
			echo "success enter ".$number;
		}else{
			echo "sorry, wrong pair (username and password)";
		};
		
	}
?>