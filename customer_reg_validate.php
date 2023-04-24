<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>


<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="customer_reg_validate.php" method="post">
		
			<h2>Customer Registration</h2>
			
			
			<?php 
				include "include/connect.php";
				
				$cus_id=$_POST['cus_id'];
				$cus_name=$_POST['cus_name'];
				$cus_mobile=$_POST['cus_mobile'];
				$cus_email=$_POST['cus_email'];
				$fpassword=$_POST['fpassword'];
				$fdate=date('y-m-d');
				
				$sql="select * from cust_reg where cuto_id='$cus_id'";
				$result=mysql_query($sql);
				
				if($row=mysql_fetch_array($result))
				{
					echo "<h4><br />Customer Id already exists here.Please New enter Customer Id</h4>";
				}
				else
				{
					$sql="insert into cust_reg values('$cus_id','$cus_name','$cus_mobile','$cus_email','$fpassword','$fdate')";
					mysql_query($sql);
					
					echo "<h3> <br />Record Saved Successfully</h3>";
					
				}
			
			
			
			?>
			 <!-- /login-fields -->
			
		
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="index.php">Customer login account</a>
</div> <!-- /login-extra -->


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

 </html>
