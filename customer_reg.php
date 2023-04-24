<?php include "include/indexhead.php" ?>
<script language="javascript">
	function validate()
	{
		fpassword=document.myform.fpassword.value;
		confirm_password=document.myform.confirm_password.value;
	
		if(fpassword!=confirm_password)
		{
			alert("Please same the confirm passsword");
			return false;
		}
		return true;
	}		
</script>
</head>
	<?php include "include/indexmenu.php" ?>


<div class="account-container register">
	
	<div class="content clearfix">
		
		<form action="customer_reg_validate.php" name="myform" method="post" onsubmit="return validate()">
		
			<h2>Customer Registration</h2>
			
			<div class="login-fields">
				
				<p>Create your account:</p>
				
				<div class="field">					
					<input type="text" id="firstname" name="cus_id" value="" placeholder="ID" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<input type="text" id="lastname" name="cus_name" value="" placeholder="Name" class="login" required />
				</div> <!-- /field -->
								
				<div class="field">
					<input type="text" id="cus_mobile" name="cus_mobile" value="" placeholder="Mobile" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">					
					<input type="email" id="email" name="cus_email" value="" placeholder="Email-ID" class="login" required />
				</div>
				
				<div class="field">					
					<input type="password" id="password" name="fpassword" value="" placeholder="Password" class="login" required />
				</div> <!-- /field -->
				
				<div class="field">
					<input type="password" id="confirm_password" name="confirm_password" value="" placeholder="Confirm Password" class="login" required />
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Agree with the Terms & Conditions.</label>
				</span>
									
				<button type="submit" class="button btn btn-primary btn-large">Register</button>
				
			</div> <!-- .actions -->
			
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
