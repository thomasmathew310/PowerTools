<?php
 $connect = mysqli_connect("127.0.0.1","root","","dbpowertools");  
 $query ="SELECT count(*) as count,powertoolname FROM tblpowertool a inner join tblpowertoolbooking b on a.powertoolid=b.powertoolid group by  a.powertoolid";  
 $result = mysqli_query($connect, $query);  
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
                          ['powertoolname', 'count'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["powertoolname"]."', ".$row["count"]."],";  
                          }  
                          ?>
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechartss'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
            
           <div id="piechartss">  
                
                
                
           </div>  
      </body>  
 </html>  
