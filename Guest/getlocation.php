<?php
session_start();
include("config.php");
$id=$_POST['id'];
?>

 <?php
     
     $sql=mysqli_query($con,"select * from tbllocation where districtid='$id'  ");
     ?>

  <!-- <div class="row" style="margin-left: 1%;">-->
     
      <div class="col-md-6" style="    margin-left: -20%;">
     <select name="drplocation" id="drplocation" class="form-control" style="width: 619px;margin-left: 107px;}" >
     <option value="">--Select--</option>
     <?php
     while($row=mysqli_fetch_array($sql))
     {
     ?>
     <option value="<?php echo $row['locationid'] ?>"> <?php echo $row['locationname'];?> </option>
     <?php
     }
     ?>
     </select>
      </div>
   <!-- </div>-->
    
