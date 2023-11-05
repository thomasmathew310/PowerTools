<?php
include("config.php");
$category=$_POST["category"];
$categorydescription=$_POST["description"];
$sql = mysqli_query($con,"select count(*) as count from tblpowertoolcategory where categoryname='$category'");
$display=mysqli_fetch_array($sql);
if($display['count']>0)
{
  echo "<script>alert('Already Exists!!!');window.location='categoryview.php'</script>";
}
else
{

$sql=mysqli_query($con,"insert into tblpowertoolcategory(categoryname,categorydescription)values('$category','$categorydescription')");
// echo "insert into tblpowertoolcategory(categoryname,categorydescription)values('$category','$categorydescription')";
if($sql>0)
{
	echo "<script>alert('Registration successfull');window.location='categoryview.php'</script>";
}
}
?>