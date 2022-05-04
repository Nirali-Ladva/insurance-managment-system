<?php
	session_start();
		$link=Mysql_connect("localhost","root","");
		Mysql_select_db("insurance",$link);
		if(isset($_POST['submit']))
		{
		
			$email=$_POST['email'];
			$password=$_POST['password'];
			
			$result=Mysql_query("select * from user where email='$email' AND password='$password'",$link);
			
			$rows=Mysql_num_rows($result);
			$row2 = mysql_fetch_array($result);
			if($rows>0)
			{
				$_SESSION['uid']=$row2[0];
					
				header("location:index.php");
				
			}
			else
			{
				header("location:login.php");
			}
			
		}
		else
		{
			header("location:login.php");
		}
				
		

?>