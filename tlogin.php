<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>
<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="tlvalidate.php" method="post">
		
			<h1>Time Bank Login</h1>		
			
			<div class="login-fields">
				
				<p>Please provide your details</p>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" name="admin_username" value="" placeholder="Username" class="login username-field" />
				</div> <!-- /field -->
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" name="admin_password" value="" placeholder="Password" class="login password-field"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					
					<label class="choice" for="Field"><a href=tregis.php>New Registration</a></label>
				</span>
									
				<button class="button btn btn-success btn-large">Login</button> 
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container --><br />

							<a href="index.php"><center><img src="img/home.png" /></center></a>


<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
