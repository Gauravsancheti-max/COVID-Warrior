<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>
	<br><br>
	<center>
	<h3>Doctor Search</h3>
	<br> Click on Category <br>
	<table border=0 cellpadding=5>
		<tr>
			<td><a href="dsearch3.php?cat=General Physician"><img src=img/d1.png height=200 width=200></a></td>
			<td><a href="dsearch3.php?cat=Sexual Problems"><img src=img/d2.png height=200 width=200></a></td>
			<td><a href="dsearch3.php?cat=Skin Problems"><img src=img/d3.png height=200 width=200></a></td>
			<td><a href="dsearch3.php?cat=Cold"><img src=img/d4.png height=200 width=200></a></td>
		</tr>
		<tr>
			<td><a href="dsearch3.php?cat=Stomach"><img src=img/d5.png height=200 width=200></a></td>
			<td><a href="dsearch3.php?cat=Ortopedics"><img src=img/d6.png height=200 width=200></a></td>
			<td><a href="dsearch3.php?cat=Neurology"><img src=img/d7.png height=200 width=200></a></td>
			<td><a href="dsearch3.php?cat=Cardiac"><img src=img/d8.png height=200 width=200></a></td>
		</tr>
		
		
		
		
		
		</table>
		<form name=myform action="dsearch2.php" method=post>
		<div class="control-group">											
												<label class="control-label" for="firstname">Pincode:</label>
												<div class="controls">
													<input type="number" name="txtpin" class="span6" required >													
												</div> <!-- /controls -->				
											</div>	
											<div class="form-actions">
											<button type="submit" class="btn btn-primary">Search Doctor</button> 
											<button type="reset" class="btn">Cancel</button>
										</div> <!-- /form-actions -->
											</form>
											<a href="index.php"><center><img src="img/home.png" /></center></a>

	</center>
<div class="account-container">
	
		
	
</div> <!-- /account-container --><br />

							

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
