<?php
include("config.php");
session_start();
$toolid=$_SESSION['powertoolid'];
$customerid=$_SESSION["customerid"];
$requestdate=date('y/m/d');
// echo $requestdate;exit;
$requestfromdate=$_POST["fdate"];
// echo $requestfromdate;
$requesttodate=$_POST["todate"];
// echo $requesttodate;
$r_amount=$_POST['r_amount'];
$qnty=$_POST['txt_qnty'];
// echo $r_amount;
$desc=$_POST["desc"];
$toolcategory=$_SESSION['toolcategory'];

$now = strtotime($requestfromdate);
$your_date = strtotime($requesttodate);
$datediff = $your_date-$now;
$c_price = round($datediff / (60 * 60 * 24))*$r_amount;
$annualprice=$c_price*$qnty;
// echo $c_price;
// exit;
// $amount=$_POST["rentamount"];
$sql = mysqli_query($con,"select * from tblpowertool where powertoolid='$toolid'");
// echo "select * from tblpowertool where powertoolid='$toolid'";
$display=mysqli_fetch_array($sql);
$toolqnty=$display['tool_stock'];
// echo $toolqnty;
if($qnty>$toolqnty)
{
  echo "<script>alert('Quantity exceeded');window.location='powertoolview.php'</script>";
}
else
{

$sqlquery=mysqli_query($con,"INSERT INTO tblpowertoolbooking(customerid,powertoolid,categoryid,quantity,requestdate,fromdate,todate,rentamount,bookingstatus)
VALUES($customerid,'$toolid','$toolcategory','$qnty','$requestdate','$requestfromdate','$requesttodate','$annualprice','requested')");
// echo "INSERT INTO tblpowertoolbooking(customerid,powertoolid,categoryid,requestdate,fromdate,todate,rentamount,bookingstatus)
// VALUES('$customerid','$toolid','$toolcategory','$requestdate','$requestfromdate','$requesttodate','$c_price','requested')";
if($sqlquery>0)
{
    echo "<script>alert('Your Booking has been completed');window.location='bookingview.php'</script>";
}
else
{
   echo "<script>alert('Not success');window.location='powertoolregistration.php'</script>";
}
}
?>