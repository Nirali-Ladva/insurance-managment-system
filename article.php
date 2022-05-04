<?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.but{
	
	background-color:#47cf73;
	border-radius:5px;
	margin-left:2.3em;
	margin-top:20px;
	margin-right:65em;
	padding:2px 20px 2px 20px;
}

</style>
</head>


<?php include("title.php"); ?>
<body>
<?php include("header.php"); ?>

	<div class="team">
	<div class="container"> 
		<div class="row" >
		
		<?php 
				$name=$_GET['name'];
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				$result=Mysql_query("select * from article where cat_id=$name",$link);
				$rows=Mysql_fetch_row($result);
				
				while($rows)
				{?>
		<div class=" col-md-12">	
		<div class=" col-md-3">
			<img src="article/<?php echo $rows[3]; ?>"style="width:120%; height:200px; margin-top:20px;" /><br> </br>
		</div>
		<div class=" col-md-9">
			<div style="color:#09347a; font-family:Algerian; font-size:20px; margin-left:10%;margin-top:20px; "> <?php echo $rows[2]; ?> 
			<br></br>
			</div>	
		
			<div style="font-family:Adobe Gothic Std B; color-black; font-size:20px; margin-left:10%;"><?php echo substr($rows[4],0,200);?>.....</div>
			<div style="margin-left:10%; margin-top:10px;">
			<a href="single_art.php?art_id=<?php echo $rows[0]; ?>">Read More..</a>
		</div>	
		<!--<form action="single_art.php" method="GET">
		<div style="margin-left:33%;">
			<input type="submit" name="submit" value="read more...">
			</form>-->
			
		</div>	
		
		<br> </br>
			
		

				<?php
				
				$rows=mysql_fetch_row($result);
					}
				?>
		
				
				</div>
			</div>
		</div>
	</div>	
<!-- //courses -->

<!-- bootstrap-pop-up -->

	<?php include("comment.php"); ?>	
<!-- //bootstrap-pop-up -->
<!-- footer -->
<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>