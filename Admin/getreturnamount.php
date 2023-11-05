<?php
session_start();
include("config.php");
$tdate=$_POST['id'];
$fdate=$_SESSION['fdate'];
$ramount=$_SESSION['powertoolprice'];
$adamount=$_SESSION['adv_amount'];
// echo $ramount;
$start = strtotime($fdate);
$end = strtotime($tdate);

$days_between = ceil(abs($end - $start) / 86400);
$balamount=$_SESSION['bal_amt'];
$tool_qnty=$_SESSION['tool_qnty'];
$totalamount=$ramount*$days_between;
$toolwisep=$totalamount*$tool_qnty;
$annualamount=$toolwisep-$adamount;
// $_SESSION['annamount']=$totalamount;
// echo $annualamount;
// exit;
?>

<div class="mb-3 col-md-6" id="returnamount">
<label for="description" class="form-label">Balance amount</label>
<input class="form-control" type="text" value="<?php echo $annualamount ?>" name="bal_amount" id="bal_amount" value="" />
</div>
