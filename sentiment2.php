<?php
	session_start();
	if(!isset($_SESSION['user_id']))
		header('location: customer_login.php');
?>
<?php include "include/head.php" ?>
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
<?php include "include/menu.php" ?>
<!-- /subnavbar -->
<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
          <div class="widget widget-table action-table">
            <div class="widget-header"> <i class="icon-th-list"></i>
              <h3>Sentiment Analysis</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
            				  <form id="edit-profile" name="myform" action="sentiment2.php" method="post" class="form-horizontal">
									<fieldset>
										<br><br>
										 <!-- /control-group -->
										
										<?php
										
										
											$file1 = 'contents/positive-words.txt';
											$file2 = 'contents/positveemotions.txt';
											$file3 = 'contents/negative-words.txt';
											$file4 = 'contents/negativeemotions.txt';
											$file5 = 'contents/intensifiers.txt';
										//	$file6 = 'contents/negation.txt';
											
											$searchfor = 'relaxed';

											// get the file contents, assuming the file to be readable (and exist)
											
											$contents1 = file_get_contents($file1);
											$contents2 = file_get_contents($file2);
											$contents3 = file_get_contents($file3);
											$contents4 = file_get_contents($file4);	
											$contents5 = file_get_contents($file5);												
										//	$contents6 = file_get_contents($file6);	
											
											$x=explode(" ",$contents1);
											$y=explode(" ",$contents2);
											$z=explode(" ",$contents3);			
											$a=explode(" ",$contents4);
											$iarray=explode(" ",$contents5);
										//	$narray=explode(" ",$contents6);
											$pcount=0;
											$ncount=0;
											
											
												$pw=0;
												$pe=0;
												$nw=0;
												$ne=0;							

												$str=$_POST['txtreview'];
												$strrr=explode(" ",$str);
												
												$swords = array("without", "see", "unless", "due", "also", "must", "might", "like", "]", "[", "}", "{", "<", ">", "?", "\"", "\\", "/", ")", "(", "will", "may", "can", "much", "every", "the", "in", "other", "this", "the", "many", "any", "an", "in", "an", "an ", "is", "a", "about", "above", "after", "again", "against", "all", "am", "an", "any", "are", "aren’t", "as", "at", "be", "because", "been", "before", "being", "below", "between", "both",  "by", "can’t", "cannot", "could",
		"couldn’t", "did", "didn’t", "do", "does", "doesn’t", "doing", "don’t", "down", "during", "each", "few",  "from", "further", "had", "hadn’t", "has", "hasn’t", "have", "haven’t", "having",
		"he", "he’d", "he’ll", "he’s", "her", "here", "here’s", "hers", "herself", "him", "himself", "his", "how", "how’s", "i ", " i", "i’d", "i’ll", "i’m", "i’ve",  "in", "into", "is",
		"isn’t", "it", "it’s", "its", "itself", "let’s", "me", "more", "most", "mustn’t", "my", "myself",  "of", "off", "on", "once", "only", "ought", "our", "ours", "ourselves",
		"out", "over", "own", "same", "shan’t", "she", "she’d", "she’ll", "she’s", "should", "shouldn’t",  "some", "such", "than",
		"that", "that’s", "their", "theirs", "them", "themselves", "then", "there", "there’s", "these", "they", "they’d", "they’ll", "they’re", "they’ve",
		"this", "those", "through", "to", "too", "under", "until", "up",  "was", "wasn’t", "we", "we’d", "we’ll", "we’re", "we’ve",
		"were", "weren’t", "what", "what’s", "when", "when’s", "where", "where’s", "which", "while", "who", "who’s", "whom",
		"why", "why’s", "with", "won’t", "would", "wouldn’t", "you", "you’d", "you’ll", "you’re", "you’ve", "your", "yours", "yourself", "yourselves",
		"Without", "See", "Unless", "Due", "Also", "Must", "Might", "Like", "Will", "May", "Can", "Much", "Every", "The", "In", "Other", "This", "The", "Many", "Any", "An", "In", "An", "An ", "Is", "A", "About", "Above", "After", "Again", "Against", "All", "Am", "An", "Any", "Are", "Aren’t", "As", "At", "Be", "Because", "Been", "Before", "Being", "Below", "Between", "Both", "By", "Can’t", "Cannot", "Could",
		"Couldn’t", "Did", "Didn’t", "Do", "Does", "Doesn’t", "Doing", "Don’t", "Down", "During", "Each", "Few",  "From", "Further", "Had", "Hadn’t", "Has", "Hasn’t", "Have", "Haven’t", "Having",
		"He", "He’d", "He’ll", "He’s", "Her", "Here", "Here’s", "Hers", "Herself", "Him", "Himself", "His", "How", "How’s", "I ", " I", "I’d", "I’ll", "I’m", "I’ve",  "In", "Into", "Is",
		"Isn’t", "It", "It’s", "Its", "Itself", "Let’s", "Me", "More", "Most", "Mustn’t", "My", "Myself",  "Of", "Off", "On", "Once", "Only", "Ought", "Our", "Ours", "Ourselves",
		"Out", "Over", "Own", "Same", "Shan’t", "She", "She’d", "She’ll", "She’s", "Should", "Shouldn’t",  "Some", "Such", "Than",
		"That", "That’s", "Their", "Theirs", "Them", "Themselves", "Then", "There", "There’s", "These", "They", "They’d", "They’ll", "They’re", "They’ve",
		"This", "Those", "Through", "To", "Too", "Under", "Until", "Up", "Very", "Was", "Wasn’t", "We", "We’d", "We’ll", "We’re", "We’ve",
		"Were", "Weren’t", "What", "What’s", "When", "When’s", "Where", "Where’s", "Which", "While", "Who", "Who’s", "Whom",
		"Why", "Why’s", "With", "Won’t", "Would", "Wouldn’t", "You", "You’d", "You’ll", "You’re", "You’ve", "Your", "Yours", "Yourself", "Yourselves");
		
												$narray=array("not","no","never");
												
												for($i=0;$i<sizeof($strrr);$i++)
												{
													$word=$strrr[$i];
													$sfound=0;
													for($j=0;$j<sizeof($swords);$j++)
													{
														if($swords[$j]==$word)
														{
															$sfound=1;
															
														
														}
													}
													
													if($sfound==1)
														unset($strrr[$i]);
													
												}
												$strrr = array_values($strrr);
												
												for($i=0;$i<sizeof($strrr);$i++)
												{
													$word=$strrr[$i];
												//	echo $word."<br>";
													$f=0;
													for($j=0;$j<sizeof($x);$j++)
													{
														if($x[$j]==$word)
														{
															$f=1;	
															$pw++;
															
														}
														
													}
													
													for($j=0;$j<sizeof($y);$j++)
													{
														if($y[$j]==$word)
														{
															$f=2;
															$pe++;
														}
													}
												
												
													for($j=0;$j<sizeof($z);$j++)
													{
														if($z[$j]==$word)
														{
															$f=3;
															$nw++;
															echo $word."<br>";
														}
													}
												
													
													for($j=0;$j<sizeof($a);$j++)
													{
														if($a[$j]==$word)
														{
															$f=3;
															$ne++;
															echo $word."<br>";
														}
													}
													if($i!=0)
													{
														
														$pword=$strrr[$i-1];
														$ifound=0;
														for($j=0;$j<sizeof($iarray);$j++)
														{
															if($iarray[$j]==$pword)
															{
																$ifound=1;
															}
														}
														
														$nfound=0;
													//	echo "Size of Negative Words :".sizeof($narray)."<br>";
														
														for($j=0;$j<sizeof($narray);$j++)
														{
														//	echo "Negative Words : $narray[$j]<br>";
															if($narray[$j]==$pword)
															{
																$nfound=1;
															}
														}
															
														if($ifound==1)
														{
															if($f==1)
																$pw*2;
															else if($f==2)
																$pe*2;
															else if($f==3)
																$nw*2;
															else if($f==4)
																$ne*2;
																											 
														}
														if($nfound==1)
														{
															if($f==1)
															{
																$pw=$pw-1;
																$nw=$nw+2;
															}
															else if($f==2)
															{
																$pe=$pe-1;
																$ne=$ne+2;
															}
															else if($f==3)
															{
																$nw=$nw-1;
																$pw=$pw+2;
															}
															else if($f==4)
															{
																$ne=$ne-1;
																$pe=$pe+2;
															}										 
														}
														//echo "Negation : $nfound<Br>";
														
													}
												}
												
												$pos=$pw+$pe;
											
												$neg=$nw+$ne;
												//echo "Positive : $pos<br> Negative $neg";
												if($pos>$neg)
													$pcount++;
												else if($pos<$neg)
													$ncount++;
												  
												
											
											if($pcount>$ncount)
												echo "<h2>The review is positive.</h2>";
											else
												echo "<h2>The review is negative.</h2>";
												
												
				 
										?>
											
										
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
