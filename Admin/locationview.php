<?php
include("header.php");
include("config.php");
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0"><br><br>
                <div class="welcome-text">
                    <p class="mb-0">Choose district</p>
                </div><br>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
            <form action="" method="POST">
                <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <!-- <h4>Hi, welcome back</h4>
                        <p class="mb-0">Your business dashboard template</p> -->
                        <?php
                        $sql = mysqli_query($con, "select * from tbldistrict");
                        ?>
                        <select name="drpdistrict" id="drpdistrict" class="form-control" onchange="this.form.submit()" style="width:500px;">
                            <option value="0">---Select---</option>
                            <?php
                            while ($row = mysqli_fetch_array($sql)) {
                            ?>
                                <option value="<?php echo $row['districtid'] ?>"><?php echo $row['districtname']; ?> </option>
                            <?php
                            }

                            
                            ?>
                        </select>
                    </div><br><br>
                    <!-- <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left:63%;margin-bottom:2%"> -->
                </div>
            </form>
            <?php
            if (isset($_POST["drpdistrict"])) {
               $district = $_POST["drpdistrict"];
               // $todate=$_POST["todate"]; 
               $_SESSION['district'] = $district;
               // $_SESSION['tdate']=$todate;
               $s = 1;
            ?>
            <script>document.getElementById('drpdistrict').value=<?php echo $district ?></script>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Locations</h4>
                            <a href="locationreg.php"><button type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                            </span>Add</button></a>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody id="location">
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM tbllocation WHERE districtid='$district'");
                                    while ($display = mysqli_fetch_array($sql)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $s++ ?></td>
                                        <td><?php echo $display["locationname"]; ?></td>
                                        <td><a class="btn btn-primary" href="editlocation.php?locationid=<?php echo $display["locationid"]; ?>">Edit</a></td>
                                        <td><a class="btn btn-danger" href="deletelocation.php?locationid=<?php echo $display["locationid"]; ?>">Delete</a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <?php
    }
    ?>
</div>

<?php
include("footer.php");
?>