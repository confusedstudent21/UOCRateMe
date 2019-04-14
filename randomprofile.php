	<?php
		include('connect.php');
		
		//select a number between min id and max id
		$v = "SELECT ID FROM `tblaccounts` ORDER BY RAND() LIMIT 1";
		$result = mysqli_query($connection, $v);
		$data2 = mysqli_fetch_array($result);

		//var_dump($data2);
		
		$c = "SELECT * FROM `tblaccounts` WHERE ID='".$data2['ID']."'";
		$cresult = mysqli_query($connection, $c);
		$data3 = mysqli_fetch_array($cresult);

		

		//var_dump($data3);
	?>