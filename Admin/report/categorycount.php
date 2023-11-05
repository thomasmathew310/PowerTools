<?php

include("config.php");
  
$query ="SELECT count(*) as bookingcount,categoryname FROM tblpowertoolcategory de  inner join tblpowertool b on de.categoryid=b.powertoolcategory  group by b.powertoolcategory ";  
$result = mysqli_query($con, $query);  
?>
 <!DOCTYPE html>  
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['categoryname', 'bookingcount'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["categoryname"]."', ".$row["bookingcount"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
     
                  
                   
                      
                 
               <div id="piechart"  >  
                 
               </div>
               
               
               
      </body>  
 </html>  
