	<?php
		include('randomprofile.php');
		
		$r = "UPDATE `tblaccounts` SET R7 ='".$data3['R7']."'++1 WHERE ID='".$data3['ID']."'";
		$rresult = mysqli_query($connection, $r);
		$datar = mysqli_fetch_array($rresult);
		
		header('Location: rate.php');
	?>