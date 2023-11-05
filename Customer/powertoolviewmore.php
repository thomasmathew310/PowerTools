<?php

include("header.php");
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <style>
.ufe-btn, .ufe-btnd {
   background: rgb(255 76 76);
    padding: 8px 10px;
    border-radius: 4px;
    box-shadow: 0 2px 0 rgb(255 255 255);
    font-size: 15px;
    border: none;
    transition: all .2s ease-in;
    outline: none;
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: inherit !important;
    color: #fff;
    position: relative;
    width: 50%;
    height: 40px;
}
.ufe-5f6daca830f2baadc5d05ca2 * {
    font-family: inherit !important;
}
.ufe-core *, .ufe-core input {
    padding: 0;
    box-sizing: border-box;
    max-width: 100%;
}
.ufe-btnd img.ufe-ico, .ufe-btn img.ufe-ico {
    width: 20px;
    height: 20px;
    margin-right: 5px;
    transition: all .3s ease;
}</style>

  <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Power Tool</strong></div>
        </div>
      </div>
    </div>  
    <?php
    include("config.php");
    $toolid=$_GET['toolid'];
    $_SESSION['powertoolid']=$toolid;
    $sql = mysqli_query($con, "SELECT * FROM tblpowertool p inner join tblpowertoolcategory c on p.powertoolcategory=c.categoryid where p.powertoolid='$toolid'");
    // echo "SELECT * FROM tblpowertool where powertoolid='$toolid'";
    $display=mysqli_fetch_array($sql);
    $_SESSION['toolcategory']=$display['categoryid'];
    $_SESSION['powertoolid']=$display['powertoolid'];

    ?>
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="../Admin/images/<?php echo $display['powertoolimage'] ?>" width="500" height="500">
          </div>
          <form action="bookaction.php" method="post">
          <div class="col-md-6" id="rentamount">
            <h2 class="text-black"><?php echo $display['powertoolname'] ?></h2>
            <p><b>About : </b><?php echo $display['powertooldescription'] ?></p>
            <p><b>Tool Category : </b><?php echo $display['categoryname'] ?></p>
            <p><b>Rent amount :</b><strong class="text-primary h4"><?php echo $display['powertoolprice'] ?>.00 /-</strong></p>
            <div class="mb-2 d-flex">
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <label for="">From date : </label>
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="date" id="option-sm" id="fdate" min="<?php echo date('Y-m-d'); ?>" class="form-control" name="fdate"></span><br>
                <input type="hidden" name="r_amount" value="<?php echo $display['powertoolprice'] ?>">
              </label>
              <label for="option-md" class="d-flex mr-3 mb-3">
              <label for="">To date : </label>
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="date" id="option-md" class="form-control" placeholder="" min="<?php echo date('Y-m-d'); ?>" id="todate" name="todate"></span>
              </label>
             
            </div>
            <div class="mb-1 d-flex">
            
              <label for="option-sm" class="d-flex mr-3 mb-3">
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <textarea name="desc" id="" cols="40" class="form-control" rows="-5" placeholder="Something here..."></textarea><br>
              </label>
              
            </div>
            <div class="mb-5">
              <div class="input-group mb-3" style="max-width: 120px;">
             
                <span class="d-inline-block mr-2" style="top:-2px; position: relative;">
                <input type="text" id="option-md" class="form-control" placeholder="Quantity" id="txt_qnty" name="txt_qnty"></span>
              
             
            </div>

            </div>
            <!-- <p><a href="" class="buy-now btn btn-sm btn-primary">Confirm Booking</a></p> -->
            <p><input type="submit" value="Confirm Booking" class="buy-now btn btn-sm btn-primary"></p>
          </div>
          </form>
         
          <div class="card-body">
          <div class="row">
    				      <div class="col-sm-6">
    					<h3 class="text-warning mt-6 mb-6">
    						<!-- <b><span id="average_rating">0.0</span> / 5</b> -->
    					
    					
    						<!-- <i class=" text-warning fas fa-star star-light mr-1 main_star" style="font-size:21px";></i> -->
                            <!-- <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i> -->
                            </h3>

                            </div>
    					<!-- <h3><span id="total_review">0</span> Review</h3> -->
          </div>

        </div>
        <!-- <h5 style="color:black; ">
        <input type="number" name="txtqty" id="txtqty" value=""  class="form-control" style="width: 180px;" autofocus onchange="funcation1()" required/> -->
        </h5><br><hr>
        <div class="row">
      	<!-- <div class="col-md-3" ><h2 style="color:black;  margin-bottom:8%">Total </h2></div> -->
       
        <!-- <div class="col-md-3" style="margin-left:200px" ><input type="text" name="totamt" id="totamt" value="" readonly  class="form-control" style="width:208px;" autofocus required><br></label> -->
        </div></div>
     		
   
   			<!-- <input type="hidden" value=" <?php echo $display['amount']?>"  name="fur_amount" id="txtprice" class="form-control" /> -->
		    <!-- <input type="hidden" value=" <?php echo $display['stock']?>"  name="txtstock" id="txtstock" class="form-control"/> -->
            <input type="hidden" value=" <?php echo $display['powertoolid']?>"  name="powertoolid" id="powertoolid" class="form-control"/>

            </b></p>
            
    
  				<div class="row">
                <div class="col-md-6">
                <!-- <input type="submit" class="btn button-style" name="btn_addcart" value="Add to cart " style="height:40px;width:575px;"/> 
                 <!-- <img class="ufe-ico" src="https://ufe.helixo.co/scripts/olBvhB2.svg" style=" width: 28%;height:28%"> -->
                </div>
                </div>
                <!-- <div class="col-sm-12">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>

                <div class="mt-5" id="review_content"></div>
                
          <?php /*?><a href='booking.php?fur_id=<?php echo $display["powertoolid"]?>'<?php */?>
    
  </div>  
  </div>

  </div>
        </div>
      </div>
    </div>
    
    <br><br><br><br><br><br><br> -->
    <script>
