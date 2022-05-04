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
<!-- //banner 	
 <div class="banner1">
	    <div class="wthree_banner1_info">
				<h3><span>P</span>olicy</h3>
		</div>
    </div>-->
<!-- courses -->
	<div class="team">
	<div class="container"> 
		<div class="row" >
		
		
			

		<?php 
				
				$art_id=$_GET['art_id'];
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				$result=Mysql_query("select * from article where art_id=$art_id",$link);
				
				$row=mysql_fetch_row($result);
				
			
			
			?> 
			<center>
					<div style="color:#09347a; font-family:Algerian; font-size:38px; margin-left:30px; margin-right:30px; "> <?php echo $row[2]; ?> 
					 <br></br>
					</div>			
			</center>
					
				
		<div class="col-md-12">		
		<div class="col-md-10">
			<img src="article/<?php echo $row[3]; ?>" style="width:450px; height:350px; float:left; margin-right:20px;" />
			
				<div style="font-family:Adobe Gothic Std B; color-black; font-size:20px; "><?php echo $row[4] ?></div>
				<br> </br>
				
				</div>
				<div class="col-md-2">
					<img style="width:300px; height:600px; " src="images/ad/topshop2.gif " />
	
				</div>
				</div>
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