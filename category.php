<?php
 session_start(); 
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
.box{
    background-color:#fff;
      min-height:200px;
     box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0   rgba(0,0,0,.12);
     border-radius: 2px;
}
</style>
</head>
<!-- banner -->
<?php include("title.php"); ?>
<body>
<?php include("header.php"); ?>

<!-- //banner -->	
<!-- /banner -->	
    <div class="banner1">
	    <div class="wthree_banner1_info">
				<h3><span>C</span>ategory</h3>
		</div>
    </div>
<!-- //banner -->	
<!-- courses -->
	<div class="team">
	<div class="container"> 
		<div class="row" >
		

				
		
			<div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading">Health insurance</div>
							<div class="panel-body"><a href="policy.php?name=1"><img src="images/Health1.jpg " style="width:100%;" />  </img></a></div>
							<!--<div class="panel-footer">A root canal is a treatment to repair and save a badly damaged or infected tooth.</div>-->
						</div>
					</div>
			</div>
			
			<div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading">Vehical insurance</div>
							<div class="panel-body"><a href="policy.php?name=2"><img src="images/vehical.jpg " style="width:100%;" />  </img></a></div>
							<!--<div class="panel-footer">A root canal is a treatment to repair and save a badly damaged or infected tooth.</div>-->
						</div>
					</div>
			</div>
			
			<div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading">Travel insurance</div>
							<div class="panel-body"><a href="policy.php?name=3"><img src="images/travel.jpg " style="width:100%;" />  </img></a></div>
							<!--<div class="panel-footer">A root canal is a treatment to repair and save a badly damaged or infected tooth.</div>-->
						</div>
					</div>
			</div>
			
			
			
			
			
			
			
			
		</div>
	</div>
</div>
	
<!-- //courses -->

<!-- bootstrap-pop-up -->
	<!--<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
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
<!--
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
	</div>-->
<!-- //bootstrap-pop-up -->
<!-- testimonials -->
		<div class="testimonials">
		<div class="container">
	      <h3 class="w3l_header w3_agileits_header">Our <span>Clients</span></h3>
		 
			<div class="w3ls_testimonials_grids">
				 <section class="center slider">
				 <?php
				 include("conn.php");
				 $result=Mysql_query("select * from comment");
				$rows=Mysql_fetch_row($result);
			
				while($rows)
				{
				 ?>
						<div class="agileits_testimonial_grid">
							<div class="w3l_testimonial_grid">
								<p><?php echo $rows[2]; ?></p>
								
								<?php 
									$result2=Mysql_query("select * from user where u_id=$rows[1]");
									$rows2=Mysql_fetch_row($result2); ?>
								<h4><?php echo $rows2[1]; ?></h4>
								<h5>Client</h5>
								<div class="w3l_testimonial_grid_pos">
									<!--img src="images/1.png" alt=" " class="img-responsive" / -->
								</div>
							</div>
						</div>
						
				<?php 
					$rows=Mysql_fetch_row($result);
				}	
					?>	
				</section>
			</div>
		</div>
	
<!-- //testimonials -->
		<div class="container">
	     <!-- <h3 class="w3l_header w3_agileits_header">Our <span>Clients</span></h3>-->
		 
			<div class="w3ls_testimonials_grids">
				
				
<?php  
if(isset($_SESSION['uid']))	
{
	$u_id=$_SESSION['uid'];
	
	?>
				<div class="col-md-12" >
				<h3 style="color:#09347a; font-size:20px; padding:10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Your Review..</h3>
					<form action="comment_proc.php" method="POST" >
					 <input type="hidden" name="id">
					 <input type="hidden" name="u_id">
					 <input type="hidden" name="filename" value="category.php">
					
					<textarea name="cmt" rows="5"  style="width:500px; border-radius:5px; background-color:#f5f5f5; margin-top:10px;" placeholder="Type your review....."></textarea>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success" name="comt">submit</button>
					</div>
					</form>
			
				</div>
				
<?php  }?>	
				
			</div>
		</div>
	</div>
<!-- footer -->
<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>