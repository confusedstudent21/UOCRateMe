<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login_connect</title>
</head>
<body>
<?php
require_once 'connect.php';
if (isset($_POST['submit'])){ 
    $username = $_POST['USERNAME']; 
    $password = $_POST['PASSWORD']; 
$sql = "SELECT * FROM `tblaccounts` WHERE Email='$username' and Password='$password'"; 
$result = mysqli_query($connection, $sql) or die("Database Connection Failed" . mysqli_error());  
$count = mysqli_num_rows($result);
if ($count == 1){
		echo "You are logged in";
		header('Location: profile.php');
		//session_start();
		//$id = session_id();
		$cookie_name = "user";
		$cookie_value = $username;
		setcookie($cookie_name, $cookie_value);
		
		$result2 =  mysqli_query($connection, "SELECT Student_ID FROM `tblaccounts` WHERE Email='$username'");
		$row2 = mysqli_fetch_assoc($result2);
		$cookie_name2 = "userID";
		$cookie_value2 = $row2['Student_ID'];
		setcookie($cookie_name2, $cookie_value2);
	} else { 
		echo "Login Failed!:";#
		?><br/><a href ="login.php">Go back to the login screen.</a><?php
	}
}
?>
</body>
</html>