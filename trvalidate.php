<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>


<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="customer_reg_validate.php" method="post">
		
			<h2>Customer Registration</h2>
			
			
			<?php 
				include "include/connect.php";
				
				$cus_fname=$_POST['cus_id'];
				$cus_name=$_POST['cus_name'];
				$cus_mobile=$_POST['cus_mobile'];
				$cus_email=$_POST['cus_email'];
				$fpassword=$_POST['fpassword'];
				$fdate=date('y-m-d');
				
				$sql="select * from tbank where emailid='$cus_email' or mobile='$cus_mobile'";
				$result=mysql_query($sql);
				
				if($row=mysql_fetch_array($result))
				{
					echo "<h4><br />Email ID or Mobile already exists here.</h4>";
				}
				else
				{
					$sql="insert into tbank values('$cus_fname','$cus_name','$cus_mobile','$cus_email','$fpassword','$fdate')";
					mysql_query($sql);
					
					echo "<h3> <br />Time Bank Registration Successfull</h3>";
					
				}
			
			
			
			?>
			 <!-- /login-fields -->
			
		
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="tlogin.php">Time Bank Login</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
