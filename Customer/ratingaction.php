<?php
$con=mysqli_connect("localhost","root","","dbpowertools");
session_start();
// if(isset($_POST["rating_data"]))
// {

// 	$data = array(
// 		':user_name'		=>	$_POST["user_name"],
// 		':user_rating'		=>	$_POST["rating_data"],
// 		':user_review'		=>	$_POST["user_review"],
// 		':datetime'			=>	time()
// 	);

// 	$query = "INSERT INTO review_table 
// 	(user_name, user_rating, user_review, datetime) 
// 	VALUES (:user_name, :user_rating, :user_review, :datetime)";

// 	$statement = $conn->prepare($query);

// 	$statement->execute($data);

// 	echo "Your Review & Rating Successfully Submitted";

// }
if(isset($_POST["rating_data"]))
{
	
	$user_name=$_POST["user_name"];
    // echo $user_name;
    $user_rating=$_POST["rating_data"];
    // echo $user_rating;
    $user_review=$_POST["user_review"];
    // echo $user_review;
    $date=date("y/m/d");

    $query = "INSERT INTO review_table(`user_name`,`user_rating`,`user_review`,`datetime`) VALUES ('$user_name','$user_rating','$user_review','$date')";
    // echo $query; exit;
    $res=mysqli_query($conn,$query);
    //   echo"<script>alert('Error!!');sql.mysqli_error($con);window.location='districtreg.php';</scrip>";
    
}
if(isset($_POST["action"]))
{
    $powertoolid=$_SESSION['powertoolid'];
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "
	SELECT * FROM tblrating WHERE powertoolid='$powertoolid'";

	$result = mysqli_query($con,$query);

	foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=>	$row["customer_name"],
			'user_review'	=>	$row["customer_review"],
			'rating'		=>	$row["customer_rating"],
			// 'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["customer_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["customer_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["customer_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["customer_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["customer_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["customer_rating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}
?>