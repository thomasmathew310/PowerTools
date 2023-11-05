<?php
include("header.php");
include("config.php");
?>
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">

                    <!-- <p class="mb-0">Your business dashboard template</p> -->
                </div>
            </div>
            <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div> -->
            <br><br><br>
            <form action="" method="POST">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <!-- <h4>Hi, welcome back</h4>
                            <p class="mb-0">Your business dashboard template</p> -->
                            <?php
                            $sql = mysqli_query($con, "select * from tblpowertoolcategory");
                            ?>
                            <select name="drpcategory" id="drpcategory" class="form-control" onchange="this.form.submit()" style="width:500px;margin-left: 75px;
}">
                                <option value="0">---Select Category---</option>
                                <?php
                                while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                    <option value="<?php echo $row['categoryid'] ?>"><?php echo $row['categoryname']; ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div><br><br>
                        <!-- <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left:63%;margin-bottom:2%"> -->

                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST["drpcategory"])) {
                $category = $_POST["drpcategory"];
                $_SESSION['category'] = $category;
                $s = 1;
            ?>
                <script>
                    document.getElementById("drpcategory").value = "<?php echo $category; ?>";
                </script>
                <div class="row" style="margin-left: 63px;">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">powertool Details</h4>
                                <a href="powertoolregistration.php"><button type="submit" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"> </i>
                                        </span>Add </button></a>

                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Tool stock</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    include("config.php");
                                    $s = 1;
                                    $sql = mysqli_query($con, "SELECT * FROM tblpowertool where powertoolcategory='$category'");
                                    while ($display = mysqli_fetch_array($sql)) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $s++ ?></td>
                                                <td><img src="images/<?php echo $display['powertoolimage'] ?>" height='100' width="100"></td>
                                                <td><?php echo $display['powertoolname'] ?></td>
                                                <td><?php echo $display['powertooldescription'] ?></td>
                                                <td><?php echo $display['powertoolprice'] ?></td>
                                                <td><?php echo $display['tool_stock'] ?></td>
                                                <td><a href="editpowertool.php?powertoolid=<?php echo $display['powertoolid']; ?>"><Button class="btn btn-primary">Edit</Button></a></td>
                                                <td><a href="deletepowertool.php?powertoolid=<?php echo $display['powertoolid']; ?>"><Button class="btn btn-danger">Delete</Button></a></td>
                                            </tr>
                                        </tbody>
                                    <?php
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

<?php
include("footer.php");
?>