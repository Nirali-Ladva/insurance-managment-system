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
            <h5>Vehicle table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
             
                <tr>
                  <th>#</th>
             
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Contact NO</th>
                  <th>Email</th>
                  <th>Delete</th>
                 
                </tr>
            
			  
              <tbody>
			  </tbody>
			  <tbody>
			 
			  
<?php
				include("conn.php");
				$sql = "Select * from vehicle_form";
				$result =mysql_query($sql,$conn);
				$id=0;
				
				while($row = mysql_fetch_array($result)) 
				{
					$id++;
		
			?>
		  
		 
			<tr>
			  <td><?php echo $id; ?></td>
			  
			  <td><?php echo $row["fname"]; ?></td>
			  <td><?php echo $row["lname"]; ?></td>
			  <td><?php echo $row["contact_no"]; ?></td>
			  <td><?php echo $row["email"]; ?></td>
			
			<td><a href="delete_vehicle.php?id=<?php echo $row[0]; ?>"> Delete  </a> &nbsp; 
			
		
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
