<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Signin</title>

    <!-- Custom styles for this page -->
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/extra.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
	<?php
	   include('menu.php');
	?>
	<div id="background">

    <div class="container">

      <form class="form-signin" name="MY Form" method="post" action="logincheck.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="USERNAME" name="USERNAME" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="PASSWORD" name="PASSWORD" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Login">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
	</div>
		<?php
		include('footer.php');
	?>
  </body>
</html>
