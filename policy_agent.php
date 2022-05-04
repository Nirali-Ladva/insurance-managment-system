<?php
 session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.box{
    background-color:#fff;
      min-height:200px;
     box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0   rgba(0,0,0,.12);
     border-radius: 2px;
}
</style>
</head>


<?php include("title.php"); ?>
<body>
<?php include("header.php"); ?>
<!-- //banner -->	
<!-- courses -->
	<div class="team">
	<div class="container"> 
		<div class="row" >
					<?php
					include("conn.php");
					
					$id=$_GET['id'];
					
					$sql="select * from agent where agent_id=$id" ;
					$result=mysql_query($sql,$conn);
					
					?>
					<div class="col-md-12"> 
					<?php
					while($row=mysql_fetch_row($result))
					{?>
				
					<div class="col-md-3">
					<img src="images/<?php echo $row[3]; ?> " style=" height:215px; width:85%; margin-left:45px;"><br> </br>
					</div>
					
					<div class="col-md-9 mrgin">				
					<p><span style="color:#47cf73; font-family:Adobe Gothic Std B; font-size:23px; "> Name:</span><span style="font-family:Adobe Gothic Std B; font-size:20px;"> <?php echo $row[1]; ?> </span></p>
					
					 <p><span style="color:#47cf73; font-family:Adobe Gothic Std B; font-size:23px; "> Email id:</span><span style="font-family:Adobe Gothic Std B; font-size:20px;"> <?php echo $row[4]; ?></span></p>
					
					<p><span style="color:#47cf73; font-family:Adobe Gothic Std B; font-size:23px; ">Contact no:</span><span style="font-family:Adobe Gothic Std B; font-size:20px;"><?php echo $row[6]; ?></span></p>
					
					<p><span style="color:#47cf73; font-family:Adobe Gothic Std B; font-size:23px; ">Address:</span><span style="font-family:Adobe Gothic Std B; font-size:20px;"><?php echo $row[7]; ?></span></p>
					
					</div>
					<?php
					}						
					?>	
					</div>					
		</div>
	</div>
	</div>
	<div class="team">
	<div class="container"> 
		<div class="row" >
		
		<?php 
				
				$agent_id=$_GET['id'];
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				$result=Mysql_query("select * from agent_policy where agent_id=$agent_id ",$link);
				$row=Mysql_fetch_row($result);
				
				while($row)
				{
				
					$result2=Mysql_query("select * from policy_info where policy_id=$row[2] ",$link);
					$row2=Mysql_fetch_row($result2);
				
			?>
				<div class="col-xs-4 margin1">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $row2[2]; ?></div>
							<div class="panel-body"><a href="policy_info.php?name=<?php echo $row2[0]; ?>"><img src="images/<?php echo $row2[4]; ?> " style="width:100%;" /> </a>
				<h3>  </h3></div>
							<div class="panel-footer"><?php echo substr($row2[3],0,70); ?>...</div>
						</div>
					</div>
				</div>
			
			<?php
				$row=Mysql_fetch_row($result);
				}
				?>
			
		</div>
	</div>
</div>
	
<!-- //courses -->

<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="agileinfo_sign">Matrix</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/banner1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<div class="signin-form profile">
				  <h3 class="agileinfo_sign">Matrix</h3>	
					<div class="modal-body">
						<img src="images/g1.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur.</i></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- testimonials -->
<!-- //testimonials -->
<!-- footer -->
<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>