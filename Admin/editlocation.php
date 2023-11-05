<?php
    include("header.php");
    ?>
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <span class="ml-1">Element</span>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                        </ol>
                    </div>
                </div>
            <div class="card" style="color: blue;">
                <div class="card-header">
                    <h4 class="card-title">Edit Location</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                            <?php
                            include("config.php");
                            if(isset($_GET["locationid"]))
                            {
                            $lid=$_GET["locationid"];
                            
                            $sql=mysqli_query($con,"SELECT * from tbllocation WHERE locationid='$lid'");
                            $display=mysqli_fetch_array($sql);
                            }
                            ?>
                            <form action="" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Location</label>
                                    <input type="text" class="form-control"  name="location" value="<?php echo $display['locationname'];?>">
                                </div><br>
                               
                                <div class="form-group col-md-6">
                               
                            </div>
                            <div class="form-group">
                                <div class="form-check">

                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            <button type="submit" class="btn btn-danger">cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if (isset($_POST["submit"]))
{
	
	$lname=$_POST["location"];
	$sql=mysqli_query($con,"UPDATE tbllocation SET location_name='$lname' WHERE locationid='$lid'");
	if($sql)
	{
		echo "<script>alert('Location updated sucsessfully!!!');window.location='locationview.php';</script>";
	}
}
include("footer.php");
?>