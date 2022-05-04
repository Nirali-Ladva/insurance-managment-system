
<!--<title>Matrix Policy a Banking Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>-->
<!-- custom-theme -->



<!-- banner -->
<div class="header">


   <div class="w3layouts_header_left">
	<ul>
		<?php
		if(isset($_SESSION['uid']))
		{
		?>
				<li><a href="logout.php" data-target="#myModal2"<i class="fa fa-user" aria-hidden="true"></i> log out</a></li>
				<li><a href="message.php" data-target="#myModal2"<i class="fa fa-user" aria-hidden="true"></i> Message</a></li>
				
		<?php
		}
		else
		{
		?>
			<li><a href="login.php" data-target="#myModal2"><i class="fa fa-user" aria-hidden="true"></i> Sign in</a></li>
			<li><a href="sign_upp.php"  data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign up</a></li>

		<?php  }  ?>
		
	</ul>
   </div>
    <div class="clearfix"> </div>
</div>

<div class="header_mid">
<div class="w3layouts_header_mid">
<ul>
	<li>
		
		<div class="header_contact_details_agile"><i class="fa fa-envelope-o" aria-hidden="true"></i>
			<div class="w3l_header_contact_details_agile">
				 <div class="header-contact-detail-title">Send us a Message</div> 
				<a href="mailto:matrix@gmail.com">matrix@gmail.com</a>
			</div>
	   </div>
	</li>
	<li>
		<div class="header_contact_details_agile"><i class="fa fa-phone" aria-hidden="true"></i>
			<div class="w3l_header_contact_details_agile">
				 <div class="header-contact-detail-title">Give us a Call</div> 
				<a class="w3l_header_contact_details_agile-info_inner"> 722-803-6697 </a>
			</div>
	   </div>
	</li>	
	<!--<div class="w3_agile_search">
	<form action="#" method="post">
		<input type="search" name="Search" placeholder="Search Keywords..." required="" />
		<input type="submit" value="Search">
	</form>
	</div>-->
</ul>
</div>
</div>

<div class="banner">
<nav class="navbar navbar-default">
<div class="navbar-header navbar-left">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<h1><a class="navbar-brand" href="index.php"><span>M</span>atrix </a></h1>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
	<nav class="link-effect-2" id="link-effect-2">
		<ul class="nav navbar-nav">
			<li class="active"><a style=" padding-bottom:0px; padding-right:5px;" href="index.php"><span data-hover="Home">Home</span></a></li>
			
			
			<li><a style=" padding-bottom:0px; padding-right:5px;" href="category.php"><span data-hover="category">Category</span></a></li>
			<li class="dropdown">
				<a style=" padding-bottom:0px; padding-right:5px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="City">city</span> <b class="caret"></b></a>
				<ul class="dropdown-menu agile_short_dropdown">
					<li><a href="agent.php?id=1">Jamnagar</a></li>
					<li><a href="agent.php?id=2">Ahmedabad</a></li>
					<li><a href="agent.php?id=3">Surat</a></li>
					<li><a href="agent.php?id=4">Baroda</a></li>
					<li><a href="agent.php?id=5">Rajkot</a></li>
				</ul>
			</li>
			<li><a style=" padding-bottom:0px; padding-right:5px;" href="art_cat.php"><span data-hover="Article">Article</span></a></li>
			
			<li><a style=" padding-bottom:0px; padding-right:5px;" href="contact us.php"><span data-hover="Contact Us">Contact Us</span></a></li>
			
			<li><a style=" padding-bottom:0px; padding-right:5px;" href="about us.php"><span data-hover="About Us">About Us</span></a></li>
		</ul>
	</nav>

</div>

</nav>
</div>