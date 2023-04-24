<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>
<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="#" method="post">
		
			<h1>Customer Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<?php
						include "include/connect.php";
						
						$user_id=$_POST['user_id'];
						$fpassword=$_POST['fpassword'];
						
						$sql="select * from cust_reg where cuto_id='$user_id' and fpassword='$fpassword'";
						$result=mysql_query($sql);
						
						if($row=mysql_fetch_array($result))
						{
							session_start();
							
							$_SESSION['user_id']=$user_id;
							
							header('location: main_customer.php');
						}
						else
						{
							echo "<h3>User ID and Password Invalid</h3>";
						}
					?>
				</div> <!-- /field -->
				
				 <!-- /password -->
				
			</div> <!-- /login-fields -->
									
		</form>
		
		<center><a href="customer_login.php"><button class="button btn btn-success btn-large">Customer Login</button></a></center>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->



<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
