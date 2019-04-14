<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>login_connect</title>
</head>
<body>
        <ul class="nav navbar-nav navbar-right">
		<!--login bit-->
		<!--add if statement, e.g. if condition is logged in then show logged in menu. If not, show buttons-->
		<?php
		require_once 'connect.php';
		require_once 'logincheck.php';
		
			if (($_COOKIE['userID']) == "Set_value"){
				  //true
				  //show sign in
				  ?>
					<li><p><center><a class="btn btn-primary btn-lg" href="login.php" role="button">Sign In</a><center></p></li>
				  <?php
				  //show register button
				  ?>
					<li><p><center><a class="btn btn-primary btn-lg" href="register.php" role="button">Register</a><center></p></li>
				  <?php
			} else {
			//false
			//show 'logged in as'
				  ?>
			<li><a href="#">Logged in as: <?php echo ($_COOKIE['user']) ?></a></li>
			<li class="active"><a href="rate.php">Rate People</a></li>
			<?php//show 'my profile'?>
			<li><a href="profile.php">My Profile</a></li>
			<?php//show 'settings'.?>
			<li><a href="settings.php">Settings</a></li>
			<li><p><center><a class="btn btn-primary btn-lg" href="logout.php" role="button">Sign Out</a><center></p></li>
				<!--<br/><a href ="login.php">Go back to the login screen.</a>-->

							<!--logged in menu-->
				<!--<li><a href="#">User ID: <php echo ($_COOKIE['userID']) ?></a></li>-->
		</ul>
		<?php
			} 
		?>
</body>
</html>