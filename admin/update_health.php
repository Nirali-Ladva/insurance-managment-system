<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
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
    <li class="active"><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
   
  
	 <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Policy Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="Display_policy.php">Display</a></li>
        <li><a href="Add_policy.php">Add</a></li>
        
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>User Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="User.php">Display</a></li>
        <li><a href="Add_user.php">Add</a></li>
       
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Agent Table</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="display_agent.php">Display Agent</a></li>
        <li><a href="Agent.php">Display agent policy</a></li>
        <li><a href="Add_agent.php">Add</a></li>
        <li><a href="Add_agentpolicy.php">Add agent_policy</a></li>
     
      </ul>
    </li>
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>City Table</span> <span class="label label-important">2</span></a>
      <ul>
	 <li><a href="city.php">Display</a></li>
        <li><a href="Add_city.php">Add</a></li>
        
      </ul>
    </li>
	
	<li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Articles</span> <span class="label label-important">2</span></a>
      <ul>
	 <li><a href="article.php">Display</a></li>
        <li><a href="Add_article.php">Add</a></li>
        
      </ul>
    </li>

     <li class=""><a href="health_user.php"><i class="icon icon-th-list"></i> <span>Health plan User</span></a> </li>
	
	<li class=""><a href="travel_user.php"><i class="icon icon-th-list"></i> <span>Travel plan User</span></a> </li>
	
	<li class=""><a href="vehicle_user.php"><i class="icon icon-th-list"></i> <span>Vehicle plan User</span></a> </li>
   
  </ul>
</div>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Form elements</a> <a href="#" class="current">Common elements</a> </div>
  <h1>Agent</h1>
</div>
<div class="container-fluid">
  <hr>
  <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Update agent info</h5>
        </div>
		
          
        <div class="widget-content nopadding">
		<?php
						  include("conn.php");
						  $id=$_GET['id'];
						  $sql="select * from agent where agent_id=$id";
						  $result=mysql_query($sql,$conn);
						  $row=mysql_fetch_row($result);
						  ?>
			<form action="editagent_proc.php" method="GET" class="form-horizontal">
            <div class="control-group">
              <div class="controls">
                <input type="hidden" class="span11" name="agent_id" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Agent Name :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row[1];?>" class="span11" name="Agent_name" placeholder="Agent Name" />
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">City Id</label>
              <div class="controls">
                <input type="text" value="<?php echo $row[2];?>"  class="span11" name="cityid" placeholder="City Id"/>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Image Name :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row[3];?>" class="span11" name="image" placeholder="Image Name" />
              </div>
            </div>
           
			<div class="control-group">
              <label class="control-label">Email :</label>
              <div class="controls">
                <input type="text" value="<?php echo $row[4];?>" class="span11" name="email" placeholder="Email" />
              </div>
            </div>
			<div class="control-group">
              <label class="control-label">Password :</label>
            <div class="controls">
                <input type="password" value="<?php echo $row[5];?>" class="span11" name="password" placeholder="Password" />
            </div>
            </div>
			<div class="control-group">
              <label class="control-label">contact_no :</label>
              <div class="controls">
                <input type="contact_no" value="<?php echo $row[6];?>" class="span11" name="contact_no" placeholder="contact_no" />
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
