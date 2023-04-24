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
        <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Take Survey</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            				  <form id="edit-profile" name="myform" action="takesurvey_add.php" method="post" onSubmit="return validate()" class="form-horizontal">
									<fieldset>
										<br><br>
										 <!-- /control-group -->
										 
										 	<?php 
												include "include/connect.php";								
												
												$sql="select * from question_add";
												$result=mysql_query($sql);
												
												$i=1;
												$cat1=$cat2=$cat3=$cat4=$cat5=0;
												$yes=$no=$neutral=0;
												
												while($row=mysql_fetch_array($result))
												{
												
													$answer=$_POST['answer'.$i];
													$cat=$row[5];
													
													if($answer=="Yes")
													{
														$score=$row[2]."<br>";
														$yes=$yes+$score;
														 
													}
														
													if($answer=="No")
													{
														$score=$row[3];
														$no=$no+$score;
													}
														
													if($answer=="Neutral")
													{
														$score=$row[4];	
														$neutral=$neutral+$score;
													}
													
													if($cat=="Category1")	
														 $cat1=$cat1+$score."<br />";
														
													if($cat=="Category2")	
														 $cat2=$cat2+$score."<br />";
														
													if($cat=="Category3")	
														 $cat3=$cat3+$score."<br />";
														
													if($cat=="Category4")	
														 $cat4=$cat4+$score."<br />";
														
													if($cat=="Category5")	
														 $cat5=$cat5+$score;
													
													
													
												$i++;
												}
											//	echo $cat1."<br>";
												//echo $cat2."<br>";
										//		echo $cat3."<br>";
											//	echo $cat4."<br>";
												//echo $cat5."<br>";
												
												// category 1
												
												if($cat1>=15)
													$msg1="Extraversion vs. Introversion";
													
												else if ($cat1>=10)
													$msg1="Emotional stability vs. Neuroticism";
													
												else if ($cat1>=8)
													$msg1="Agreeableness vs. Disagreeable";
													
												else if ($cat1>=5)
													$msg1="Conscientiousness vs. Unconscientiously";
													
												else 
													$msg1="Openness to experience";
												
												
												// category 2
												
												if($cat2>=15)
													$msg2="Extraversion vs. Introversion";
													
												else if ($cat2>=10)
													$msg2="Emotional stability vs. Neuroticism";
													
												else if ($cat2>=8)
													$msg2="Agreeableness vs. Disagreeable";
													
												else if ($cat2>=5)
													$msg2="Conscientiousness vs. Unconscientiously";
													
												else 
													$msg2="Openness to experience";
													
												
												// category 3
												
												if($cat3>=15)
													$msg3="Extraversion vs. Introversion";
													
												else if ($cat3>=10)
													$msg3="Emotional stability vs. Neuroticism";
													
												else if ($cat3>=8)
													$msg3="Agreeableness vs. Disagreeable";
													
												else if ($cat3>=5)
													$msg3="Conscientiousness vs. Unconscientiously";
													
												else 
													$msg3="Openness to experience";
												
													
												// category 4
												
												if($cat4>=15)
													$msg4="Extraversion vs. Introversion";
													
												else if ($cat4>=10)
													$msg4="Emotional stability vs. Neuroticism";
													
												else if ($cat4>=8)
													$msg4="Agreeableness vs. Disagreeable";
													
												else if ($cat4>=5)
													$msg4="Conscientiousness vs. Unconscientiously";
													
												else 
													$msg4="Openness to experience";
												
												
												// category 5
												
												if($cat5>=15)
													$msg5="Extraversion vs. Introversion";
													
												else if ($cat5>=10)
													$msg5="Emotional stability vs. Neuroticism";
													
												else if ($cat5>=8)
													$msg5="Agreeableness vs. Disagreeable";
													
												else if ($cat5>=5)
													$msg5="Conscientiousness vs. Unconscientiously";
													
												else 
													$msg5="Openness to experience";
												
												$msg="$msg1 , $msg2 , $msg3 , $msg4 , $msg5 ";
												echo "<center><h4> $msg </h4></center>";
		
		
											// Name Fetch 
											
												$uid=$_SESSION['user_id'];
												
												$fdate=date('y-m-d');
												
												$sql2="select * from cust_reg where cuto_id='$uid'";
												$result=mysql_query($sql2);
												
												if($row=mysql_fetch_array($result))
													
												$sql="insert into take_survey values('$uid','$row[1]','$msg','$fdate')";
												mysql_query($sql);
												
												echo "<h1><br> &emsp; Record Saved Successful.<br><br>";
											?>
											<center><a href="take_survey.php"><input type="button" value=" Back Take Survey "></a></center>
										 <br />
										
										<!-- /form-actions -->
										
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
