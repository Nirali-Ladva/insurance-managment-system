<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<?php include("title.php"); ?>
<?php include("header.php"); ?>



<!-- //banner -->	
<!-- /banner -->	
    <div class="banner1">
	    <div class="wthree_banner1_info">
				<h3><span>P</span>olicy agent</h3>
		</div>
    </div>
<!-- //banner -->	
<!-- courses -->
	<div class="team">
		<div class="container">
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<h3 class="w3l_header w3_agileits_header">Matrix <span>Offered</span></h3>
					
		            
					
				<?php 
				
				$agent_id=$_GET['id'];
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				$result=Mysql_query("select * from travel_insurance where Agent_id=$agent_id",$link);
				$rows=Mysql_fetch_row($result);
				
				while($rows)
				{
				?>
		
			<div class="col-xs-4">
				<a href="policy_agent.php?id=<?php echo $rows[2]; ?>"><img src="images/<?php echo $rows[4]; ?> " style="width:100%;" /> </a>
				<h3> <?php echo $rows[2]; ?> </h3>
				
			</div>
			
			<?php
				$rows=Mysql_fetch_row($result);
				}
				?>
				
				<?php/*
				$result=Mysql_query("select * from property_insurance where Agent_id=$agent_id",$link);
				$rows=Mysql_fetch_row($result);
	
				while($rows)
				{
				?>
		
			<div class="col-xs-4">
				<a href="policy_agent.php?id=<?php echo $rows[2]; ?>"><img src="images/<?php echo $rows[4]; ?> " style="width:100%;" /> </a>
				<h3> <?php echo $rows[2]; ?> </h3>
				
			</div>
			
			<?php
				$rows=Mysql_fetch_row($result);
				}*/
				?>
				
				<?php
				$result=Mysql_query("select * from health_insurance where Agent_id=$agent_id",$link);
				$rows=Mysql_fetch_row($result);
				
				while($rows)
				{
				?>
		
			<div class="col-xs-4">
				<a href="policy_agent.php?id=<?php echo $rows[2]; ?>"><img src="images/<?php echo $rows[4]; ?> " style="width:100%;" /> </a>
				<h3> <?php echo $rows[2]; ?> </h3>
				
			</div>
			
			<?php
				$rows=Mysql_fetch_row($result);
				}
			
				?>
				<?php
				
				$result=Mysql_query("select * from travel_insurance where Agent_id=$agent_id",$link);
				$rows=Mysql_fetch_row($result);
				
				while($rows)
				{
				?>
		
			<div class="col-xs-4">
				<a href="policy_agent.php?id=<?php echo $rows[2]; ?>"><img src="images/<?php echo $rows[4]; ?> " style="width:100%;" /> </a>
				<h3> <?php echo $rows[2]; ?> </h3>
				
			</div>
			
			<?php
				$rows=Mysql_fetch_row($result);
				}
				?>
				
				
				</div>
			</div>
		</div>
	</div>
<!-- //courses -->
<!-- stats -->
	
<!-- //testimonials -->
<!-- footer -->



<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>

</html>