<?php
 session_start(); 
 ?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<style>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/bootstrap.css" />
</style>
</head>

<body>
<!-- banner -->
<?php include("title.php"); ?>
<?php include("header.php"); ?>
		<!-- Modal content-->
		<!--<div class="modal-content">-->
			<div class="modal-header">
				
				<div class="signin-form profile">
				<h3 class="agileinfo_sign">Sign Up</h3>	
						<div class="login-form">
						
							<form action="sign_up.php" method="POST">
							   <input type="text" name="first_name" placeholder="firstname" required="">
								<input type="text" name="last_name" placeholder="last name" required="">
								<input type="text" name="mob_no" placeholder="mobile no." required="">
								<input type="text" name="city" placeholder="city" required="">
								<input type="text" name="state" placeholder="state" required="">
								<input type="text" name="address" placeholder="address" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" name="password" placeholder="Password" required="">
								
	
								<input type="radio" name="gender" value="male" placeholder="gender" required=""> male
								
								<input type="radio" name="gender" value="female"placeholder="gender" required=""> female
								<br></br>
								
								  <label class="control-label" style="font-size:14px; color:#212121;">Security Question</label>
								  
								  <div class="controls">
								  	<select name="security_quetion" style="width:550px; height:40px; color:#212121;">
									<option value="Father Name">Father Name</option>
									<option value="Mother Name">Mother Name</option>
									<option value="Brother Name">Brother Name</option>
                					</select>
								  </div>
								
								<input type="text" name="ans" placeholder="Answer">
								
								<input style="margin-right:7%;" type="submit" value="Sign Up" name="submit">
							</form>
						</div>
						<p><a href="#"> </a></p>
					

	</div>
</div>

<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>