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
		<!--<div class="modal-content">-->
			<div class="modal-header">
				
				<div class="signin-form profile">
				<h3 class="agileinfo_sign">Sign In</h3>	
						<div class="login-form">
							<form action="sign_in.php" method="POST">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<input style="margin-right:7%;" type="submit" value="Sign In" name="submit">
								<!--center>
								<div class="tp">
									
								</div>
								</center-->
							</form>
						</div>
						<div class="login-social-grids">
							
						
						<p><a href="sign_upp.php"  data-target="#myModal3" > Don't have an account?</a></p>
						<p><a href="lost_password.php"  data-target="#myModal3" > Lost password?</a></p>
						
					</div>
			</div>

<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>