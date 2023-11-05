<?php
include("config.php");

$query ="SELECT count(*) AS 'Number of Booking', Monthname(fromdate) AS 'Month'FROM tblpowertoolbooking GROUP BY Month(fromdate)";
$res =$con-> query($query);
?>
<html>
  <head>
  <style>
.rotated {
  transform: rotate(45deg); /* Equal to rotateZ(45deg) */
  background-color: pink;
}
.btn {
    padding: 8px 4px 8px 1px;
}
#btnExport {
    padding: 10px 40px;
    background:#FF0000;
    border: #499249 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    cursor: pointer;
}
</style>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Month', 'No of Booking'],
        <?php
		while ($row=$res->fetch_assoc())
		{
			echo "['".$row['Month']."',".$row['Number of Booking']."],";
			
			
		}
		?>
        ]);

        var options = {
          title: 'Number of Bookings on Each Month',
		  is3D:true,
        };

        var chart = new google.visualization.BarChart(document.getElementById('barchart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  
  <body>
 
        
    <div id="barchart" ></div>
  </body>
</html>
  

