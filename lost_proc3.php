
<?php
	session_start();
	
			$link=Mysql_connect("localhost","root","");
			Mysql_select_db("insurance",$link);
			
				
				$email=$_POST['email'];
				$password=$_POST['password'];
				
				$query="update user set password='$password' where email='$email' ";
				$result1=mysql_query($query,$link);
				
				if($result1)
					header("location:index.php");
				else
					echo "not succses";
								
?>