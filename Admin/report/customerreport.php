<?php
include("header.php");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>>Powertools Management</title>
</head>

<body>
<form action="../excel/.php" method="post">
<div class="logo">
              <a href="./index.php">
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                 <img src="img/logo.png" alt="">&nbsp; &nbsp;</a>
                 </div>
  <div class="container" style="width:100%;margin-bottom: 5%;" >
  <div class="row">
  <div class="col-md-12" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:15px; top: 106px;    margin-bottom: 59px;">
  <div class="row" style="margin-left: -173%;margin-top: 2%;margin-bottom: -5%;">
      <input type="submit" name="addnew" value="Export" class="btn btn-primary" style="width: 119px;
    margin-left: 65%;">
    </div>
  <h2 style="text-align: center;margin-top: 6%;font-family: fantasy;">CUSTOMER REPORT</h2>
  <div class="form-horizontal" style="margin-left:0px;">
  <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">

  <tr>
                          <th> Sl.No </th>
                          <th> Customer Name  </th> 
                          <th> House Name </th>
                          <th> Aadhar No </th>
                          <th> Location </th>
                          <th> District </th>
                          <th> Email </th>
                          <th> Phone No</th>
           
                        </tr>
   
    <?php
include("config.php");
$s=1;
$sql="select customername,customerhousename,aadharno,contactno,email,locationname,districtname from tblcustomerlogin de inner join tbldistrict d on de.districtid=d.districtid inner join tbllocation di on de.locationid=di.locationid ";
$res=mysqli_query($con,$sql);
   while($display=mysqli_fetch_array($res))
   {
    ?>
	<tr>
                          <td class="py-1"><?php echo $s++;?></td>
                          <td> <?php echo $display["customername"];?></td>
                          <td> <?php echo $display["customerhousename"];?></td>
                          <td> <?php echo $display["locationname"];?></td>
                          <td> <?php echo $display["districtname"];?></td>
                          <td> <?php echo $display["aadharno"];?></td>
                          <td> <?php echo $display["email"];?></td>
                          <td> <?php echo $display["contactno"];?></td>
                          
                           
                      </tr>
                      <?php  
	
  }
  ?>
</table>

</div>
  </div>
  </div>
</div>
  </div>
  </div>
</form>
</body>
</html>
<?php
// include("footer.php");
?>