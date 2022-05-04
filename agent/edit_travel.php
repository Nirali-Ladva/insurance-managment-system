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

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
   
   
	 <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Policy Table</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="Display_policy.php">Display</a></li>
        </ul>
    </li>
	
    
   
   <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Health Table</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="health.php">Display</a></li>
        
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Travel Table</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="travel.php">Display</a></li>
        
      </ul>
    </li>
  
  <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Vehicle Table</span> <span class="label label-important"></span></a>
      <ul>
        <li><a href="vehicle.php">Display</a></li>

      </ul>
    </li>

    
  </ul>
  </div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>  </div>
  <h1>Travel Form</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update Travel info</h5>
        </div>
		
          
        <div class="widget-content nopadding">
				<?php
						  include("conn.php");
						  $id=$_GET['id'];
						  
						  $sql="select * from travel_form where t_id=$id";
						  $result=mysql_query($sql,$conn);
						  $row=mysql_fetch_array($result);
				?>
						  
						  
			<form action="edittravel_proc.php" method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="control-group">
              
             <input type="hidden" value="<?php echo $_GET['id'];?>" class="span11" name="id"  />
              
            </div>
              			
			 <div class="control-group">
              <label class="control-label">First Name :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['fname'];?>" class="span11" name="fname" placeholder="First Name" />
              </div>
            </div>
			 <div class="control-group">
              <label class="control-label">User_image :</label>
              <div class="controls">
                <img src="../images/<?php echo $row["user_photo"]; ?> " alt="" height="100" width="100"></img> 
              </div>
            </div>
			 <div class="control-group">
				<label class="control-label">User photo</label>
				<div class="controls"	>
					<input type="file" name="file">
				</div>
              </div>
			<div class="control-group">
              <label class="control-label">Last Name :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['lname'];?>" class="span11" name="lname" placeholder="Last Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Email</label>
              <div class="controls">
                <input type="email" value="<?php echo $row['email'];?>"  class="span11" name="email" placeholder="Email"/>
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Contact No :</label>
              <div class="controls">
                <input type="contact_no" value="<?php echo $row['contact_no'];?>" class="span11" name="contact_no" placeholder="Contact No" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label"> Pincode :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['pincode'];?>" class="span11" name="pincode" placeholder="Pincode" />
              </div>
            </div>
           
            <div class="control-group">
              <label class="control-label"> Age :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['age'];?>" class="span9" name="age" placeholder="Age" />
              </div>
            </div>
           
			<div class="control-group">
              <label class="control-label">Date Of Birth :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['dob'];?>" class="span11" name="dob" placeholder="Date Of Birth" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">City :</label>
            <div class="controls">
                <input type="text" value="<?php echo $row['city'];?>" class="span11" name="city" placeholder="City Name" />
            </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Gender :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['gender'];?>" class="span11" name="gender" placeholder="Gender" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Travel Plan:</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['travelplan'];?>" class="span11" name="travelplan" placeholder="Travel Plan" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Country:</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['country'];?>" class="span11" name="country" placeholder="country" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Start Date:</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['s_date'];?>" class="span11" name="s_date" placeholder="Start Date" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Return Date:</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['r_date'];?>" class="span11" name="r_date" placeholder="Return Date" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Number of days:</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['num_day'];?>" class="span11" name= "num_day" placeholder="Number of days" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Sum assured :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['sum_assured'];?>" class="span11" name="sum_assured" placeholder="Sum assured" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Premium :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row['premium'];?>" class="span11" name="premium" placeholder="Premium" />
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success" >Update</button>
            </div>
			 </div>
			   </div>
			   </div>
			
          </form>
        </div>
      </div>

<!--Footer-part-->
<?php include("footer.php"); ?>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>
</body>
</html>
