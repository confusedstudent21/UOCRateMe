	<?php
		include('randomprofile.php');
		
		$r = "UPDATE `tblaccounts` SET R2 ='".$data3['R2']."'++1 WHERE ID='".$data3['ID']."'";
		$rresult = mysqli_query($connection, $r);
		$datar = mysqli_fetch_array($rresult);
		
		header('Location: rate.php');
	?>