<?php

include("conn.php");


$name=$_GET['id'];
$result1=mysql_query("select * from city where id=$id",$conn);
$row=mysql_fetch_rows($result1);
while($rows)
{
	
	echo "<th> <tr>"
}
$sql = "update city set name='$name' where id=$id";

$result=mysql_query($sql,$conn);
if ($result==TRUE)
	header("location:city.php");

?>
