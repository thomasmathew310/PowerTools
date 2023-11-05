<?php
include("config.php");
session_start();
$productname=$_POST["name"];
$productcategory=$_SESSION['category'];
$productdescription=$_POST["description"];
$productprice=$_POST["price"];
$stock=$_POST["stock"];
$loc= "images/";
    $img=$_FILES['image'] ['name'];
    move_uploaded_file($_FILES['image']['tmp_name'],$loc.$img);

$sql=mysqli_query($con,"insert into tblpowertool(powertoolname,powertooldescription,powertoolcategory,powertoolprice,tool_stock,powertoolimage)values('$productname','$productdescription','$productcategory','$productprice','$stock','$img')");
// echo "insert into tblpowertool(powertoolname,powertooldescription,powertoolcategory,powertoolprice,powertoolimage,powertoolstatus)values('$productname','$productdescription','$productcategory','$productprice','$img','pending')";

// $row=mysqli_fetch_array($sql);
if($sql>0)
{
	echo "<script>alert('Registration successfully');window.location='powertoolview.php'</script>";
}
else
{
	echo "<script>alert('Registration failed');window.location='powertoolregistration.php'</script>";
}

?>