load_rating_data();

function load_rating_data()
{
    $.ajax({
        url:"ratingaction.php",
        method:"POST",
        data:{action:'load_data'},
        dataType:"JSON",
        success:function(data)
        {
            $('#average_rating').text(data.average_rating);
            $('#total_review').text(data.total_review);
            console.log(data.total_review);
            var count_star = 0;

            $('.main_star').each(function(){
                count_star++;
                if(Math.ceil(data.average_rating) >= count_star)
                {
                    $(this).addClass('text-warning');
                    $(this).addClass('star-light');
                }
            });

            $('#total_five_star_review').text(data.five_star_review);

            $('#total_four_star_review').text(data.four_star_review);

            $('#total_three_star_review').text(data.three_star_review);

            $('#total_two_star_review').text(data.two_star_review);

            $('#total_one_star_review').text(data.one_star_review);

            $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

            $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

            $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

            $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

            $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

            if(data.review_data.length > 0)
            {
                var html = '';

                for(var count = 0; count < data.review_data.length; count++)
                {
                    html += '<div class="row mb-3">';

                    html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                    html += '<div class="col-sm-11">';

                    html += '<div class="card">';

                    html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                    html += '<div class="card-body">';

                    for(var star = 1; star <= 5; star++)
                    {
                        var class_name = '';

                        if(data.review_data[count].rating >= star)
                        {
                            class_name = 'text-warning';
                        }
                        else
                        {
                            class_name = 'star-light';
                        }

                        html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                    }

                    html += '<br />';

                    html += data.review_data[count].user_review;

                    html += '</div>';

                    html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                    html += '</div>';

                    html += '</div>';

                    html += '</div>';
                }

                $('#review_content').html(html);
            }
        }
    })
}

</script>
    <script>
	function getrentamount()
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