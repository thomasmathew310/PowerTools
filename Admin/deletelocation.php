<?php
include("config.php");
if(isset($_GET["locationid"]))
{
    $lid=$_GET["locationid"];
    
    $sql=mysqli_query ($con,"DELETE from tbllocation WHERE locationid= '$lid'");
    if($sql)
	{
		echo "<script>alert('Location deleted sucsessfully!!!');window.location='locationview.php';</script>";
	} 
    
			
}
?>