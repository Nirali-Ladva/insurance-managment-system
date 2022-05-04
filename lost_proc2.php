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
				

<?php
	
		include("conn.php");
			
				
				$email=$_POST['email2'];
				$ans=$_POST['ans'];

				$query="select * from user where email='$email' AND security_ans='$ans'";
				$result1=mysql_query($query,$conn);
				$row1=mysql_fetch_array($result1);

				if($row1>0)
				{
								
?>
			
				<div class="signin-form profile">
				<h3 class="agileinfo_sign">Forgot Password</h3>	
				<div class="login-form">
					<form action="lost_proc3.php" method="POST">
					<input type="text" value=<?php echo $email; ?> disabled>
					<input type="hidden"  name="email" value=<?php echo $email; ?>>
					
					<input type="text" placeholder="enter new password" name="password" >
								
								<input style="margin-right:7%;" type="submit" value="Sign In" name="submit">
							</form>
						</div>
						
					</div>
				</div> 
<?php 			}
				else
					echo "<h3>your answer is wrong</h3>";
				
?>			
<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>
