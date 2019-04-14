<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>My Profile</title>
    <link href="css/profile.css" rel="stylesheet">
</head>
<body>
	<div id="background">
	<?php
	   include('menu.php');
	?>
	
	<?php
		include('profileloader.php');
	?>
	
	<br/><br/><br/><br/>
	
	<div id="profile">
	<table align="center">
	  <tr>
		<td><p><center><img src = "<?php echo $row2["PicName"]; ?>" alt="Profile Picture" width="250" height="250"><center></p></td>
	  </tr>
	  <tr>
		<th><p><center>Name: <br/><?php echo $row2["FirstName"]; ?> <?php echo $row2["SecondName"]; ?><center></p></th>
	  </tr>
	</table>
	</div>
	
	<br/><br/>

		<div class="text-center">
		  <b>Rating overall:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b>
				<?php
						include('connect.php');
					$slash = '/';
					$add = $row2["R7"]+$row2["R8"]+$row2["R9"]+$row2["R10"];
					$tot = $row2["R1"]+$row2["R2"]+$row2["R3"]+$row2["R4"]+$row2["R5"]+$row2["R6"]+$row2["R7"]+$row2["R8"]+$row2["R9"]+$row2["R10"];
					$ans = $add.$slash.$tot;
					echo $ans;
					
					$sql = "UPDATE tblaccounts SET Roverall = '".$ans."' WHERE Student_ID = '".$_COOKIE['user']."'"; 
					//$sql = "INSERT INTO tblaccounts ("Roverall") VALUES ('"$ans"')"; 

					//echo $add.$slash.$tot;
				?>
			</b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 10:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R10"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 9:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R9"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 8:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R8"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 7:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R7"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 6:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R6"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 5:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R5"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 4:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R4"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 3:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R3"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 2:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R2"]; ?></b>
			</div>
		  </div>
		</div>
		
		<div class="text-center">
		  <b>Rating of 1:</b>
		  <div class="progress center-block" style="width:40%;"> <!-- set to certain width -->
			<div class="progress-bar progress-bar-striped active" role="progressbar" style="width: 100%;">
			<b><?php echo $row2["R1"]; ?></b>
			</div>
		  </div>
		</div>
		<br/><br/><br/><br/>

	<?php
	   include('footer.php');
	?>
	</div>
</body>
</html>