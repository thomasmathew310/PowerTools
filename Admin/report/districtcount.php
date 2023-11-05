<?php
 $connect = mysqli_connect("127.0.0.1","root","","dbpowertools");  
 $query ="SELECT count(*) as count,districtname FROM tbldistrict a inner join tblcustomerlogin b on a.districtid=b.districtid group by  a.districtid";  
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
                          ['districtname', 'count'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["districtname"]."', ".$row["count"]."],";  
                          }  
                          ?>
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piecharts'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
            
           <div id="piecharts">  
                
                
                
           </div>  
      </body>  
 </html>  
