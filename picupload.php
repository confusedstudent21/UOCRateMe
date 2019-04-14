<!DOCTYPE html>
<html>
<head>
<title>Upload Picture</title>
    <link href="css/extra.css" rel="stylesheet">
</head>
<body>
	<?php
	   include('menu.php');
	?>
	<div id="background">
		<div id="uploader">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				Select image to upload:
				<input type="file" name="fileToUpload" id="fileToUpload">
				<input type="submit" value="Upload Image" name="submit">
			</form>
		</div>
	</div>
	<?php
	   include('footer.php');
	?>
</body>
</html>