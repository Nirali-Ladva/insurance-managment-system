<!DOCTYPE html>

<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->

<?php include("header.php"); ?>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
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
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
      
        
      
					<li class="bg_ls"> <a href="insurance.php?name=1"> <i class="icon-tint"></i> Health</a> <div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							
							<div class="panel-body"><a href="insurance.php?name=1"></a></div>
							
						</div>
					</div></li>
					 <li class="bg_ls"> <a href="insurance.php?name=2"> <i class="icon-tint"></i> vehical</a> <div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							
							<div class="panel-body"><a href="insurance.php?name=2"></a></div>
							
						</div>
					</div></li>
					<li class="bg_ls"> <a href="insurance.php?name=3"> <i class=
					"icon-tint"></i> Travel</a> <div class="col-xs-4">
					<div class="box">
						<div class="panel panel-default">
							
							<div class="panel-body"><a href="insurance.php?name=3"></a></div>
							
						</div>
					</div></li>
					
		 
      </ul>
    </div>
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
	
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
           <div class="span12">
              <!--<div class="chart"></div>
            </div>--></div>
            <div class="span6">
              <ul class="site-stats">
                <li class="bg_lh"><i class="icon-user"></i> <strong>
				<?php
				include("conn.php");
						$sql="select * from health_form";
						$sql1="select * from travel_form";
						$sql2="select * from vehicle_form";
						$result=mysql_query($sql,$conn);
						$result1=mysql_query($sql1,$conn);
						$result2=mysql_query($sql2,$conn);
						$row=mysql_num_rows($result);
						$row1=mysql_num_rows($result1);
						$row2=mysql_num_rows($result2);
						$count=$row+$row1+$row2;
						echo $count;
						
				?>
				</strong> <small>User</small></li>
                <li class="bg_lh"><i class="icon-user"></i> <strong>
				<?php
						$sql3="select * from agent";
						$result3=mysql_query($sql3,$conn);
						$row3=mysql_num_rows($result3);
						echo $row3;
				?>
				</strong> <small>Total Agent </small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>3</strong> <small>Health policy</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>3</strong> <small>Vehicle policy</small></li>
                <li class="bg_lh"><i class="icon-tag"></i> <strong>4</strong> <small>Travel Policy</small></li>
                <!--<li class="bg_lh"><i class="icon-globe"></i> <strong></strong> <small></small></li>-->
              </ul>
            </div>
          </div>
        
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
    
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<?php include("footer.php"); ?>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
