<?php
include("header.php");
?>

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    
                    <!-- <p class="mb-0">Your business dashboard template</p> -->
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">category Details</h4>
                            <a href="categoryregistration.php"><button type="submit" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"> </i>
                                </span>Add </button></a>

                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">category</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>

                                    </tr>
                                </thead>
                                <?php
                                    include("config.php");
                                    $s = 1;
                                    $sql = mysqli_query($con, "SELECT * FROM tblpowertoolcategory");
                                    while($display=mysqli_fetch_array($sql)) 
                                    {
                                    ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $s++ ?></td>
                                        <td><?php echo $display['categoryname'] ?></td>
                                        <td><?php echo $display['categorydescription'] ?></td>
                                        <td><a href="categoryedit.php?categoryid=<?php echo $display['categoryid'];?>"><Button class="btn btn-primary">Edit</Button></a></td>
                                        <td><a href="categorydelete.php?categoryid=<?php echo $display['categoryid'];?>"><Button class="btn btn-danger">Delete</Button></a></td>
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
    </div>
</div>
</form>
</div>
</div>
</div>

<?php
include("footer.php");
?>