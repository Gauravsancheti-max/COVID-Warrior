<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>
<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="admin_login_validate.php" method="post">
		
			<h1>Admin Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<?php
						include "include/connect.php";
						
						$admin_username=$_POST['admin_username'];
						$admin_password=$_POST['admin_password'];
						
						$sql="select * from alogin where username='$admin_username' and passwordd='$admin_password'";
						$result=mysql_query($sql);
						
						if($row=mysql_fetch_array($result))
						{
							session_start();
							
							$_SESSION['admin_username']=$admin_username;
							
							header('location: admin_main.php');
						}
						else
						{
							echo "<h3>User ID and Password Invalid</h3>";
						}
					?>
				</div> <!-- /field -->
								
				
			</div> <!-- /login-fields -->
			
			
										
			
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
