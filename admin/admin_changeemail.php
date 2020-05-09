<?php include "admin_header.php";?>

<!-- Admin Login section -->

	<div>
		<div class="row py-5 m-2">
			<!-- Sidebar start -->
			<?php include "admin_sidebar.php";?>
			<!-- Sidebar end -->
			<div class="col-lg-9 col-md-9 col-12">
			<div class="m-auto w-50">
			 <form action="/action_page.php" class="was-validated">
				  <div class="form-group">
					<label for="uname">Old Password:</label>
					<input type="text" class="form-control" id="old_password" placeholder="Enter old password" name="old_password" required>
					
				  </div>
				  <div class="form-group">
					<label for="pwd">New Password:</label>
					<input type="password" class="form-control" id="old_pwd" placeholder="Enter password" name="old_pwd" required>
					
				  </div>
				 <div class="form-group">
					<label for="pwd">New Password:</label>
					<input type="password" class="form-control" id="confirm_pwd" placeholder="Enter password" name="confirm_pwd" required>
					
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
			</form> 
			
			</div>
		</div>
	</div>
<!-- Admin login section end-->

<?php include "admin_footer.php";?>