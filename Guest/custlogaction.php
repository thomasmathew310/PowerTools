<?php
session_start();
include("config.php");
if(isset($_POST['submit']))
{
$username=$_POST['Username'];
$password=$_POST['Password'];

$sql=mysqli_query($con,"SELECT * FROM tblcustomerlogin WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($sql);
if($row>0)
{
    $_SESSION["customerid"]=$row["customerid"];
	header("location:../customer/index.php");
}
else
{
	echo "<script>alert('Invalid Username/Password!!');window.location='index.php'</script>";
}
}
?>