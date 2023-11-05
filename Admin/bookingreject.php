<?php
$acceptid=$_GET['rejectid'];
include('config.php');
// echo $acceptid;

    mysqli_query ($con,"update tblpowertoolbooking set bookingstatus='rejected' where bookingid='$acceptid'");
	// echo "update tblturfbooking set bookingstatus='accepted' where bookingid='$acceptid'";exit;
				echo "<script> alert('Booking rejected!!');window.location='bookingrequest.php'</script>";

?>