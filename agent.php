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
<!-- /banner -->	
    <div class="banner1">
	    <div class="wthree_banner1_info">
				<h3><span>P</span>olicy</h3>
		</div>
    </div>
<!-- //banner -->	
<!-- courses -->
	<div class="team">
	<div class="container"> 
		<div class="row" >
		
		<?php 
				
				$id=$_GET['id'];
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				
				
				$result=Mysql_query("select * from agent where cityid=$id",$link);
				$rows=Mysql_fetch_row($result);
				
				while($rows)
				{
				?>
				
				<div class="col-xs-3">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $rows[1]; ?></div>
							<div class="panel-body"><a href="policy_agent.php?id=<?php echo $rows[0]; ?>"><img src="images/<?php echo $rows[3]; ?> " style="width:100%;" />  </img></a></div>
						</div>
					</div>
				</div>
		
			
			
			<?php
				$rows=Mysql_fetch_row($result);
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
	<?php include("comment.php"); ?>
<!-- //testimonials -->
<!-- footer -->
<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>