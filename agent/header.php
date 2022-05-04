<?php 
session_start();
include("conn.php");

if(!isset($_SESSION["login1"]))
{
	header("location:login.php");
} 
else
{ 

	$val=$_SESSION["login1"];
	if($val == "yes")
	{
?>
<div id="header">
  <h1><a href="dashboard.php">Matrix Agent</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    
       
  
	
    <li class=""><a title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Log-out</span></a></li>
	
  </ul>
</div>

<!--start-top-serch-->

	 <?php
	}
	else
	{
		header("location:login.php");
		
	}
}	
	?>