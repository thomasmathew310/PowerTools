<?php
include("config.php");
$username=$_POST["username"];
$password=$_POST["password"];

$sql=mysqli_query($con,"SELECT * FROM tbladminlogin WHERE adminusername='$username' AND adminpassword='$password'");
$row=mysqli_fetch_array($sql);
if($row>0)
{
	header("location:../Admin/index.php");
}
else
{
	echo "<script>alert('Invalid Username/Password!!');window.location='adminLogin.php'</script>";
}

?>