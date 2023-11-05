<?php
session_start();
include 'excel_controller.php';
$db_handle = new DBController();
$fromdate=$_SESSION['fdate'];
$todate=$_SESSION['tdate'];
$productResult = $db_handle->runQuery("SELECT count(*) as count,powertoolname,categoryname FROM tblpowertoolcategory de 
inner join tblpowertool d on de.categoryid=d.powertoolcategory
inner join tblpowertoolbooking b on d.powertoolid=b.powertoolid where
b.fromdate >='$fromdate' 
and b.todate <='$todate' group by b.powertoolid");

  
    $filename = "Booking_excel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>
