<?php include "includes/connection.php";?>
<?php

if (isset($_POST) && !empty($_POST)){

	//print_r($_POST);	
	
	$sql = "INSERT INTO users SET name = '".$_POST['full_name']."',
									  email='".$_POST['email']."',
									  mobile ='".$_POST['mobile']."',
									  username='".$_POST['username']."',
									  password='".md5($_POST['password'])."',
									  time ='".time()."'";
	
	if(mysqli_query($conn,$sql)){
		$success_msg = "Thanks for registration.";
	}else{
		$failur_msg = "Please fill all the fields.";
	}
	
}
?>
<?php include "header.php";?>

<?php include "topnav.php";?>

<!-- Jumbotrone-->
	<div class="jumbotron">
	  <h1>Register Here</h1>
	  <p>Register into our website.</p>
	</div>
<!-- Jumbotrone---->
<section class="my-5">

		<div class="text-center">
			<h3>Register yourself!</h3>
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
			<label for="uname">Username:</label>
			<input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
		  </div>
		  <div class="form-group">
			<label for="uname">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
		  </div>
		  <button type="submit" class="btn btn-success">Register</button>
		  </form>
		</div>
		
</section>
<?php include "footer.php";?>
