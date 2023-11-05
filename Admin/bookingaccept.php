<?php
$acceptid=$_GET['acceptid'];
include('config.php');
// echo $acceptid;

    mysqli_query ($con,"update tblpowertoolbooking set bookingstatus='accepted' where bookingid='$acceptid'");
	// echo "update tblturfbooking set bookingstatus='accepted' where bookingid='$acceptid'";exit;
				echo "<script> alert('Accepted successfully!!');window.location='bookingrequest.php'</script>";

?>