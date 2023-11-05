<?php
include ("excel_controller.php");
$clinic = new DBController();
$productResult = $clinic->runQuery("select de.categoryname,d.powertoolname from tblpowertool d inner join tblpowertoolcategory de on d.powertoolcategory=de.categoryid");

  
    $filename = "Export_powertoolexcel.xls";
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



 
  
      
