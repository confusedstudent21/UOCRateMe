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

    <title>Rate People</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
	<link href="css/navbar.css" rel="stylesheet">
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <link href="css/extra.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>
	<?php
	   include('menu.php');
	?>
	<?php
		include('randomprofile.php');
	?>
		<div id="background">
<table align="center">
  <tr>
    <td><p><center><img src="<?php echo $data3["PicName"];?>" alt="Profile Picture" width="250" height="250"></a><center></p></td>
  </tr>
  <tr>
    <th><p><center>name: <?php echo $data3["FirstName"];?> <?php echo $data3["SecondName"];?><center></p></th>
  </tr>
</table>

<table align="center">
  <tr>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile1.php" role="button">1</a><center></p></th>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile2.php" role="button">2</a><center></p></th>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile3.php" role="button">3</a><center></p></th>
  </tr>
  <tr>
    <td><p><center><a class="btn btn-primary btn-lg" href="randomprofile4.php" role="button">4</a><center></p></td>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile5.php" role="button">5</a><center></p></th>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile6.php" role="button">6</a><center></p></th>
  </tr>
  <tr>
    <td><p><center><a class="btn btn-primary btn-lg" href="randomprofile7.php" role="button">7</a><center></p></td>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile8.php" role="button">8</a><center></p></th>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile9.php" role="button">9</a><center></p></th>
  </tr>
    <tr>
    <td></td>
    <th><p><center><a class="btn btn-primary btn-lg" href="randomprofile10.php" role="button">10</a><center></p></th>
    <th></th>
  </tr>
</table>
	</div>
	<?php
		include('footer.php');
	?>
  </body>
</html>