

<?php
						$link=Mysql_connect("localhost","root","");
						Mysql_select_db("insurance",$link);
						
				$email=$_POST['email'];
				$ans=$_POST['ans'];
				$query="select email,password from user where email='$email' AND ans='$ans'";
				$result=mysql_query($query,$link);
				$row=mysql_fetch_array($result);
				if($result)
					ec							
?>


