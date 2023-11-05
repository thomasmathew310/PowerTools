<?php
include("header.php");
include("config.php");
?>
 
<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->
            <?php
            $rentid=$_GET['rent_id'];
            $_SESSION['bookid']=$rentid;
            $sql=mysqli_query($con,"SELECT * FROM tblpowertoolbooking where bookingid='$rentid'");
            $display=mysqli_fetch_array($sql);
            $_SESSION['qnty']=$display['quantity'];
            ?>
            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Rent Confirmation</h4>

              <div class="row">
              <div class="col-md-3">
              </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Rent Registration</h5>
                    <!-- Account -->
                  
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="rentformaction.php" enctype="multipart/form-data">
                        <div class="row" id="rentamount">
                        <div class="mb-3 col-md-6">
                            <label for="product" class="form-label">From date</label>
                            <input class="form-control" type="text" value="<?php echo date("y-m-d");?>" id="fdate" name="fdate"  value="" />
                          </div>
                      
                          <div class="mb-3 col-md-6">
                            <label for="description" class="form-label">To date</label>
                            <input class="form-control" type="date" name="todate" id="todate" onChange="getmodelamount()" value="" />
                          </div>

                          <div class="mb-3 col-md-6">
                            <label for="product" class="form-label">No of days</label>
                            <input class="form-control" type="text" name="noofdays" id="noofdays" value=""autofocus />
                          </div>

                           <div class="mb-3 col-md-6">
                            <label for="product" class="form-label">Total rent amount</label>
                            <input class="form-control" type="text" name="rentamount" id="rentamount" value="" />
                           </div>

                           <div class="mb-3 col-md-6">
                            <label for="product" class="form-label">Tool quantity</label>
                            <input class="form-control" type="number" value="<?php echo $display['quantity']; ?>" name="qnty" id="qnty" value="" />
                           </div>

                           <div class="mb-3 col-md-12">
                            <label for="product" class="form-label">Advance amount</label>
                            <input class="form-control" type="text" name="advamount" id="advamount" value="" />
                           </div>

                           <div class="mb-3 col-md-12">
                            <label for="product" class="form-label">Purpose and remarks</label>
                            <textarea name="purpose" id="" cols="5" rows="-5" class="form-control"></textarea>
                           </div>

                        <input type="submit" class="btn btn-danger deactivate-account" name="submit">
                        </div>
                      </form>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
            <script>
	function getmodelamount()
	{
		var val=document.getElementById('fdate').value;
		var val1=document.getElementById('todate').value;
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getamount.php",
			data: "id="+val+"&id1="+val1,
			
			success: function(data){
				$("#rentamount").html(data);
			}
		})
	}
	</script>

<?php
include("footer.php");
?>