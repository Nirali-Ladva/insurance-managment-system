<?php
session_start();
		$link=Mysql_connect("localhost","root","");
		Mysql_select_db("insurance",$link);
		
		$first_name=$_POST['first_name'];
		$last_name=$_POST['last_name'];
		$mob_no=$_POST['mob_no'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$gender=$_POST['gender'];
		$security_quetion=$_POST['security_quetion'];
		$ans=$_POST['ans'];
		
		$result=Mysql_query("insert into user values(NULL,'$first_name','$last_name','$mob_no','$city','$state','$address','$email','$password','$gender','$security_quetion','$ans')",$link);
		header("location:index.php");

			
?>
