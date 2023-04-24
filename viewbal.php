<?php
	session_start();
	if(!isset($_SESSION['cemail']))
		header('location: tlogin.php');
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
        <div class="span11">
          <div class="widget widget-nopad">
            
           <div class="widget-header"> <i class="icon-bookmark"></i>
              <h3> Your Applications</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
              	
			  		<font style="font-family:Georgia, 'Times New Roman', Times, serif">
					<table class="table table-striped table-bordered">
						<tr>
							<th>Request ID</th>
							<th>Contact Person</th>
							<th>Mobile #</th>
							<th>For Date</th>
							<th>Time Slot</th>
							<th>Details</th>
							<th>Hours Required</th>
							<th>Status</th>
							<th></th>
						<tr>
						<?php 
							include "include/connect.php";
							
							$uid=$_SESSION['cemail'];
							
							$sql="select * from tbreqapp where app_emailid='$uid' and Status='Done'";
							
							
							$result=mysql_query($sql);
							
							while($row=mysql_fetch_array($result))
							{
							
								$rid=$row[1];
							
								$sql="select * from tbreq where rid=$rid";
								
								$result2=mysql_query($sql);
							
								while($row2=mysql_fetch_array($result2))
								{
							
					?>	
						<tr>
							 
							 <td> <?php echo $row2[0]?></td>
							 <td> <?php echo $row2[2]?></td>
							 <td> <?php echo $row2[3]?></td>
							 <td> <?php echo $row2[4]?></td>
							 <td> <?php echo $row2[5]?></td>
							 <td> <?php echo $row2[6]?></td>
							 <td> <?php echo $row2[7]?></td>
							 <td> <?php echo $row[3]?></td>
							 
						</tr>
					<?php
							}
						}
					?>	
					</table>
					<br><br>
					<?php
					
						$uid=$_SESSION['cemail'];
							
						$sql="select * from tbbal where emailid='$uid'";
							
							
						$result=mysql_query($sql);
							
						$row=mysql_fetch_array($result);
					?>	
					Total Hours Balance : <?php echo $row[2]; ?>
					
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
