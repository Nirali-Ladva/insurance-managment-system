<?php
	session_start();
		include("conn.php");
		$email=$_POST['email'];
		$password=$_POST['password'];
		//$id=$_SESSION['id'];

		
		$result=Mysql_query("select * from agent where email='$email' AND password='$password'",$conn);
		
		$rows=Mysql_num_rows($result);
		//echo $rows;
		if($rows>0)
		{
			
			$row=mysql_fetch_row($result);
			$_SESSION['id']=$row[0];
			$_SESSION["login1"] = "yes";
			header("location:index.php");
			
		}
		else
		{
		header("location:login.php");
				
		}

											

?>