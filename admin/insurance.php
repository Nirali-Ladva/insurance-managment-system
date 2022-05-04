<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<?php include("header.php"); ?>
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <!--<li class="active"><a href="Display_policy.php"><i class="icon icon-th"></i> <span>Policy Table</span></a></li>-->
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
        <li><a href="Agent.php">Display</a></li>
        <li><a href="Add_agent.php">Add</a></li>
        
      </ul>
    </li>

    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>City Table</span> <span class="label label-important">2</span></a>
      <ul>
	 <li><a href="city.php">Display</a></li>
        <li><a href="Add_city.php">Add</a></li>
        
      </ul>
    </li>
	 <li><a href="health_user.php"><i class="icon icon-th-list"></i> <span>Health User</span></a> </li>
    <li><a href="vehicle_user.php"><i class="icon icon-th-list"></i> <span>Vehicle User</span></a> </li>
    
	<li><a href="travel_user.php"><i class="icon icon-th-list"></i> <span>Travel User</span></a> </li>

    
    
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
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
    <h1>Tables</h1>
  </div>
  
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        
       <!--policy  table-->
       
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Policy table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>#</th>
             
                  <th>policy_name</th>
                  <th>photo_name</th>
                </tr>
              </thead>
			  <tbody>
			  </tbody>
              <tbody>
			  
<?php
				$name=$_GET['name'];
				include("conn.php");
				$sql = "Select * from policy_info where Category_id=$name";
				$result=mysql_query($sql,$conn);
				$id=0;
				while($row=mysql_fetch_array($result)) 
				{
					$id++;
		
			?>
		  
		 
			<tr>
			  <td><?php echo $id; ?></td>
			  <td><?php echo $row["Name"]; ?></td>
		
			  <td><img src="../images/<?php echo $row["photo_name"]; ?> " alt="" height="100" width="100"></img></td>
			<!--<td><a href="gallery_edit.php?id=<?php /*echo $row["id"];*/ ?>"> Edit  </a>-->  &nbsp; 
			<td><a href="delete_policy.php?id=<?php echo $row["id"]; ?>"> Delete  </a> &nbsp; 
			
			</tr>
				<?php } ?>
			
		
              </tbody>
			 	
            </table>
				
          </div>
        </div>
      </div>
    </div>
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
