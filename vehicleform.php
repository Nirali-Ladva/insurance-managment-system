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
          <form action="addvehicle_form.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
			
			   
  		<input type="hidden" name="u_id">
               <input type="hidden" name="v_id">
                
			 <div class="control-group">
              <label class="control-label">Use Photo</label>
              <div class="controls">
			   <input type="file" name="file3">
              </div> 
              </div> 
			<div class="control-group">
              <label class="control-label">First name</label>
              <div class="controls">
			   <input type="text" name="fname">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Last name</label>
              <div class="controls">
			   <input type="text" name="lname">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
			   <input type="email" name="email">
              </div>
			  
			  <div class="control-group">
              <label class="control-label">Contact no.</label>
              <div class="controls">
			   <input type="text" name="contact_no">
              </div>
			  
			   <div class="control-group">
              <label class="control-label">Pin code</label>
              <div class="controls">
			   <input type="text" name="pincode">
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
			
                  <option value="<?php echo $rows[1]; ?>"><?php echo $rows[2]; ?></option>
                 
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
              <label class="control-label">Vehicle insurance Plan</label>
              <div class="controls">
                <select name="vehicleplan" >
				<option name="Select">Select</option>
                  <option name="Car insurance">Car insurance</option>
                  <option name="Two wheeler">Two wheeler</option>
                  <option name="Commercial vehicle">Commercial vehicle</option>
                 
                 </select>
              </div>
            </div>
	  
            <div class="control-group">
              <label class="control-label">Type of Insurance</label>
              <div class="controls">
                <label>
                  <input type="radio" name="insurance_type" value="comprehensive" />
					Comprehensive
				  </label>
                <label>
                  <input type="radio" name="insurance_type" value="third_party" />
                  Third party
				  
				  </label>         
              </div>
            </div>
			
			   <div class="control-group">
              <label class="control-label">License no.</label>
              <div class="controls">
			   <input type="text" name="license_no">
              </div>
			  
			     <div class="control-group">
              <label class="control-label">Regi no.</label>
              <div class="controls">
			   <input type="text" name="regi_no">
              </div>
			  
			  
			  <div class="control-group">
              <label class="control-label">Your vehicle is:</label>
              <div class="controls">
                <label>
                  <input type="radio" name="vehicle_type" value="new" />
					New
				  </label>
                <label>
                  <input type="radio" name="vehicle_type" value="old" />
					Old
				   </label>         
              </div>
            </div>
			
			              
              </div>
            </div>
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
              <label class="control-label"> Rc Book</label>
              <div class="controls">
			   <input type="file" name="file4">
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
			  </div>
			  </div>
			  </div>
			  </div>
</div></div>

<!-- //mail -->
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