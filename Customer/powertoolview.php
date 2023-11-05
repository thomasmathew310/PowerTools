<?php
include("header.php");
?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-9 order-2">
          <div class="row">
              <div class="col-md-12 mb-5">
                <div class="float-md-left mb-4"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <form action="" method="post">
                  <div class="dropdown mr-1 ml-md-auto">
                        <div class="welcome-text">
                          <!-- <h4>Hi, welcome back</h4>
                          <p class="mb-0">Your business dashboard template</p> -->
                          <?php
                          include('config.php');
                          $sql = mysqli_query($con, "select * from tblpowertoolcategory");
                          ?>
                          <select name="drpcategory" id="drpcategory" class="form-control" onchange="this.form.submit()" style="width:500px;margin-left: 75px;}">
                              <option value="0">---Select Category---</option>
                              <?php
                              while ($row = mysqli_fetch_array($sql)) {
                              ?>
                                  <option value="<?php echo $row['categoryid'] ?>"><?php echo $row['categoryname']; ?> </option>
                              <?php
                              }
                              ?>
                          </select>
                        </div>
                        </form>
                  </div>
                </div>
              </div>
            </div>
            <?php
            if (isset($_POST["drpcategory"])) {
                $category = $_POST["drpcategory"];
                $_SESSION['category'] = $category;
                $s = 1;
            ?>
                <script>
                    document.getElementById("drpcategory").value = "<?php echo $category; ?>";
                </script>
            <div class="row">
              <?php
                  include("config.php");
                  $sql = mysqli_query($con, "SELECT * FROM tblpowertool where powertoolcategory='$category' ");
                  while($display=mysqli_fetch_array($sql)) 
                  {
                  ?>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                 
                  <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="powertoolviewmore.php?toolid=<?php echo $display['powertoolid'] ?>"><img src="../Admin/images/<?php echo $display['powertoolimage'] ?>"height='100' width="100" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href=""><?php echo $display['powertoolname'] ?></a></h3>
                    <p class="mb-0"><?php echo $display['powertooldescription'] ?></p>
                    <p class="text-primary font-weight-bold"><?php echo $display['powertoolprice'] ?></p></a>
                  </div>

                </div>
                
                </div>
              <?php
                  }
                ?>
            </div>
            <?php
            }else{
            ?>
            <div class="row">
              <?php
                  include("config.php");
                  $sql = mysqli_query($con, "SELECT * FROM tblpowertool");
                  while($display=mysqli_fetch_array($sql)) 
                  {
                  ?>
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                 
                  <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="powertoolviewmore.php?toolid=<?php echo $display['powertoolid'] ?>"><img src="../Admin/images/<?php echo $display['powertoolimage'] ?>"height='100' width="100" alt="Image placeholder" class="img-fluid">
                  </figure>
                  <div class="block-4-text p-4">
                    <h3><a href=""><?php echo $display['powertoolname'] ?></a></h3>
                    <p class="mb-0"><?php echo $display['powertooldescription'] ?></p>
                    <p class="text-primary font-weight-bold"><?php echo $display['powertoolprice'] ?></p></a>
                  </div>

                </div>
                
                </div>
              <?php
                  }
                ?>
            </div>
            <?php
            }
            ?>

            </div>
          </div>
          
        </div>
      </div>
    </div>
<?php
      
  include("footer.php");
?>