<?php
require_once 'connect.php';
if (isset($_POST['upd'])){ 
			$course = $_POST['Course'];
			$email = $_POST['inputEmail'];
			$password = $_POST['inputPassword'];
			$FN = $_POST['FirstName'];
			$SN = $_POST['SecondName']; 
			
		$qsql = $_COOKIE['userID'];
        $qresult = mysqli_query($connection, $qsql);
        $qcount = mysqli_connect($qresult);
		$sqli = "UPDATE tblaccounts SET Email = '".$email."', Password = '".$password."', FirstName = '".$FN."', SecondName = '".$SN."', Course = '".$course."' WHERE Student_ID='".$qsql."'";
	
		$result = mysqli_query($connection, $sqli) or die("Database Connection Failed" . mysqli_error($connection));
		//$count = mysqli_num_rows($result);
		echo "Profile Update Successful!:";
		header('Location: profile.php');
} else { 
			echo "Profile Update Failed!:";
			?><br/><a href ="updatesettigns.php">Go back to the profile update screen.</a><?php
		}
?>