<?php
    include("header.php");
    ?>

                            <?php
                            include("config.php");
                            if(isset($_GET["powertoolid"]))
                            {
                            $powertoolid=$_GET["powertoolid"];
                            // echo $category_id;
                            // exit;
                            $sql=mysqli_query($con,"SELECT * FROM `tblpowertool`p inner join `tblpowertoolcategory` c on p.`powertoolcategory`=c.`categoryid` WHERE `powertoolid`='$powertoolid'");
                            $display=mysqli_fetch_array($sql);
                            $_SESSION['toolstock']=$display['tool_stock'];
                            }
                            ?>
                       <!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Powertool Edit</h4>

              <div class="row">
              <div class="col-md-3">
              </div>
                <div class="col-md-6">
                  <div class="card mb-4">
                    <h5 class="card-header">Powertool Edit</h5>
                    <!-- Account -->
                  
                    <hr class="my-0" />
                    <div class="card-body">
                      <form method="post" action="" enctype="multipart/form-data">
                        <div class="row">

                        <div class="mb-3 col-md-12">
                            <label for="product" class="form-label">Powertool Name</label>
                            <input class="form-control" type="text" name="name"  value="<?php echo $display['powertoolname'];?>">
                          </div>
                          
                          
                         
                          <div class="mb-3 col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <input class="form-control" type="text" name="description" value="<?php echo $display['powertooldescription'];?>">
                          </div>

                          <div class="mb-3 col-md-12">
                          <label for="description" class="form-label">Category</label>
                          <?php
                            $sql = mysqli_query($con, "select * from tblpowertoolcategory");
                            ?>
                            <select name="drpcategory" id="drpcategory" class="form-control" style="width:500px;">
                            <option value="<?php echo $display['categoryid'];?>"><?php echo $display['categoryname'];?></option>
                            <?php
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?php echo $row['categoryid'] ?>"><?php echo $row['categoryname']; ?> </option>
                            <?php
                            }

                            
                            ?>
                        </select>
                          </div> 

                          <div class="mb-3 col-md-12">
                            <label for="product" class="form-label">price</label>
                            <input class="form-control" type="text" name="price"   value="<?php echo $display['powertoolprice'];?>">
                            <div class="mb-3 col-md-12">               
                            </div><img src="assets/img/backgrounds/<?php echo $display['powertoolimage'] ?>"height='100' width="100" >
                            </div>

                            <div class="mb-3 col-md-12">
                            <label for="description" class="form-label">Tool stock</label>
                            <input class="form-control" type="text" name="stock" value="0">
                          </div>

                           <div class="mb-3 col-md-12">
                            <label for="product" class="form-label">Upload image</label>
                            <input class="form-control" type="file" name="image" img="<?php echo $display['powertoolimage'];?>">
                      </div>
                      <button type="submit" name="btnsubmit" class="btn btn-primary">Update</button>
                            
                        </div>
                      </form>
                    </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
    <?php
    include('config.php');
if(isset($_POST["btnsubmit"]))
{
  $productname=$_POST['name'];
  $productcategory=$_POST['drpcategory'];
  $productdescription=$_POST['description'];
  $productprice=$_POST['price'];
  $stock=$_POST['stock'];
  $upstock=$stock+$_SESSION['toolstock'];
  $loc= "images/";
    $img=$_FILES['image'] ['name'];
    if($img=="")
    {
      // echo "UPDATE tblpowertool SET powertoolname='$productname',powerdescription='$productdescription',powertoolcategory='$productcategory',powertoolprice='$productprice' WHERE powertoolid='$powertoolid'";
      $sql=mysqli_query($con,"UPDATE tblpowertool SET powertoolname='$productname',powertooldescription='$productdescription',powertoolcategory='$productcategory',powertoolprice='$productprice',tool_stock='$upstock' WHERE powertoolid='$powertoolid'");
      echo "<script>alert('Powertool updated successfullly!!!');window.location='powertoolview.php';</script>";
    }
    else{
    move_uploaded_file($_FILES['image']['tmp_name'],$loc.$img);
    $sql=mysqli_query($con,"UPDATE tblpowertool SET powertoolname='$productname',powerdescription='$productdescription',powertoolcategory='$productcategory',powertoolprice='$productprice',tool_stock='$stock',powertoolimage='$img', WHERE powertoolid='$powertoolid'");
    echo "<script>alert('Powertool updated successfullly!!!');window.location='powertoolview.php';</script>";
  }
}
include("footer.php");
?>