<?php include "include/indexhead.php" ?>
</head>
	<?php include "include/indexmenu.php" ?>
	<br><br>
	<center>
	
	
	    <div class="span11">
          <div class="widget widget-nopad">
            
           <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3> Doctor Search </h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              	
			  		<font style="font-family:Georgia, 'Times New Roman', Times, serif">
					<table class="table table-striped table-bordered">
						<tr>
							<th>Category</th>
							<th>First Name </th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Qualification</th>
							<th>Years Experience</th>
							<th>Mobile #</th>
							<th>Email ID</th>
							<th>Pincode</th>

							<th></th>
						<tr>
						<?php 
							include "include/connect.php";
							
							$cat=$_GET['cat'];		
							$sql="select * from DOCDATA where cat='$cat'";
							
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
								
					?>	
												<tr>
							 
							 <td> <?php echo $row[1]?></td>
							 <td> <?php echo $row[2]?></td>
							 <td> <?php echo $row[3]?></td>
							 <td> <?php echo $row[4]?></td>
							 <td> <?php echo $row[5]?></td>
							 <td> <?php echo $row[6]?></td>
							 <td> <?php echo $row[7]?></td>
							 <td> <?php echo $row[8]?></td>
							 <td> <?php echo $row[9]?></td>
						</tr>
					<?php
							
						}
					?>	
					</table>
					
					</font>	  
              <!-- /shortcuts --> 
            </div>
            <!-- /widget-content --> 
          </div> <!-- /widget-header -->
           
          </div>
          <!-- /widget -->
          
          <!-- /widget -->
          
          <!-- /widget --> 
        </div>
	</center>
<div class="account-container">
	
		
	
</div> <!-- /account-container --><br />

							

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/signin.js"></script>

</body>

</html>
