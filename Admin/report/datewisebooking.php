<?php
include("header.php");
include("config.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>POWERTOOLS MANAGEMENT</title>
    </head>
   <body style="background-image:url(../Guest/images/powertool.jpg)">
<form action="" method="POST">
<!-- <div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div> -->
      <div class="container" style="width:100%;margin-bottom: 5%;padding-top:0%" >
      <div class="col-md-12" style="box-shadow: 2px 2px 15px #1b93e1; border-radius:0px; top: 14px; margin-left:10px;background-color:white">
      <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;padding-top:2%">DATEWISE BOOKING</h2>
      <br>
       <div class="row">
    <div class="col-md-3" style="text-align:right">
          <label>From date:</label>
        </div>
    <div class="col-md-6">
          <input type="date" class="form-control" name="fromdate" style="width:500px;" required >
          </td>
        </div>
  </div>
      <br>
      <div class="row">
    <div class="col-md-3" style="text-align:right">
          <label>To date:</label>
        </div>
    <div class="col-md-6">
          <input type="date" class="form-control" name="todate"  style="width:500px;">
          </td>
        </div>
  </div>
      <br>
      <div class="row">
    <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left: 38%;
    max-width: 15%;margin-bottom:2%">
  </div>

  <br>
  </form> 
  <form action="../excel/excel_datewisebooking.php" method="POST">
    <?php

if(isset($_POST["btnsubmit"]))
{
	$fromdate=$_POST["fromdate"];
	$todate=$_POST["todate"]; 
	$_SESSION['fdate']=$fromdate;
	$_SESSION['tdate']=$todate;
	
	
	$s=1;
	?>

	 <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:50px;margin-top:-15px;background-color:white">
 <br>
 <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="width: 119px;
    margin-left: 65%;">
    </div>
           <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">DATEWISE BOOKING REPORT</h2>
           <br>
       
      <div class="row">
          <div class="col-md-3" style="text-align:right">
          <label>From date:</label>
        </div>
    <div class="col-md-6">
          <input type="text" class="form-control" name="fromdate" readonly value="<?php echo $fromdate ?>" style="width:500px;">
          </td>
        </div>
  </div>
  <br>
    <div class="row">
    <div class="col-md-3" style="text-align:right">
          <label>To date:</label>
        </div>
    <div class="col-md-6">
          <input type="text" class="form-control" name="todate" readonly value="<?php echo $todate ?>" style="width:500px;">
          </td>
        </div>
  </div>
  <br>
  <div style="padding-bottom:4%">
      <table class="table table-hover" style="border: 2px solid #adaaaa;margin-left:4px; box-shadow: 3px 3px 11px #777777; padding-bottom:content;background-color:white">
      
      <th> No.</th>
    <th>Category</th>    
    <th>Powertool</th>
    <th>No of Booking</th>
    
    
    <?php


$sql="SELECT count(*) as count,powertoolname,categoryname FROM tblpowertoolcategory de inner join tblpowertool p on de.categoryid=p.powertoolcategory inner join tblpowertoolbooking b on p.powertoolid=b.powertoolid where b.fromdate >='2022-10-18' and b.todate <='2022-10-19' group by b.powertoolid";
$res=mysqli_query($con,$sql);

   while($display=mysqli_fetch_array($res))
	{
    echo "<tr>";
    echo"<td>".$s++."</td>";
    
    echo "<td>".$display["categoryname"]."</td>";
    echo "<td>".$display["powertoolname"]."</td>";
    echo "<td>".$display["count"]."</td>";
    echo "</tr>";
	
	
	
	
	
  }
echo "</table>";;
}

?>
    </form>
</div>
  </div>
      </div>
      </div>
      </div>

</body>
    </html>
<?php
// include("footer.php");
?>
	
