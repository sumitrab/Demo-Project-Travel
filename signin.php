<?php include "header.php";?>

<?php include "topnav.php";?>

<!-- Jumbotrone-->
	<div class="jumbotron">
	  <h1>Sign In</h1>
	  <p>Login Here</p>
	</div>
<!-- Jumbotrone---->
<section style="height: 500px" class="my-5">

		<div class="text-center">
			<h3>Sign In</h3>
		</div>
		<div class="w-50 m-auto">
		 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
		  <div class="form-group">
			<label for="uname">Username:</label>
			<input type="text" class="form-control" id="username" placeholder="Enter your username" name="username" required>
		  </div>
		  <div class="form-group">
			<label for="uname">Password:</label>
			<input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
		  </form>
		</div>
		<div class="row text-center">
			<div class="col">
				<div><a href="#">Forgot Password<a></div>
				<div><a href="register.php">Register<a></div>
			<div>
		</div>
</section>
<?php include "footer.php";?>
