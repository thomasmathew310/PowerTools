<?php
include("config.php");
session_start();
$custid=$_SESSION['custid'];
$fromdate=$_POST["fdate"];
$todate=$_POST["todate"];
$noofdays=$_POST["noofdays"];
$rentamount=$_POST['rentamount'];
$purpose=$_POST['purpose'];
$adamount=$_POST['advamount'];
$qnty=$_POST['qnty'];
$total_price=$rentamount-$adamount;
$toolid=$_SESSION['toolid'];
$r_price=$_SESSION['powertoolprice'];
$bookid=$_SESSION['bookid'];
// echo $toolid;
$sql1 = mysqli_query($con, "SELECT * FROM tblpowertool where powertoolid='$toolid'");
$display1=mysqli_fetch_array($sql1);
$quantity=$display1['tool_stock'];
$av_stock=$quantity-$qnty;
// echo $quantity;exit; 

$sqlquery=mysqli_query($con,"INSERT INTO `tblrentdetails`(`customerid`, `powertoolid`, `bookingid`, `fromdate`, `todate`, `returndate`, `adv_amount`, `bal_amount`, `total_rentamount`, `tool_qnty`, `description`, `rent_status`)
VALUES('$custid','$toolid','$bookid','$fromdate','$todate','','$adamount','$total_price','$rentamount','$qnty','$purpose','On rent')");

$sql=mysqli_query($con,"UPDATE tblpowertool SET tool_stock='$av_stock' WHERE powertoolid='$toolid'");
$sql=mysqli_query($con,"UPDATE tblpowertoolbooking SET bookingstatus='On rent' WHERE bookingid='$bookid'");
// echo "INSERT INTO `tblrentdetails`(`customerid`, `powertoolid`, `fromdate`, `todate`, `returndate`, `adv_amount`, `bal_amount`, `total_rentamount`, `description`, `rent_status`)
// VALUES('$custid','$toolid','$fromdate','$todate','','$adamount','$total_price','$rentamount','$purpose','On rent')";
if($sqlquery>0)
{
    echo"<script>alert('Rent Confirmed');window.location='rentdetails.php'</script>";
}
else
{
   echo "Not Sucess";
}
?>