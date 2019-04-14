<!DOCTYPE html>
<html>
<head>
<title>Settings</title>
    <link href="css/extra.css" rel="stylesheet">
</head>
<body>
	<?php
	   include('menu.php');
	?>
	<div id="background">
		<p><center><a class="btn btn-primary btn-lg" href="picupload.php" role="button">Upload Profile Picture</a><center></p>
	
	    <div class="container">

      <form class="form-signin" name="Update_Form" method="post" action="updatesettings.php">
        <h2 class="form-signin-heading">Edit Your Profile</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="inputEmail" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
		<label for="CPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="CPassword" class="form-control" placeholder="Confirm Password" required>
		<label for="FirstName" class="sr-only">First Name</label>
        <input type="FirstName" id="FirstName" name="FirstName" class="form-control" placeholder="First Name" required>
		<label for="SecondName" class="sr-only">Second Name</label>
        <input type="SecondName" id="SecondName" name="SecondName" class="form-control" placeholder="Second Name" required>
		<label for="Course" class="sr-only">Course</label>
        <input type="Course" id="Course" name="Course" class="form-control" placeholder="Course" required>		
		<button class="btn btn-lg btn-primary btn-block" type="upd" name="upd" value="update">Save</button>
      </form>
	</div>
	<?php
	   include('footer.php');
	?>
</body>
</html>