<?php
include("header.php");
include("config.php");
?>
 
<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Return Confirmation</h4>

              <div class="row">
              <div class="col-md-3">
              </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Return Confirmation</h5>
                    <!-- Account -->
                    <?php
                      include("config.php");
                      $rentid=$_GET['re_id'];
                      $_SESSION['rentid']=$rentid;
                      $sql = mysqli_query($con, "SELECT * FROM tblrentdetails where rentid='$rentid'");
                      $display=mysqli_fetch_array($sql);
                      $toolid=$display['powertoolid'];
                      $_SESSION['frdate']=$display['fromdate'];
                      $_SESSION['tool_qnty']=$display['tool_qnty'];
                      $_SESSION['bal_amt']=$display['bal_amount'];

                      $sql1 = mysqli_query($con, "SELECT * FROM tblpowertool where powertoolid='$toolid'");
                      $display1=mysqli_fetch_array($sql1);
                      $_SESSION['tool_stock']=$display1['tool_stock'];
                      ?>
                    <hr class="my-0" />
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" action="returnformaction.php" enctype="multipart/form-data">
                        <div class="row" id="rentamount">
                        <p><b>From date : </b><?php echo $display['fromdate'] ?></p>
                        <div class="mb-3 col-md-6">
                            <label for="product" class="form-label">Return date</label>
                            <input class="form-control" type="date" id="rdate" name="rdate" onChange="getreturnamount()" />
                          </div>
                      
                          <div class="mb-3 col-md-6" id="returnamount">
                            <label for="description" class="form-label">Balance amount</label>
                            <input class="form-control" type="text" value="<?php echo $display['bal_amount'] ?>" name="bal_amount" id="bal_amount" value="" />
                          </div>

                        <input type="submit" class="btn btn-danger deactivate-account" name="submit">
                        </div>
                      </form>
                    </div>
                   </div>
                  </div>
                </div>r
              </div>
            </div>
        <script>
	function getreturnamount()
	{
		// var val=document.getElementById('fromdate').value;
		var val=document.getElementById('rdate').value;
        // var val2=document.getElementById('drpmodel').value;
        
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getreturnamount.php",
			data: "id="+val,
			
			success: function(data){
				$("#returnamount").html(data);
			}
		})
	}
	</script>
<?php
include("footer.php");
?>