
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
 <div class="banner1">
	    <div class="wthree_banner1_info">
				<h3><span>P</span>olicy</h3>
		</div>
    </div>
	
	<div class="team">
	<div class="container"> 
		<div class="row" >
			<p>
			<?php
				include("conn.php");
				$name=$_GET['name'];
				if($name==1) { ?>
			<center><b style="color:#47cf73; font-family:Trajan Pro; font-size:30px; margin-left:10%;">Health Insurance</b></center>
			<br> </br>
				<p style="margin-left:8%;"> One of the most important types of insurance to have is health insurance.Your good health is what allows you to work and earn money and otherwise enjoy life. If you were to come down with a sickness or have an accident without health insurance you may find yourself unable to receive treatment or even in debt to the hospital.</p>
				<br></br>
				<p style="margin-left:8%;">
				Having health insurance helps you get cashless medical treatment or reimburse your medical expenses up to the covered amount. It makes sure that proper medical care is available to a person without exhausting their savings and affecting their financial condition. Hence, it becomes imperative to have a health cover in today’s time.
				</p>
					<!--<p>Thankfully, many employers provide health insurance benefits to full-time and even some part-time employees. If you do not currently have health insurance coverage this is the first place to check as it will generally be the most affordable. If you are married, you may both be able to receive coverage under just one of the employer plans.</p>-->
				<br></br>
				<p style="margin-left:8%;"> If your employer does not offer health insurance or you are self-employed you still need it. While it may not be cheap the fact remains; what do you have if you don’t have your health? Even a basic hospital bill without insurance can run into the thousands of dollars. It isn’t worth risking financial ruin to save a few bucks on a health insurance premium.</p>
				<br></br>
			<?php } ?>
			
			<p>
			<?php
				include("conn.php");
				$name=$_GET['name'];
				if($name==3) { ?>
				
			<center><B style="color:#47cf73; font-family:Trajan Pro; font-size:30px; margin-left:10%;">Travel Insurance</B></center>
				<br> </br>
				<p style="margin-left:8%;">
	matrix insurance policy plan for covering the family when there are travelling abroad, this plans are taken to insured that the families travel are secured & hassle-free .
	Easy travel in. plans for family reviles the following benefit:
	Medical treatment , assistant & evacuation is provided that provides coverage against any emergency medical treatment that requirement. Insurance passions care .
	It includes medical evacuation to the hospital.
	Medical expenses for pain reliving dental treatment or dental treatment that is requirement due to an accident will be covered.</p><br>
<!--<p>
the plan covers repatriation of mortal remains where the cost of transporting the motor remain the place of resident or a cremation or burial in the foreign country will be covered a daily case benefit is received in case of a continues & completed 24 hour of hospitalization.
Coverage against the loss of checked in baggage by a carrier on which the insured person is travelling as a passenger is a provided.
</p>-->
				<br> </br>
				
				
			<?php } ?>
			
			<p>
			<?php
				include("conn.php");
				$name=$_GET['name'];
				if($name==2) { ?>
				</p>			
				<center><b style="color:#47cf73; font-family:Trajan Pro; font-size:30px; margin-left:10%;">Vehical Insurance</b></center>
				<br> </br>
				
				<p style="margin-left:8%;"> Getting a motor insurance unlike other forms of insurance  is not a choice but a legal compulsion it is mandatory to have a third party motor in. under Indian motor etc. but it is recommended by experts to get comprehensive in. for your price position a comprehensive plan covers a vehicle not only on the loss/damage coasted by due to a third part(driver/vehicle/pro,) but also loss/damaged coasted to your vehicle by natural/main made calamities. To top it up, every insurer offers a most of valuable add:-once on the basic plan to make the coverage to more effective</p><br>
					<br> </br>
				<b style="margin-left:8%;">There are three types of vehicle insurance: </b>
				
				<p style="margin-left:8%;">
				   1. private car<br>
				   2. two wheeler insurance<br>
				   3. commercial<br>
				</p><br> 
				<?php } ?>


<!-- courses -->
		<?php 
				
				$name=$_GET['name'];
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				$result=Mysql_query("select * from policy_info where Category_id=$name",$link);
				$rows=Mysql_fetch_row($result);
			
				while($rows)
				{
				?>
				
				<div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							<div class="panel-heading"><?php echo $rows[2]; ?></div>
							<div class="panel-body"><a href="policy_info.php?name=<?php echo $rows[0]; ?>"><img src="images/<?php echo $rows[4]; ?> " style="width:100%;" /> </a>
				</div>
					
							<div class="panel-footer">
							
							<?php 
							echo substr($rows[3],0,70); ?>...</div>
							
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

<!-- footer -->
<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>