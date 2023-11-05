<?php
include("config.php");
session_start();

    $location=$_POST['locationname'];
    $districtid=$_SESSION['district'];	
    $sql=mysqli_query($con,"SELECT count(*) as count FROM tbllocation WHERE locationname='$location' AND districtid='$districtid'");
    $display=mysqli_fetch_array($sql);
    if($display['count']>0)
    {			
    	echo "<script>alert('Already exist');window.location='locationview.php'</script>";	
    }
    else 
    {
        $sql=mysqli_query($con,"INSERT INTO tbllocation(locationname,districtid)VALUES('$location','$districtid')");
        // echo "INSERT INTO tbllocation(locationname,districtid)VALUES('$location','$districtid')";
        echo "<script>alert('Location Registered Successfully!!');window.location='locationview.php'</script>";
    }
		
?>