 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to Admin Panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<!-- Navigation Bar starts -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="text-white">Welcome to Admin Panel</li>
  </ul>
</nav>
<!-- Navigation Bar Ends -->
</header>
<!-- Admin Login section -->
	<section class="my-5 ">
		<div class="row">
			<div class="w-50 m-auto">
			<form action="<?php echo $_SERVER['PHP_SELF'];?>" class="was-validated">
			  <div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" class="form-control" placeholder="Enter email" id="email">
			  </div>
			  <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" class="form-control" placeholder="Enter password" id="pwd">
			  </div>
			  <div class="form-group form-check">
				<label class="form-check-label">
				  <input class="form-check-input" type="checkbox"> Remember me
				</label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form> 
			</div>
		</div>
	</section>
<!-- Admin login section end-->


</body>
</html> 