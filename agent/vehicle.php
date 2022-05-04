<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Agent</title>
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
                  <th>User image</th>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Contact NO</th>
                  <th>Email</th>
                  <th>Document</th>
                  <th>Approve</th>
                  <th>Edit</th>
				  <th>Reject</th>
				  
                </tr>
              <tbody>
			  </tbody>
			  <tbody>
			 
			  
<?php
				include("conn.php");
				$id=$_SESSION['id'];
				$sql = "Select * from vehicle_form where status='pandding' AND agent_id=$id";
				$result =mysql_query($sql,$conn);
				$id=0;
				
				while($row = mysql_fetch_array($result)) 
				{
					$id++;
		
			?>
		  
		 
			<tr>
			  <td><?php echo $id; ?></td>
			  <td><img src="../images/<?php echo $row["user_photo"]; ?>" alt="" height="100" width="100"></img></td>
			  
			  <td><?php echo $row["fname"]; ?></td>
			  <td><?php echo $row["lname"]; ?></td>
			  <td><?php echo $row["contact_no"]; ?></td>
			  <td><?php echo $row["email"]; ?></td>
			   <td><a href="../images/<?php echo $row["u_document"]; ?>"><?php echo $row["u_document"]; ?></a></td>
			
			<td><a href="Approve_vehicle.php?id=<?php echo $row[0]; ?>"> Approve  </a> &nbsp; 
			<td><a href="edit_vehicle.php?id=<?php echo $row["v_id"]; ?>"> Edit </a> &nbsp; </td>
			<td><a href="delete_vehicle.php?id=<?php echo $row[0]; ?>"> Reject  </a> &nbsp; 
		
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
