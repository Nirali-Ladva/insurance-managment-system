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
									$rows2=Mysql_fetch_row($result2); 
								?>
								
								<h4><?php echo $rows2[1]; ?></h4>
								<h5>Client</h5>
								<div class="w3l_testimonial_grid_pos">
									<!--img src="images/1.png" alt=" " class="img-responsive" /-->
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
	     
			<div class="w3ls_testimonials_grids">
				
				
				<?php  
if(isset($_SESSION['uid']))	
{
	$u_id=$_SESSION['uid'];
	
	?>
				<div class="col-md-12" >
				<h3 style="color:#09347a; font-size:20px; padding:10px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>  Your Review..</h3>
					<form action="#" method="POST" >
					 <input type="hidden" name="id">
					 <input type="hidden" name="u_id">
				
					<textarea name="cmt" rows="5"  style="width:500px; border-radius:5px; background-color:#f5f5f5; margin-top:10px;" placeholder="Type your review....."></textarea>
					
					<div class="form-actions">
						<button type="submit" class="btn btn-success" name="comt">submit</button>
					</div>
					
					</form>
			
				</div>
<?php 
}
		
	if(isset($_POST['comt']))
		{
				include("conn.php");
				$u_id=$_SESSION['uid'];
				
				$cmt=$_POST['cmt'];
				
				$result=mysql_query("insert into comment values('',$u_id,'$cmt')",$conn);
				
		}

?>

				
			</div>
		</div>
	</div>
