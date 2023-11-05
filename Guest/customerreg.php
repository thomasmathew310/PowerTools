<?php
include("header.php");
include("config.php");
?>


      <div class="row">
        <!-- <div class="col-md-6">
        </div> -->
        <div class="col-md-6" id="reg_frm">
          <div class="card mb-4">
            <h5 class="card-header">Customer Registration</h5>
            <!-- Account -->

            <hr class="my-0" />
            <div class="card-body">
              <form id="formAccountSettings" method="POST" action="customerregaction.php" enctype="multipart/form-data">
                <div class="row">
                  <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" name="txtname" placeholder="Enter your Name" required="">
                  </div><br><br>
                  <div class="mb-3 col-md-12">
                    <textarea class="form-control" type="text" name="txtaddress" placeholder="Enter your Address" required=""></textarea>
                  </div><br><br>


                  <div class="mb-3 col-md-12">
                  <?php
                  include("config.php");
                  $sql = mysqli_query($con, "select * from tbldistrict");
                  ?>
                
                  <select id="drpdistrict" name="drpdistrict" onChange="getlocation()" class="form-control" required="">
                    <option value="0">---Select District---</option>
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                      <option value="<?php echo $row['districtid'] ?>"> <?php echo $row['districtname']; ?> </option>
                    <?php
                    }
                    ?>


                  </Select>
                  </div>
                  <div class="mb-3 col-md-12" id="chkboxContainer">
                  <select id="drplocation" name="drplocation" class="form-control" style="padding-left: 10px;" required="">
                    <option value="0">---Select Location---</option>
                    
                      <option value="<?php echo $row['locationid'] ?>"> <?php echo $row['locationname']; ?> </option>
                  
                  </select>
                  </div>
                  
                  <div class="mb-3 col-md-12">
                    <input class="form-control" type="number" name="txtpincode" pattern="[0-9]{6}"  value="686576" required 
  placeholder="Enter pincode" required="">
                  </div><br><br>
                  <div class="mb-3 col-md-12">
                    <input class="form-control" type="number" name="txtaadhar"pattern="[0-9]{12}"  placeholder="Enter Aadhar Number" required="">
                  </div><br><br>
                  <div class="mb-3 col-md-12">
                    <input class="form-control" type="email" name="txtemail"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="must enter a valid email address" required value="bibin2145@gmail.com"
 placeholder="Enter your Email" required="">
                  </div><br><br>
                  
                  <div class="mb-3 col-md-12">
                    <input class="form-control" type="number" name="txtphone" maxlength="10" value="9876543210" 
 placeholder="Enter Mobile Number" required="">
                  </div><br><br>
                  <div class="mb-3 col-md-12">
                    <input class="form-control" type="text" name="txtusername" pattern="[a-z]{1,15}" required value="abcd"placeholder="Enter Username" required="">
                  </div><br><br>
                  <!-- <div class="mb-3 col-md-12">
                    <input class="form-control" type="password" name="txtpassword" placeholder="Enter Password" required="">
                  </div><br><br>
                   -->


                  <input type="submit"style=" margin-left: 260px;
" text-align:center; class="btn btn-danger deactivate-account" name="submit">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
<style>
@media only screen and (min-width: 768px)
 {
      #reg_frm
      {
        margin-left: 23em;
        margin-top: 43px
      }  
}

</style>
<script>
	function getlocation()
	{
		var val=document.getElementById('drpdistrict').value;
		//alert(val);
		$.ajax({
			type: "POST",
			url: "getlocation.php",
			data: "id="+val,
			
			success: function(data){
				$("#chkboxContainer").html(data);
			}
		})
	}
	</script>
<?php
include("footer.php");
?>