<?php
include("header.php");
?>


          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row" >
                <div class="col-lg-8 mb-4 order-0" style="width: 100%;">
                  <div class="card">
                    <div class="d-flex align-items-end row" >
                      <div class="col-sm-7">
                        <!-- <div class="card-body">
                          <h5 class="card-title text-primary">Congratulations Rashid! 🎉</h5>
                          

                          
                        </div> -->
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                         
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
               
                
               
           
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
 
        
    <div id="barchart" style="width: 98%;"></div>
  </body>
</html>
  


              <div class="row" style="padding-top: 3%;"> 
                
                <div class="col-md-6 col-lg-4 order-2 mb-4" style="height:75px;padding:1%;">
                  <div class="card h-100" style="padding-top:10% ;">
                     <h6 align="center">Pie Chart showing the Booking Count of Powertools in each Category</h6>  
                    <?php
                    include("report/categorycount.php");
                    ?>
                  </div>
                </div>
             
                <div class="col-md-6 col-lg-4 order-2 mb-4" style="height:75px;padding:1%;">
                  <div class="card h-100" style="padding-top:10% ;">
                     <h6 align="center">Pie Chart showing the Booking Count of each Powertools</h6>  
                    <?php
                    include("report/powertoolcount.php");
                    ?>
                  </div>
                </div>
              
                <div class="col-md-6 col-lg-4 order-2 mb-4" style="height:75px;padding:1%;">
                  <div class="card h-100" style="padding-top:10% ;">
                  <h6 align="center">Pie Chart showing the Booking Count of Customers in each District</h6>  
                    <?php
                    include("report/districtcount.php");
                    ?>
                  </div>
                </div>
                </div>
                </div>

                <?php
include("footer.php");
?>
              

           
