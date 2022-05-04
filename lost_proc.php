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
		
<?php
						$link=Mysql_connect("localhost","root","");
						Mysql_select_db("insurance",$link);
						
							$email=$_POST['email'];
						
							$query="select *  from user where email='$email'";
							$result=mysql_query($query,$link);
							$row=mysql_fetch_array($result);
							if($row>0)
							{
							
?>
		<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<div class="signin-form profile">
				<h3 class="agileinfo_sign">Forgot Password</h3>	
				<div class="login-form">
					<form action="lost_proc2.php" method="POST">
					
					<input type="text" name="email" value="<?php echo $email; ?>" >
					<input type="hidden" name="email2" value="<?php echo $email; ?>" >
					<input type="text" value="<?php echo $row['security_quetion']; ?>" disabled>
					
					<input type="text" name="ans" placeholder="enter answer" name="ans" required="">
								
								<input style="margin-right:7%;" type="submit" value="Sign In" name="submit">
							</form>
						</div>
						
					</div>
			</div>
			
<?php
 } 
 else
 { ?>
<!--p style="margin-left:30%; margin-top:5px; color:#fd5f09; font-size:20px; ">sign up first..</p-->
	 
	 <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<div class="signin-form profile">
				<h3 class="agileinfo_sign">Forgot Password</h3>	
						<div class="login-form">
							<form action="lost_proc.php" method="POST">
								<input type="email" name="email" placeholder="Enter Your Email" required="">
								
								<div class="tp">
									<input type="submit" value="Submit" name="submit">
								</div>
							</form>
						</div>
						
						
					</div>
			</div>
			
<?php
 }


?>
			
<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>
