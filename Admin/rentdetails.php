<?php

include("header.php");
include("config.php");

?>

          <!-- Navbar -->


          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Rent Confirmation Details</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Rent Confirmation</h5>

                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                      <th>#</th>
                    <th>Customer details</th>
                    <th>Power tool details</th>
                    <th>Image</th>
                    <th>Req:Qnty</th>
                    <th>Av:Qnty</th>
                    <th>Requested date</th>
                    <th>Rent date</th>
                    <th>Initial rent</th>
                    <th>Total Rent mount</th>
                    <th>Bookstatus</th>
                    <th>Rent Confirmation</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        <?php 
                        $s=1;
                        $sql=mysqli_query($con,"SELECT * FROM tblpowertoolbooking b inner join tblpowertool p on b.powertoolid=p.powertoolid
                        inner join tblcustomerlogin o on b.customerid=o.customerid where b.bookingstatus='accepted'");
                        while($display=mysqli_fetch_array($sql))
                        
                        {
                        $_SESSION['powertoolprice']=$display['powertoolprice'];
                        $_SESSION['custid']=$display['customerid'];
                        $_SESSION['toolid']=$display['powertoolid'];
                        
                        ?>

                      <tr>
                      <td><?php echo $s++ ?></td>
                        <td>Customer name :<?php echo $display['customername'] ?><br>
                        Email :<?php echo $display['email'] ?><br>
                        Contact No :<?php echo $display['contactno'] ?></td>
                        <td><?php echo $display['powertoolname'] ?></td>
                        <td><img src="../Admin/images/<?php echo $display['powertoolimage'] ?>" alt="" width="100" height="100"></td>
                        <td><?php echo $display['quantity'] ?></td>
                        <td><?php echo $display['tool_stock'] ?></td>
                        <td><?php echo $display['requestdate'] ?></td>
                        <td><?php echo $display['fromdate'] ?><br>
                        <?php echo $display['todate'] ?></td>
                        <td><?php echo $display['powertoolprice'] ?></td>
                        <td><?php echo $display['rentamount'] ?></td>
                        <td><?php echo $display['bookingstatus'] ?></td>
                        <td><a href="rentform.php?rent_id=<?php echo $display['bookingid'] ?>"><button type="button" name="btnsubmit" class="btn btn-outline-primary">Confirm rent</button></a></td>
                      </tr>
                      <?php } ?>
                      
                    </tbody>
                  </table>
                 
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />

             
              

              <!-- Responsive Table -->
              
              <!--/ Responsive Table -->
            </div>
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

           
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
     
    </div>
    <?php
include("footer.php");
?>