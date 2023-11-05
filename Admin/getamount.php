<?php
session_start();
include("config.php");
$fdate=$_POST['id'];
$tdate=$_POST['id1'];
// echo $fdate;
// echo $tdate;exit;
$qnty=$_SESSION['qnty'];

$start = strtotime($fdate);
$end = strtotime($tdate);

$days_between = ceil(abs($end - $start) / 86400);
// echo $days_between;
// exit;

$rentamount=$_SESSION['powertoolprice'];
// echo $rentamount;
$totalamount=$rentamount*$days_between;
$totalamount1=$totalamount*$qnty;
// echo $totalamount1;
// exit;
?>
<div class="mb-3 col-md-6">
<label for="product" class="form-label">From date</label>
<input class="form-control" type="text" value="<?php echo date("y-m-d");?>" id="fdate" name="fdate"  value="" />
</div>

<div class="mb-3 col-md-6">
<label for="description" class="form-label">To date</label>
<input class="form-control" type="date" name="todate" id="todate" value="<?php echo $tdate;?>" onChange="getmodelamount()" value="" />
</div>

<div class="mb-3 col-md-6">
<label for="product" class="form-label">No of days</label>
<input class="form-control" type="text" name="noofdays" id="noofdays" value="<?php echo $days_between;?>" value=""autofocus />
</div>

<div class="mb-3 col-md-6">
<label for="product" class="form-label">Total rent amount</label>
<input class="form-control" type="text" name="rentamount" id="rentamount" value="<?php echo $totalamount1;?>" value="" />
</div>

<div class="mb-3 col-md-6">
<label for="product" class="form-label">Tool quantity</label>
<input class="form-control" type="number" value="<?php echo $_SESSION['qnty'] ?>" name="qnty" id="qnty" value="" />
</div>

<div class="mb-3 col-md-12">
<label for="product" class="form-label">Advance amount</label>
<input class="form-control" type="text" name="advamount" id="advamount" value="" />
</div>

<div class="mb-3 col-md-12">
<label for="product" class="form-label">Purpose and remarks</label>
<textarea name="purpose" id="" cols="5" rows="-5" class="form-control"></textarea>
</div>
<input type="submit" class="btn btn-danger deactivate-account" name="submit">
