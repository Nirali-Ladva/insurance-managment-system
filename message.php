<?php
 session_start();
	$uid=$_SESSION['uid'];
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
	<div class="team">
	<div class="container"> 
		<div class="row" >
		
		<table>
		<tr>
			<th style="font-size:20px; color:#47cf73; padding:10px; ">policy Name</th>
			<th style="font-size:20px; color:#47cf73; padding:10px; ">status</th>
		</tr>
		<tr>
		
		<?php
		include("conn.php");
		
		$sql="select * from health_form where status != 'pandding' AND u_id=$uid";
		$result=mysql_query($sql,$conn);
		$no=Mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		
			if($no > 0)
			{ ?>
				
				<td><h4 style="padding:10px;"><?php echo $row['healthplan']; ?></h4></td>
				<td><h4 style="padding:10px;"><?php echo $row['status'].'d'; ?></h4></td>
			<?php }
			
			?>
		
			</tr>
			<tr>
			
			<?php
		
		
		$sql1="select * from travel_form where status!='pandding' AND u_id=$uid";
		$result1=mysql_query($sql1,$conn);
		$no1=Mysql_num_rows($result1);
		$row1=mysql_fetch_array($result1);
		
			if($no1 > 0)
			{ ?>
			  <td><h4 style="padding:10px;">Your <?php echo $row1['travelplan'].' plan'; ?> is </h4></td>
			  <td><h4 style="padding:10px;"><?php echo $row1['status'].'d'; ?> </h4></td>
			
			<?php }
			?>
			</tr>
			<tr>
		
			<?php	
		
		$sql2="select * from vehicle_form where status!='pandding' AND u_id=$uid";
		$result2=mysql_query($sql2,$conn);
		$no2=Mysql_num_rows($result2);
		$row2=mysql_fetch_array($result2);
		
			if($no2 > 0)
			{?>
			  <td><h4 style="padding:10px;">Your <?php echo $row2['vehicleplan']; ?> is </h4></td>
			  <td><h4 style="padding:10px;"><?php echo $row2['status'].'d'; ?> </h4></td>
			
			<?php }
			
			?>
			
			</tr>
			
			</table>
		</div>
	</div>
	</div>
			
			<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>