<?php
include("config.php");
session_start();
$rid=$_SESSION['rentid'];
$fromdate=$_SESSION['frdate'];
$todate=$_POST["rdate"];
$balamount=$_POST["bal_amount"];
$toolstock=$_SESSION['tool_qnty'];
$cu_stock=$_SESSION['tool_stock'];
$bookid=$_SESSION['bookid'];
$up_stock=$cu_stock+$toolstock;
// echo $up_stock;exit;
$sql1 = mysqli_query($con, "SELECT * FROM tblrentdetails where rentid='$rid'");
$display1=mysqli_fetch_array($sql1);
$toolid=$display1['powertoolid'];

$sqlquery=mysqli_query($con,"UPDATE `tblrentdetails` SET returndate='$todate',bal_amount='$balamount',rent_status='Rent Completed' WHERE rentid='$rid'");
$sql=mysqli_query($con,"UPDATE tblpowertool SET tool_stock='$up_stock' WHERE powertoolid='$toolid'");
$sql=mysqli_query($con,"UPDATE tblpowertoolbooking SET bookingstatus='Rent Completed' WHERE bookingid='$bookid'");
// echo "UPDATE tblpowertool SET tool_stock='$up_stock' WHERE powertoolid='$toolid'";
if($sqlquery=$sql)
{
    echo"<script>alert('Rent Confirmed');window.location='rentdetails.php'</script>";
}
else
{
   echo "Not Sucess";
}
?>