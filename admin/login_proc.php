<?php
		include("conn.php");
		$email=$_POST['email'];
		$password=$_POST['password'];

		
		$result=Mysql_query("select * from admin_login where email='$email' AND password='$password'",$conn);
		
		$rows=Mysql_num_rows($result);
		//echo $rows;
		if($rows>0)
		{
			session_start();
			$_SESSION["login"] = "yes";
			header("location:index.php");
			
		}
		else
		{
		header("location:login.php");
				
		}

											

?>