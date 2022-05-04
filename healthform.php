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

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('input[type=""]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });
});
</script>
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
  <center>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
		
          <h5>Policy Booking Form</h5>
        </div>
		<div class="widget-content nopadding">
		
          <form action="addhealth_form.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
			
			<input type="hidden" name="h_id">
             <input type="hidden" name="u_id">
              
			 <div class="control-group">
              <label class="control-label">User photo</label>
              <div class="controls"	>
			   <input type="file" name="file">
              </div>
              </div> 
			  
			<div class="control-group">
              <label class="control-label">First name</label>
              <div class="controls"	>
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
                  <option value="Jamnagar">Jamnagar</option>
                  <option value="Ahmedabad">Ahmedabad</option>
                  <option value="Surat">Surat</option>
                  <option value="Baroda">Baroda</option>
                  <option value="Rajkot">Rajkot</option>
                
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
              <label class="control-label">Health Plan</label>
              <div class="controls">
                <select name="healthplan" >
                  <option value="Individual health plan">Individual health plan</option>
                  <option value="Family health plan">Family health plan</option>
                  <option value="Seneior citizen health plan">Seneior citizen health plan</option>
                  
                </select>
              </div>
            </div>
	  
            <div class="control-group">
              <label class="control-label">Relationship</label>
              <div class="controls">
                <select name="relationship">
				<option value="select"> select </option> 
				<option value="self"> self </option> 
				<option value="Son"> Son </option> 
				<option value="Daughter"> Daughter </option> 
				<option value="Mother"> Mother </option> 
				<option value="Father"> father </option> 
				<option value="Sister"> Sister </option> 
				<option value="Brother"> Brother </option> 
				<option value="Father in laws"> Father in laws </option> 
				<option value="Mother in laws"> Mother in laws </option> 
				<option value="Aunt"> Aunt </option> 
				<option value="Uncle"> Uncle </option> 
				<option value="Grand son"> Grand son </option> 
				<option value="Grand Daughter"> Grand Daughter </option> 
				</select>
				</div>
				
			  
              <label class="control-label">Height:</label>
              <div class="controls">
			   <input type="text" name="height"> ft 
			   <input type="text" name="height"> in
              </div>
			  </div>
			  
			 <div class="control-group">
              <label class="control-label">Weight</label>
              <div class="controls">
			   <input type="text" name="weight">
              </div>
              </div>
			   <div class="control-group">
              <label class="control-label">Any Health issue?</label>
              <div class="controls">
                <label>
                  <input type="radio" name="health_issue" value="yes" />
					Yes
				  </label>
                <label>
                  <input type="radio" name="health_issue" value="no" />
                  No
				  </label>
          
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
              <label class="control-label">User Document</label>
              <div class="controls"	>
			   <input type="file" name="file1">
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
			    </center>
			  </div>
			  </div>
			  </div>
			  </div>
			


<!-- //mail -->
<!-- footer -->

<!-- //footer -->
<?php
 include("footer.php"); 
 ?>
</body>
</html>

<?php
 }
	else{
		
		header("location:login.php");
	}
 ?>
<!-- //here ends scrolling icon -->
