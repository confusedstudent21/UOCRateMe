<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>regcheck</title>
</head>
<body>
<?php
require_once 'connect.php';
if (isset($_POST['reg'])){ 
			//$dob = $_POST['date'];
			$dob = date('Y-m-d', strtotime($_POST['date']));
			$Student_ID = $_POST['Student_ID'];
			$gender = $_POST['gender'];
			$course = $_POST['Course'];
			$email = $_POST['inputEmail'];
			$password = $_POST['inputPassword'];
			$cpassword = $_POST['CPassword'];
			$FN = $_POST['FirstName'];
			$SN = $_POST['SecondName'];
			
			$picdir = "/uploads/newprofilepic.gif";

			//$cookie_name = "pic";
			//$cookie_value = "../uploads/newprofilepic.gif";
			//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			//$sqlcookie = $_COOKIE['pic'];

			if ($password === $cpassword) {
			   // success!
   				$sql = "INSERT INTO tblaccounts (Email, Password, Student_ID, FirstName, SecondName, Course, Gender, DoB, PicName) VALUES ('".$email."',MD5('".$password."'),'".$Student_ID."','".$FN."','".$SN."','".$course."','".$gender."','".$dob."','".$picdir."')"; 
				$result = mysqli_query($connection, $sql) or die("Database Connection Failed" . mysqli_error($connection));
				//$count = mysqli_num_rows($result);
				
				
				echo "Registeration Successful!:";	
				
				header('Location: login.php');
				}
				else {
				   // failed :(
				}


} else { 
			echo "Registeration Failed!:";# 
			?><br/><a href ="login.php">Go back to the login screen.</a><?php
		}
?>
</body>
</html>