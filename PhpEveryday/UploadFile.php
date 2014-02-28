<!DOCTYPE HTML>
<html>
<head>
<title>Upload File</title>
</head>
    <body>
    	<form action="UploadFile.php" method="post" enctype="multipart/form-data">
	    	<input type="file" name="upfile" size="30">
			<input type="submit" name="submit" value="Submit">
		</form>
    </body>
</html>

<?php
	$submit = $_REQUEST['submit'];
	print_r($_SERVER);
	
	if($submit){
		$uploaddir = $_SERVER['DOCUMENT_ROOT']."/phpsecuriy/bab1/";
		$uploadfile = $uploaddir.$_FILES['upfile']['name'];
		
		if(move_uploaded_file($_FILES['upfile']['tmp_name'], $uploadfile)){
			echo "Upload success";
		}else{
			print_r($_FILES);
		}
	}
?>