<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login_connect</title>
</head>
<body>
	<?php
	   include('menu.php');
	?>
	<?php
			if (isset($_COOKIE['user'])) {
				require_once 'connect.php';
				$cookie_name = "user";
				$cookie_value = "Set_value";
				setcookie($cookie_name, $cookie_value);

				$cookie_name2 = "userID";
				$cookie_value2 = "Set_value";
				setcookie($cookie_name2, $cookie_value2);
				
				header("Location: index.php"); /* Redirect browser */
				exit();
			}else{
				echo "Logout was unsuccessful!";

			}
			
			/*
			if (isset($_COOKIE['userID'])) {
				require_once 'connect.php';
				$cookie_name = "user";
				$cookie_value = "";
				setcookie($cookie_name, $cookie_value);

				$cookie_name2 = "userID";
				$cookie_value2 = "";
				setcookie($cookie_name2, $cookie_value2);
				echo "You have successfully logged out!";
			}else{
				echo "Logout was unsuccessful!";

			}
			*/
	?>
	<?php
	   include('footer.php');
	?>
</body>
</html>