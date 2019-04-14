<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">
    <link href="css/extra.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

	<!-- Include jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<!-- Include Date Range Picker -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


	<script>
		$(document).ready(function(){
		  var date_input=$('input[name="date"]'); //our date input has the name "date"
		  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		  var options={
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		  };
		  date_input.datepicker(options);
		})
}
	</script>
  </head>

  <body>
	<?php
	   include('menu.php');
	?>
	<div id="background">
    <div class="container">

      <form class="form-signin" name="Register_Form" method="post" action="regcheck.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="inputEmail" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
		<label for="CPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="CPassword" name="CPassword" class="form-control" placeholder="Confirm Password" required>
		
		<label for="Student_ID" class="sr-only">Student ID</label>
        <input type="Student_ID" id="Student_ID" name="Student_ID" class="form-control" placeholder="Student ID" required>
		
		<label for="FirstName" class="sr-only">First Name</label>
        <input type="FirstName" id="FirstName" name="FirstName" class="form-control" placeholder="First Name" required>
		
		<label for="SecondName" class="sr-only">Second Name</label>
        <input type="SecondName" id="SecondName" name="SecondName" class="form-control" placeholder="Second Name" required>
		
		<label for="Course" class="sr-only">Course</label>
        <input type="Course" id="Course" name="Course" class="form-control" placeholder="Course" required>
		
		<div class="input-group input-append date" id="dateRangePicker"> <!-- Date input -->
			<label for="Course" class="sr-only">Date</label>
       <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
			<span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
		</div>
		
		<input type="radio" name="gender" value="Male" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Male") { ?>checked<?php  } ?>> Male
		<input type="radio" name="gender" value="Female" <?php if(isset($_POST['Gender']) && $_POST['Gender']=="Female") { ?>checked<?php  } ?>> Female
		
		<button class="btn btn-lg btn-primary btn-block" type="reg" name="reg" value="Register">Register</button>
      </form>

    </div> <!-- /container -->
	</div>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	
		<?php
		include('footer.php');
	?>
  </body>
</html>