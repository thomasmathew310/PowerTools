<?php
include("config.php");
if(isset($_GET["powertoolid"]))
{
    $pid=$_GET["powertoolid"];
    
    $sql=mysqli_query ($con,"DELETE from tblpowertool WHERE powertoolid= '$pid'");
    if($sql)
	{
		echo "<script>alert('Powertool deleted sucsessfully!!!');window.location='powertoolview.php';</script>";
	} 
    
			
}
?>