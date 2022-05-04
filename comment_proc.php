<?php
session_start(); 
	include("conn.php");
	$u_id=$_SESSION['uid'];
	$filename=$_POST['filename'];
	$cmt=$_POST['cmt'];
	
	
	$result=mysql_query("insert into comment values('',$u_id,'$cmt')",$conn);
if($result)
{
	header("location:$filename");
}
?>