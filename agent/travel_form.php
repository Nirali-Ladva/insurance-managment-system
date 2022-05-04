<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Agent</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/colorpicker.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/bootstrap-wysihtml5.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>

<!--Header-part-->
<?php include("header.php");?>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
   
   
   
   <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Policy Table</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="Display_policy.php">Display</a></li>
       
      </ul>
    </li>
   
	
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Health Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="health.php">Display</a></li>
        <li><a href="health_form.php">Add</a></li>
        
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Travel Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="travel.php">Display</a></li>
        <li><a href="travel_form.php">Add</a></li>
        
      </ul>
    </li>
	
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Vehicle Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="vehicle.php">Display</a></li>
        <li><a href="vehicle_form.php">Add</a></li>
        
      </ul>
    </li>


   
   <!-- <li class="content"> <span>Monthly Bandwidth Transfer</span>
      <div class="progress progress-mini progress-danger active progress-striped">
        <div style="width: 77%;" class="bar"></div>
      </div>
      <span class="percent">77%</span>
      <div class="stat">21419.94 / 14000 MB</div>
    </li>
    <li class="content"> <span>Disk Space Usage</span>
      <div class="progress progress-mini active progress-striped">
        <div style="width: 87%;" class="bar"></div>
      </div>
      <span class="percent">87%</span>
      <div class="stat">604.44 / 4000 MB</div>
    </li>-->
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Common Form Elements</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Policy Booking Form</h5>
        </div>
		<div class="widget-content nopadding">
          <form action="addtravel_form.php" method="GET" class="form-horizontal">
			<div class="control-group">
             
              <div class="controls">
			   <input type="hidden" name="t_id">
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
                <select name="day">
				<option value=dd> dd </option> 
				<option value=1> 1 </option> 
				<option value=2> 2 </option> 
				<option value=3> 3 </option> 
				<option value=4> 4 </option> 
				<option value=5> 5 </option> 
				<option value=6> 6 </option> 
				<option value=7> 7 </option> 
				<option value=8> 8 </option> 
				<option value=9> 9 </option> 
				<option value=10> 10 </option> 
				<option value=11> 11 </option> 
				<option value=12> 12 </option> 
				<option value=13> 13 </option> 
				<option value=14> 14 </option> 
				<option value=15> 15 </option> 
				<option value=16> 16 </option> 
				<option value=17> 17 </option> 
				<option value=18> 18 </option> 
				<option value=19> 19 </option> 
				<option value=20> 20 </option> 
				<option value=21> 21 </option> 
				<option value=22> 22 </option> 
				<option value=23> 23 </option> 
				<option value=24> 24 </option> 
				<option value=25> 25 </option> 
				<option value=26> 26 </option> 
				<option value=27> 27 </option> 
				<option value=28> 28 </option> 
				<option value=29> 29 </option> 
				<option value=30> 30 </option> 
				<option value=31> 31 </option> 
                </select>
				<select name="month"  >
				<option value=mm> mm </option>
				<option value=1> 1 </option> 
				<option value=2> 2 </option> 
				<option value=3> 3 </option> 
				<option value=4> 4 </option> 
				<option value=5> 5 </option> 
				<option value=6> 6 </option> 
				<option value=7> 7 </option> 
				<option value=8> 8 </option> 
				<option value=9> 9 </option> 
				<option value=10> 10 </option> 
				<option value=11> 11 </option> 
				<option value=12> 12 </option>
				</select>
				<select name="year"  >
				<option value=yy> yyyy </option>
				<option value=2000> 2000 </option> 
				<option value=2001> 2001 </option> 
				<option value=2002> 2002 </option> 
				<option value=2003> 2003 </option> 
				<option value=2004> 2004 </option> 
				<option value=2005> 2005 </option> 
				<option value=2006> 2006 </option> 
				<option value=2007> 2007 </option> 
				<option value=2008> 2008 </option> 
				<option value=2009> 2009 </option> 
				<option value=2010> 2010 </option> 
				<option value=2011> 2011 </option> 
				<option value=2012> 2012 </option> 
				<option value=2013> 2013 </option> 
				<option value=2014> 2014 </option> 
				<option value=2015> 2015 </option> 
				<option value=2016> 2016 </option> 
				<option value=2017> 2017 </option> 
			</select>
 
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
				
			   <div class="control-group">
              <label class="control-label">Start date</label>
              <div class="controls">
			   <input type="date" name="s_date" value="dd mm yyyy">
              </div>
			  
			     <div class="control-group">
              <label class="control-label">Return date</label>
              <div class="controls">
			   <input type="text" name="r_date">
              </div>
			  
			    <div class="control-group">
              <label class="control-label">No. of days</label>
              <div class="controls">
			   <input type="text" name="num_day">
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
			  <div class="form-actions">
              <button type="submit" class="btn btn-success">Save</button>
            </div>
			
			  <div class="form-actions">
              <button type="submit" class="btn btn-success">Print</button>
            </div>
			   </form>
			  </div>
</div></div>
<!--Footer-part-->
<?php include("footer.php"); ?>
<!--end-Footer-part--> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/bootstrap-colorpicker.js"></script> 
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/jquery.toggle.buttons.js"></script> 
<script src="js/masked.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_common.js"></script> 
<script src="js/wysihtml5-0.3.0.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
