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
				<h3><span>A</span>rticle</h3>
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
							<div class="panel-body"><a href="article.php?name=1"><img src="article/index.jpg " style="width:100%;" />  </img></a>
							</div>
							</div>
					</div>
			</div>
			
			<div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading">Vehical insurance</div>
							<div class="panel-body"><a href="article.php?name=2"><img src="images/vehicle_art.jpg " style="width:100%;" />  </img></a></div>
							
						</div>
					</div>
			</div>
			
			<div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading">Travel insurance</div>
							<div class="panel-body"><a href="article.php?name=3"><img src="article/download.jpg " style="width:100%;" />  </img></a></div>
							
						</div>
					</div>
			</div>
			
		
			
		</div>
	</div>
</div>
	
<!-- //bootstrap-pop-up -->
<!-- testimonials -->
<?php include("comment.php"); ?>
<!-- footer -->
<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>