<?php
session_start();
include("config.php");
$fdate=$_POST['id'];
$tdate=$_POST['id1'];
// echo $fdate;
// echo $tdate;exit;

$start = strtotime($fdate);
$end = strtotime($tdate);

$days_between = ceil(abs($end - $start) / 86400);
// echo $days_between;
// exit;

$toolid=$_SESSION['powertoolid'];
$sql=mysqli_query($con,"select * from tblpowertool where powertoolid='$toolid'");
// echo "select * from tblmodel where modelid='$model'";
$row=mysqli_fetch_array($sql);
$rentamount=$row['powertoolprice'];
$totalamount=$rentamount*$days_between;
// echo $totalamount;
// exit;
?>
 <div class="col-md-6" id="rentamount">
    <h2 class="text-black"><?php echo $display['powertoolname'] ?></h2>
    <p><?php echo $display['powertooldescription'] ?></p>
    <p><strong class="text-primary h4"><?php echo $display['powertoolprice'] ?></strong></p>
    <div class="mb-1 d-flex">
        <label for="option-sm" class="d-flex mr-3 mb-3">
        <label for="">From date :</label>
        <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
        <input type="date" id="option-sm" id="fdate" name="fdate"></span><br>
        </label>
        <label for="option-md" class="d-flex mr-3 mb-3">
        <label for="">To date :</label>
        <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
        <input type="date" id="option-md" placeholder="" id="todate" name="todate" onChange="getrentamount()"></span>
        </label>
        
    </div>
    <div class="mb-1 d-flex">
        <label for="option-sm" class="d-flex mr-3 mb-3">
        <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
        <input type="text" id="option-sm" name="shop-sizes" placeholder="No of days" id="days" name="days"></span><br>
        </label>
        <label for="option-md" class="d-flex mr-3 mb-3">
        <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
        <input type="text" id="option-md" placeholder="Total amount" id="tamount" name="tamount"></span>
        </label>
        
    </div>
    <div class="mb-5">
        <div class="input-group mb-3" style="max-width: 120px;">
        <div class="input-group-prepend">
        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
        </div>
        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
        <div class="input-group-append">
        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
        </div>
    </div>
</div>
