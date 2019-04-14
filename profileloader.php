    <?php
        include('connect.php');
    ?>

    <?php
        $sql = $_COOKIE['userID'];
		//$intsql = ;
        $result = mysqli_query($connection, $sql);
        $count = mysqli_connect($result);

        if (settype($sql, "integer") == 1){
                $result2 =  mysqli_query($connection, "SELECT * FROM `tblaccounts` WHERE Student_ID='$sql'");
                $row2 = mysqli_fetch_assoc($result2);
            } else { 
                echo ("unable to load");
            }
        ?>