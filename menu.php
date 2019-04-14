<html>
   <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="css/signin.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
   </head>

   <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">UoC Rate Me!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
	      </ul>
		<?php
			require_once 'loginmenu.php';
		?>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
					<!--<php echo 'Hello '.($_COOKIE['userID']!='' ? $_COOKIE['user'] : 'Guest');?>-->
   </body>
</html>