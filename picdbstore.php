<?php
	include('connect.php');
	$slash = '/';
	$sql1 = $_COOKIE['userID'];
	$filename = $slash."uploads".$slash."uploads".$sql1.basename($_FILES['fileToUpload']['name']);
	$sql = $_COOKIE['userID'];
    $result = mysqli_query($connection, $sql);
    $count = mysqli_connect($result);
	
			$sql = "UPDATE tblaccounts SET PicName = '".$filename."' WHERE Student_ID = '$sql'"; 
			$result = mysqli_query($connection, $sql) or die("Database Connection Failed" . mysqli_error($connection));
?>