<?php
$connection = mysqli_connect('localhost', 'root', '', 'dbrateme');  
if (!$connection){ 
    die("Database Connection Failed" . mysql_error());
			header('Location: dcf.php');
}
$select_db = mysqli_select_db($connection, 'dbrateme'); 
if (!$select_db){ 
    die("Database Selection Failed" . mysqli_error());  
}
?>