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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Booking details</h4>

              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Booking requests</h5>

                <a href="bustype.php"><button type="button" class="btn btn-primary m-2" align="right">Add New</button></a><br>
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
                    <th>Rent mount</th>
                    <th>Bookstatus</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                        <?php 
                        $s=1;
                        $sql=mysqli_query($con,"SELECT * FROM tblpowertoolbooking b inner join tblpowertool p on b.powertoolid=p.powertoolid
                        inner join tblcustomerlogin o on b.customerid=o.customerid where b.bookingstatus='requested'");
                        while($display=mysqli_fetch_array($sql))
                        
                        {
                        ?>

                      <tr>
                      <td><?php echo $s++ ?></td>
                        <td><?php echo $display['customername'] ?><br>
                        <?php echo $display['email'] ?><br>
                        <?php echo $display['contactno'] ?></td>
                        <td><?php echo $display['powertoolname'] ?></td>
                        <td><img src="../Admin/images/<?php echo $display['powertoolimage'] ?>" alt="" width="100" height="100"></td>
                        <td><?php echo $display['quantity'] ?></td>
                        <td><?php echo $display['tool_stock'] ?></td>
                        <td><?php echo $display['requestdate'] ?></td>
                        <td><?php echo $display['fromdate'] ?><br>
                        <?php echo $display['todate'] ?></td>
                        <td><?php echo $display['rentamount'] ?></td>
                        <td><?php echo $display['bookingstatus'] ?></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="bookingaccept.php?acceptid=<?php echo $display["bookingid"]; ?>">
                              <i class="bx bx-edit-alt me-1"></i> Accept</a>
                              <a class="dropdown-item" href="bookingreject.php?rejectid=<?php echo $display["bookingid"]; ?>"><i class="bx bx-trash me-1"></i> Reject</a>
                            </div>
                          </div>
                        </td>
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