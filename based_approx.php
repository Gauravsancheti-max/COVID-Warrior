<?php
	session_start();
	if(!isset($_SESSION['user_id']))
		header('location: customer_login.php');
?>
<?php include "include/head.php" ?>
</head>
<body>
<?php include "include/menu.php" ?>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
	<div class="row">
        <div class="span6">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Type A</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            				  <form id="edit-profile" name="myform" action="takesurvey_add.php" method="post" onSubmit="return validate()" class="form-horizontal">
									<fieldset>
										<p align="justify" style="font-family:'Times New Roman', Times, serif; padding:12px">
			  The theory describes Type A individuals as outgoing, ambitious, rigidly organized, highly status-conscious, sensitive, impatient, anxious, proactive, and concerned with time management. People with Type A personalities are often high-achieving "workaholics." They push themselves with deadlines, and hate both delays and ambivalence.[4]

In his 1996 book dealing with extreme Type A behavior, Type A Behavior: Its Diagnosis and Treatment, Friedman suggests that dangerous Type A behavior is expressed through three major symptoms: (1) free-floating hostility, which can be triggered by even minor incidents; (2) time urgency and impatience, which causes irritation and exasperation usually described as being "short-fused"; and (3) a competitive drive, which causes stress and an achievement-driven mentality. The first of these symptoms is believed to be covert and therefore less observable, while the other two are more overt. [5]</p>
										 	
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
        <div class="span6">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Type B</h3>
			  
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            				  <form id="edit-profile" name="myform" action="takesurvey_add.php" method="post" onSubmit="return validate()" class="form-horizontal">
									<fieldset>
										<p align="justify" style="font-family:'Times New Roman', Times, serif; padding:12px">
			The theory describes Type B individuals as a contrast to those of Type A. Type B personality, by definition, are noted to live at lower stress levels. They typically work steadily, and may enjoy achievement, although they have a greater tendency to disregard physical or mental stress when they do not achieve. When faced with competition, they may focus less on winning or losing than their Type A counterparts, and more on enjoying the game regardless of winning or losing. Unlike the Type A personality's rhythm of multi-tasked careers, Type B individuals are sometimes attracted to careers of creativity: writer, counselor, therapist, actor or actress. However, network and computer systems managers, professors, and judges are more likely to be Type B individuals as well. Their personal character may enjoy exploring ideas and concepts. They are often reflective, and think of the "outer and inner world".</p>
										 	
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
      </div>
      <div class="row">
        <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Take Survey</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            				  <form id="edit-profile" name="myform" action="takesurvey_based_add.php" method="post" onSubmit="return validate()" class="form-horizontal">
									<fieldset>
										<br><br>
										 <!-- /control-group -->
										 
										 	<?php 
												include "include/connect.php";								
												
												$sql="select * from question_add_based";
												$result=mysql_query($sql);
												
												$i=1;
												while($row=mysql_fetch_array($result))
												{
											  ?>		
										
												<font style="font-family:'Times New Roman', Times, serif;">
													<div class="control-group">											
														<label class="control-label" for="firstname"><b>Question <?php echo $i ?> :<br />Answer :</b></label>
														
														<div class="controls">
															<?php echo $row[1] ?><br />
															<input type="radio" name="answer<?php echo $i ?>" value="Yes" /> &nbsp;Yes	&emsp; 
															<input type="radio" name="answer<?php echo $i ?>" value="No" /> &nbsp;No		&emsp; 
															<input type="radio" name="answer<?php echo $i ?>" value="Neutral" /> &nbsp;Neutral 	
														</div> <!-- /controls -->				
													</div>																						
												</font>
												
											<?php
												$i++;
												}
											?>
											
										 <br />
										
											
										<div class="form-actions">
											<button type="submit" class="btn btn-primary">Submit</button> 
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
