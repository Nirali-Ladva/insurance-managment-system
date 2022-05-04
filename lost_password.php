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
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<div class="signin-form profile">
				<h3 class="agileinfo_sign">Forgot Password</h3>	
						<div class="login-form">
							<form action="lost_proc.php" method="POST">
								<input type="email" name="email" placeholder="Enter Your Email" required="">
								
								<input style="margin-right:7%;" type="submit" value="Sign In" name="submit">
							</form>
						</div>
						
						
					</div>
			</div>
			
<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>