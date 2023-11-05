<?php
include("config.php");
//  session_start();
if(isset($_POST["submit"]))
{
	$name=$_POST['txtname'];
	$address=$_POST['txtaddress'];
	$districtid=$_POST['drpdistrict'];
	$locationid=$_POST['drplocation'];
	// $locationid;exit;
	$pincode=$_POST['txtpincode'];
	$aadharno=$_POST['txtaadhar'];
	$email=$_POST['txtemail'];
	$phoneno=$_POST['txtphone'];
	$username=$_POST['txtusername'];
	// $password=$_POST['txtpassword'];
	$sql=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tblcustomerlogin");
$display=mysqli_fetch_array($sql);
$id=$display['count'];
$password="cust$id#@0";


$sql=mysqli_query($con,"INSERT INTO `tblcustomerlogin`( `customername`, `customerhousename`, `districtid`, `locationid`, `pincode`, `email`, `contactno`, `aadharno`, `username`, `password`) 
VALUES ('$name','$address','$districtid','$locationid','$pincode','$email','$phoneno','$aadharno','$username','$password')");
if($sql)
$bodyContent="Dear $email, Your account has been successfully created, Please 
login using the username $email and Password $password";
$mailtoaddress=$email;
require('mailtemplate.php');

	
// echo "INSERT INTO `tblcustomerlogin`( `customername`, `customerhousename`, `districtid`, `locationid`, `pincode`, `email`, `contactno`, `aadharno`, `username`, `password`) 
//  VALUES ('$name','$address','$districtid','$locationid','$pincode','$email','$phoneno','$aadharno','$username','$password')";
	if($sql)
	{
		echo"<script>alert('Details registered successfully!!');window.location='custlogin.php'</script>";
	}
	
}
?>
