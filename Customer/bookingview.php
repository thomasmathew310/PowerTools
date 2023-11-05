<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bookingtable.css">
</head>
<body>
<section>
  <!--for demo wrap-->
  <h1>My Bookings</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>#</th>
          <th>Customer details</th>
          <th>Power tool details</th>
          <th>Image</th>
          <th>Requested date</th>
          <th>Rent date</th>
          <th>Rent amount</th>
          <th>Bookstatus</th>
        </tr>
      </thead>
  </div>
  <?php
  include("config.php");
    $cusid=$_SESSION['customerid'];
    $s=1;
    $sql=mysqli_query($con,"SELECT * FROM tblpowertoolbooking b inner join tblpowertool p on b.powertoolid=p.powertoolid
    inner join tblcustomerlogin o on b.customerid=o.customerid WHERE b.customerid='$cusid'");
    while($display=mysqli_fetch_array($sql))
    {
    $_SESSION['bookingid']=$display['bookingid'];
    ?>
  
      <tbody>
        <tr>
          <td><?php echo $s++ ?></td>
          <td><?php echo $display['customername'] ?><br>
          <?php echo $display['email'] ?><br>
          <?php echo $display['contactno'] ?></td>
          <td><?php echo $display['powertoolname'] ?></td>
          <td><img src="../Admin/images/<?php echo $display['powertoolimage'] ?>" alt="" width="100" height="100"></td>
          <td><?php echo $display['requestdate'] ?></td>
          <td><?php echo $display['fromdate'] ?><br>
          <?php echo $display['todate'] ?></td>
          <td><?php echo $display['rentamount'] ?></td>
          <td><?php echo $display['bookingstatus'] ?></td>
          <!-- <td><a href="paymentform.php"><button type="button" class="btn btn-outline-primary">Advance payment</button></a></td> -->
        </tr>
      </tbody>
      <?php
    }
  ?>
    </table>
  </div>
 
</section>


<!-- follow me template -->

</body>
</html>

<?php
include("footer.php");
?>