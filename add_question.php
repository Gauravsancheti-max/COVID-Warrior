<?php
	session_start();
	if(!isset($_SESSION['admin_username']))
		header('location: admin_login.php');
?>
<?php include "include/admin_head.php" ?>
<script language="javascript">
function validate()
{
	
	new1=document.myform.new1.value;
	new2=document.myform.new2.value;
	
	if(new1!=new2)
	{
		alert("Please same the Retype Password");
		return false;
	}
	return true;	
}
</script>
</head>
<body>
<?php include "include/admin_menu.php" ?>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Add Question Proposed</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            				  <form id="edit-profile" name="myform" action="add_question_add.php" method="post" onSubmit="return validate()" class="form-horizontal">
									<fieldset>
										<br><br>
										 <!-- /control-group -->
										
										<font style="font-family:Georgia, 'Times New Roman', Times, serif; ">
											<div class="control-group">											
												<label class="control-label" for="firstname">Question :</label>
												<div class="controls">
													<textarea class="span6" name="question_add" required ></textarea>
												</div> <!-- /controls -->				
											</div>
											
											<div class="control-group">											
												<label class="control-label" for="firstname">Marks (Yes) :</label>
												<div class="controls">
													<input type="text" name="marks_yes" class="span2" required />
												</div> <!-- /controls -->				
											</div>
											
											<div class="control-group">											
												<label class="control-label" for="firstname">Marks (No) :</label>
												<div class="controls">
													<input type="text" name="marks_no" class="span2" required />
												</div> <!-- /controls -->				
											</div>
											<div class="control-group">											
												<label class="control-label" for="firstname">Marks (Neutral) :</label>
												<div class="controls">
													<input type="text" name="marks_neutral" class="span2" required />
												</div> <!-- /controls -->				
											</div>
											
											<div class="control-group">											
												<label class="control-label" for="firstname">Question Category :</label>
												<div class="controls">
													<select name="ques_cat" class="span6" required >
														<option> Select Category</option>														
														<option value="Category1"> Extraversion vs. Introversion (sociable, assertive, playful vs. aloof, reserved, shy) </option>
														<option value="Category2"> Emotional stability vs. Neuroticism (calm, unemotional vs. insecure, anxious) </option>
														<option value="Category3"> Agreeableness vs. Disagreeable (friendly, cooperative vs. antagonistic, faultfinding) </option>
														<option value="Category4"> Conscientiousness vs. Unconscientiously (self-disciplined, organized vs. inefficient, careless)</option> 
														<option value="Category5"> Openness to experience (intellectual, insightful vs. shallow, unimaginative)</option>
													</select>
												</div> <!-- /controls -->				
											</div>
											
											
																																												
										</font>
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Add Question</button> 
											<button type="reset" class="btn">Cancel</button>
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

          <!-- /widget -->
          
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        
        <!-- /span6 --> 
      </div>
	  
	  
	  <div class="row">
        <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>View Question</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
			<font style="font-family:Georgia, 'Times New Roman', Times, serif">
			<table class="table table-striped table-bordered">
			
			<tr>
				<th>Sno</th>
				<th>Question</th>
				<th>Answer ( Yes )</th>
				<th>Answer ( No )</th>
				<th>Answer ( Neutral )</th>
			</tr>
           	<?php 
			
				
			  	include "include/connect.php";																
								
				$sql="select * from question_add";
				$result=mysql_query($sql);
				
				$i=1;
				while($row=mysql_fetch_array($result))
				{
			  ?>		
		  		
						<tr>
							 <td> <?php echo $i ?></td>							 
							 <td> <?php echo $row[1]?></td>
							 <td style="text-align:right"> <?php echo $row[2]?></td>
							 <td style="text-align:right"> <?php echo $row[3]?></td>							 
							 <td style="text-align:right"> <?php echo $row[4]?></td>							 
				<?php
					$i++;
					}
				?>		
						
				</table>
			</font>	
            </div><br /><br /><br />

            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

          <!-- /widget -->
          
          <!-- /widget --> 
        </div>
        <!-- /span6 -->
        
        <!-- /span6 --> 
      </div>
	  
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->
<?php include "include/footer.php" ?>
<!-- /footer --> 
<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/chart.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.js"></script>
<script language="javascript" type="text/javascript" src="js/full-calendar/fullcalendar.min.js"></script>
 
<script src="js/base.js"></script> 
<script>     

        var lineChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    pointColor: "rgba(220,220,220,1)",
				    pointStrokeColor: "#fff",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    pointColor: "rgba(151,187,205,1)",
				    pointStrokeColor: "#fff",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }

        var myLine = new Chart(document.getElementById("area-chart").getContext("2d")).Line(lineChartData);


        var barChartData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
				{
				    fillColor: "rgba(220,220,220,0.5)",
				    strokeColor: "rgba(220,220,220,1)",
				    data: [65, 59, 90, 81, 56, 55, 40]
				},
				{
				    fillColor: "rgba(151,187,205,0.5)",
				    strokeColor: "rgba(151,187,205,1)",
				    data: [28, 48, 40, 19, 96, 27, 100]
				}
			]

        }    

        $(document).ready(function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var calendar = $('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          selectable: true,
          selectHelper: true,
          select: function(start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
              calendar.fullCalendar('renderEvent',
                {
                  title: title,
                  start: start,
                  end: end,
                  allDay: allDay
                },
                true // make the event "stick"
              );
            }
            calendar.fullCalendar('unselect');
          },
          editable: true,
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1)
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d+5),
              end: new Date(y, m, d+7)
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d-3, 16, 0),
              allDay: false
            },
            {
              id: 999,
              title: 'Repeating Event',
              start: new Date(y, m, d+4, 16, 0),
              allDay: false
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d+1, 19, 0),
              end: new Date(y, m, d+1, 22, 30),
              allDay: false
            },
            {
              title: 'EGrappler.com',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://EGrappler.com/'
            }
          ]
        });
      });
    </script><!-- /Calendar -->
</body>
</html>
