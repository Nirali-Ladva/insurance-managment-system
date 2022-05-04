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
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    
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
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Tables</a> </div>
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
              
                <tr>
                  <th>#</th>
                  <th>Category_id</th>
                  <th>policy_name</th>
                  <th>photo_name</th>
				  <!--th>Action</th-->
                </tr>
              
			  <tbody>
			  </tbody>
              <tbody>
			  
<?php
				include("conn.php");
				$id=$_SESSION['id'];
				
				$result1=Mysql_query("select * from agent_policy where agent_id=$id ",$conn);
				$rows=Mysql_fetch_row($result1);
				
					
					$id=0;
				while($rows)
				{
				$id++;
				$result2=Mysql_query("select * from policy_info where policy_id=$rows[2]",$conn);
				$row2=Mysql_fetch_row($result2);
				
?>
		  
		 
			<tr>
			  <td><?php echo $id ?></td>
			  <td><?php echo $row2[1]; ?></td>
			  <td><?php echo $row2[2]; ?></td>
			  		
			  <td><img src="../images/<?php echo $row2[4]; ?> " alt="" height="100" width="100"></img></td>
			
			  <!--td><a href="delete_policy.php?id=<?php //echo $row2[0]; ?>"> Delete  </a> &nbsp; </td-->
			</tr>
				<?php 
				
					$rows=Mysql_fetch_row($result1);
					}
				?>
			
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
