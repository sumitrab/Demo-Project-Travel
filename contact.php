<?php include "includes/connection.php";?>
<?php

if (isset($_POST) && !empty($_POST)){

	//print_r($_POST);	
	
	$sql = "INSERT INTO contactus SET name = '".$_POST['full_name']."',
									  email='".$_POST['email']."',
									  mobile ='".$_POST['mobile']."',
									  comments='".$_POST['comment']."'";
	if(mysqli_query($conn,$sql)){
		$success_msg = "Thanks for your query.";
	}else{
		$failur_msg = "Please submit your query properly.";
	}
	
}
?>
<?php include "header.php";?>

<?php include "topnav.php";?>


<!-- Jumbotrone-->
	<div class="jumbotron">
	  <h1>Contact Us</h1>
	  <p>We'd love to hear from you, please drop us a line if you've any query.</p>
	   <img src="images/contactus.jpg" class="img-fluid w-100">
	</div>
<!-- Jumbotrone---->
<section class="my-5">
	<div class="text-center">
		<h3>Contact us</h3>
	</div>
	<div class="text-center text-primary">
		<h3><?php if(isset($success_msg) && !empty($success_msg)){echo $success_msg;}?></h3>
	</div>
	<div class="w-50 m-auto">
		 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		  <div class="form-group">
			<label for="uname">Full Name:</label>
			<input type="text" class="form-control" id="full_name" placeholder="Enter your name" name="full_name" required>
		  </div>
		  <div class="form-group">
			<label for="uname">Email:</label>
			<input type="text" class="form-control" id="email" placeholder="Enter email address" name="email" required>
		  </div>
		  <div class="form-group">
			<label for="uname">Mobile No:</label>
			<input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile" required>
		  </div>
		  <div class="form-group">
			<label for="uname">Comment:</label>
			<textarea class="form-control" id="comment" name="comment" placeholder="Write your comment" required></textarea>
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</form> 
	</div>
</section>

<?php include "footer.php";?>