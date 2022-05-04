<?php session_start(); 
if(isset($_SESSION['uid']))	
{
	$u_id=$_SESSION['uid'];
	
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

<link rel="stylesheet" href="css2/bootstrap.min.css" />
<!--<link rel="stylesheet" href="css2/bootstrap-responsive.min.css" />-->
<link rel="stylesheet" href="css2/matrix-style.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/bootstrap.css" />

</head>

<body>
<!-- banner -->
<?php include("title.php"); ?>
<?php include("header.php"); ?>

<!-- //banner -->	
   
<!-- //banner -->	
<!-- mail -->
<center>
	<div id="content">

<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Policy Booking Form</h5>
        </div>
		<div class="widget-content nopadding">
          <form action="addtravel_form.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
			
			   <input type="hidden" name="t_id">
               <input type="hidden" name="u_id">
			   
			   <div class="control-group">
              <label class="control-label">Use Photo</label>
              <div class="controls">
			   <input type="file" name="file7">
              </div> 
              </div> 
			  
			<div class="control-group">
              <label class="control-label">First name</label>
              <div class="controls">
			   <input type="text" name="fname">
              </div>
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Last name</label>
              <div class="controls">
			   <input type="text" name="lname">
              </div>
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
			   <input type="email" name="email">
              </div>
              </div>
			  
			  <div class="control-group">
              <label class="control-label">Contact no.</label>
              <div class="controls">
			   <input type="text" name="contact_no">
              </div>
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Pin code</label>
              <div class="controls">
			   <input type="text" name="pincode">
              </div>
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Age</label>
              <div class="controls">
			   <input type="text" name="age">
              </div>
			  
            </div>
		
            <div class="control-group">
              <label class="control-label">Date of birth</label>
              <div class="controls">
                <input type="date" name="dob">
              </div>
            </div>
           

		  
            <div class="control-group">
              <label class="control-label">City</label>
              <div class="controls">
                <select name="city" >
                  <option>Jamnagar</option>
                  <option>Ahmedabad</option>
                  <option>Surat</option>
                  <option>Baroda</option>
                  <option>Rajkot</option>
                
                </select>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Agent</label>
              <div class="controls">
                <select name="agent_id" >
				<?php 
				
				$link=Mysql_connect("localhost","root","");
				Mysql_select_db("insurance",$link);
				
				$result=Mysql_query("select * from agent",$link);
				$rows=Mysql_fetch_row($result);
			
				while($rows)
				{ ?>
			
                  <option value="<?php echo $rows[0]; ?>"><?php echo $rows[1]; ?></option>
                 
                  <?php
				$rows=Mysql_fetch_row($result);
				}
				?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Gender</label>
              <div class="controls">
                <label>
                  <input type="radio" name="gender" value="male" />
					Male
				  </label>
                <label>
                  <input type="radio" name="gender" value="female" />
                  Female
				  </label>
          
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Travel Plan</label>
              <div class="controls">
                <select name="travelplan" >
				<option name="Select">Select</option>
                  <option name="Individual travel">Individual travel</option>
                  <option name="Family travel">Family travel</option>
                  <option name="Senior citizen travel">Senior citizen travel</option>
                  <option name="Student travel">Student travel</option>
                  
                </select>
              </div>
            </div>
	  
            <div class="control-group">
              <label class="control-label">Country travel to:</label>
              <div class="controls">
                <select name="country">
				<option value="select"> select </option> 
				<option value="india"> India </option> 
				<option value="america"> America </option> 
				<option value="u.k"> U.K </option> 
				<option value="japan"> Japan </option> 
				</select>
				</div>
				</div>
				
			   <div class="control-group">
              <label class="control-label">Start date</label>
              <div class="controls">
			   <input type="date" name="s_date" value="dd mm yyyy">
              </div>
              </div>
			  
			     <div class="control-group">
              <label class="control-label">Return date</label>
              <div class="controls">
			   <input type="date" name="r_date">
              </div>
              </div>
			  
			    <div class="control-group">
              <label class="control-label">No. of days</label>
              <div class="controls">
			   <input type="text" name="num_day">
              </div>
              </div>
			  
            <div class="control-group">
              <label class="control-label">Sum assured</label>
              <div class="controls">
                <select name="sum_assured">
				<option value="select"> Select </option> 
				<option value="400000"> 400000 </option> 
				<option value="500000"> 500000 </option> 
				<option value="1000000"> 1000000 </option> 
			
		
				</select>
            </div>
			  </div>
			  
            
            <div class="control-group">
              <label class="control-label">Premium</label>
              <div class="controls">
                <select name="premium">
				<option value="select"> Select </option> 
				<option value="5500"> 5500 </option> 
				<option value="9200"> 9200 </option> 
				<option value="21800"> 218000 </option> 
			
				
				</select>
            </div>
			  </div>
			  
			   <div class="control-group">
              <label class="control-label"> Ticket</label>
              <div class="controls">
			   <input type="file" name="file6">
              </div> 
              </div> 
			  
			  <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
			
			  <div class="form-actions">
              <button type="submit" class="btn btn-success">Print</button>
            </div>
			   </form>
			  </div>
			  </div>
</div></div>
</div></div>
</center>

<!-- footer -->

<!-- //footer -->

<?php include("footer.php"); ?>
<!-- //here ends scrolling icon -->
</body>
</html>
<?php
 }
	else{
		
		header("location:login.php");
	}
 ?>