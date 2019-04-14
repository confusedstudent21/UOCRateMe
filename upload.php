            <?php
                include('connect.php');

				$sqlcookie = $_COOKIE['userID'];
				$new_file_name = $sqlcookie;
				$uploaddir = 'C:\Users\Mashood\Documents\UoCRateMe!\uploads\uploads'.$new_file_name;
				$target_file = $uploaddir . basename($_FILES['fileToUpload']['name']);
				$TF = $sqlcookie;
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				$newname = $sqlcookie;
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
					if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
			header('Location: settings.php');

                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
			header('Location: settings.php');

					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 0;
			header('Location: settings.php');

				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 1000000) {
					echo "Sorry, your file is too large.";
					$uploadOk = 0;
			header('Location: settings.php');

				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
			header('Location: settings.php');

				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
			header('Location: settings.php');

				// if everything is ok, try to upload file
				} else {
					
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						//bool rename ( string $oldname , string $newname [, resource $context ] )
						//echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

						//`rename ($target_file, $sqlcookie);`
					echo "The file '". ($sqlcookie). "' has been uploaded.";

                    include('picdbstore.php');

			header('Location: settings.php');
                } else {
                    echo "Sorry, there was an error uploading your file.";
			header('Location: settings.php');
					}
				}
            ?>