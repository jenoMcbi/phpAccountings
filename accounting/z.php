<?php
			include'functions/zz.php';
			include'sweetalert/swalenroll.php';
?>


<!doctype html>
<html lang="en">

<head>
	<title>CPC accounting system</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/cpc.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<!-- <?php include 'include/nav.php'; ?> -->
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<!-- <li><a href="addstudent.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Add New Students</span></a></li> -->
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Payment forms</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="z.php" class="">Enrollment</a></li>
									<li><a href="c.php" class="">Periodical Exam</a></li>
									<!-- <li><a href="entrance.php" class="">Entrance Exam</a></li> -->
									<li><a href="others.php" class="">Others</a></li>
								</ul>
							</div>
						</li>
						
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Payment logs</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									<li><a href="enrollmentlog.php" class="">Enrollment Logs</a></li>
									<li><a href="periodiclog.php" class="">Periodical Logs</a></li>
									<!-- <li><a href="entrancelog.php" class="">Entrance Logs</a></li> -->
									<li><a href="otherslog.php" class="">Others Logs</a></li>
								</ul>
							</div>
						</li>
						<!-- <li><a href="paymentlog.php" class=""><i class="lnr lnr-cog"></i> <span>Payments Logs</span></a></li> -->
						
						<!-- <li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>List</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="student.php" class="">Studens List</a></li>
									<li><a href="schoolar.php" class=""> CHED Schoolars</a></li>
									<li><a href="gov.php" class="">Goverment Schoolar</a></li>
									<li><a href="fisher.php" class="">Fisher Folks Schoolar</a></li>
								</ul>
							</div>
						</li> -->
						<li><a href="v.php" class=""><i class="lnr lnr-dice"></i> <span>Assesment Slip</span></a></li>
						<!-- <li><a href="notification.php" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li> -->
						
						<!-- <li><a href="typography.html" class=""><i class="lnr lnr-text-format"></i> <span>Typography</span></a></li>
						<li><a href="icons.html" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li> -->
					</ul>
				</nav>
			</div>
			
			
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Enrollment Fee Form</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
		
                        <div class="panel-heading">
                                <h4>Fill all Fields</h4></div>
                            <div class="panel-body">
                                <form id="movieForm" method="post">
                                    <div class="form-group">
                                          <div class="row gutter">
                                            	<form method="post" enctype="multipart/form-data" class="form-horizontal">
                                            		
                                            	<input type="hidden" class="form-control" name="transactiondate">

                                            	<input type="hidden" class="form-control" name="student_id">
							                                    
							                                    <input type="hidden" class="form-control" name="student_id">
							                                    <input type="hidden" class="form-control" name="fname">
							                                    <input type="hidden" class="form-control" name="lname">
							                                    <input type="hidden" class="form-control" name="enrollment_code">
							                                    <input type="hidden" class="form-control" name="subject_code">
							                                    <input type="hidden" class="form-control" name="credit_lec">
							                                    <input type="hidden" class="form-control" name="credit_lab">
							                                    <input type="hidden" class="form-control" name="total_credit">
							                                    <input type="hidden" class="form-control" name="department">
							                                    <input type="hidden" class="form-control" name="mi">
							                                    <input type="hidden" class="form-control" name="status">
							                                    <input type="hidden" class="form-control" name="typeofstudent">
							                                    <input type="hidden" class="form-control" name="year">
							                                    <input type="hidden" class="form-control" name="section">
							                                    <input type="hidden" class="form-control" name="semester">
							                                    <input type="hidden" class="form-control" name="miscyear">
							                                    <input type="hidden" class="form-control" name="labyear">
							                                    <input type="hidden" class="form-control" name="tuition">
							                                    <input type="hidden" class="form-control" name="misc">
							                                    <input type="hidden" class="form-control" name="labfee">
							                                    <input type="hidden" class="form-control" name="peramount">
							                                    <input type="hidden" class="form-control" name="advicing_code">



                                            <div class="col-md-4">
                                                <label class="control-label">OR NUMBER</label>
                                                <input type="text" class="form-control" name="ornumber">
                                            </div>

                                            <div class="col-md-8">
                                                <label class="control-label">ID NUMBER</label>
                                                <input type="text" class="form-control" name="student_id">
                                                 <button type="submit" name="get" class="btn btn-primary">GENERATE</button>
                                            </div>
<?php
          
           		 $msg= 0;
                 if(isset($_POST['get']))
                 


                  {
                   
					$student_id= $_POST['student_id'];
                   	$fname = $_POST['fname'];
                   	$lname =$_POST['lname'];
                   	$enrollment_code=$_POST['enrollment_code'];
                   	$subject_code=$_POST['subject_code'];
                   	$credit_lec=$_POST['credit_lec'];
                   	$credit_lab=$_POST['credit_lab'];
                   	$total_credit=$_POST['total_credit'];
                   	$department=$_POST['department'];
                   	$mi=$_POST['mi'];
                   	$year=$_POST['year'];
                   	$section=$_POST['section'];
                   	$semester=$_POST['semester'];
                   	$status=$_POST['status'];
                   	$typeofstudent=$_POST['typeofstudent'];
                   	$advicing_code=$_POST['advicing_code'];
                   	


                   		

                    		$query=("SELECT
										a.*,
										b.curriculum_id,
										c.*,
										d.*,
										e.sys_id,
										e.academic_yr,
										e.yr_level,
										e.section,
										e.term,
										f.department_id,
										f.department_code
										-- g.*

										 FROM enrolled_subjects a JOIN class_schedule b ON a.enrollment_code= b.enrollment_code
										 JOIN subjects c ON c.subject_code = b.subject_code
										 JOIN students_master_file d ON d.student_id = a.student_id
										 JOIN class_schedule e ON e.sys_id=e.sys_id
										 JOIN department f ON f.department_id=f.department_id
										 -- JOIN  payments g ON g.student_id=d.student_id

										 WHERE a.subject_code = b.subject_code AND a.student_id='$student_id' ");
                	
			    
                    $result = sqlsrv_query( $conn, $query );

                 



                     if(sqlsrv_has_rows($result)==1)

                    {
                        
                        			
						
                                    if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
                                                {
                                                	
														// $due=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);



?>
<?php?>

<script>
	$(document).ready(function(){	
		$('#generate').click(function(){
			
			var advicing_code = $('#advicing_code').val();
			
			
			$.ajax({
				url:"include/tally.php",
				type:"POST",
				data:{a: advicing_code},
				success:function(data)
				{
					$('#displayData').html(data);
				}
			})
		});
	});
	$(document).ready(function(){	
		$('#generate1').click(function(){
			
			var student_id = $('#student_id').val();
			
			
			$.ajax({
				url:"include/balance.php",
				type:"POST",
				data:{a:student_id},
				success:function(data)
				{
					$('#displayData2').html(data);

				}
			})
		});
	});
</script>

                                            <div class="col-md-4">
                                                <label class="control-label">DEPARTMENT</label>
                                                <input type="text" class="form-control" name="department" value="<?php echo $row["department_code"];?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row gutter">
                                            <div class="col-md-4">
                                                <label class="control-label">FIRSTNAME</label> 
                                                <input type="text" class="form-control" name="fname" value="<?php echo $row["fname"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">LASTNAME</label>
                                                <input type="text" class="form-control" name="lname" value="<?php echo $row["lname"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">MIDINITIAL</label>
                                                <input type="text" class="form-control" name="mname"
                                                value="<?php echo $row["mname"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">STATUS</label>
                                                <input type="text" class="form-control" name="status"
                                                value="<?php echo $row["status"];?>">
                                            </div>
                                           
                                            <div class="col-md-4">
                                                <label class="control-label">ACADEMIC YEAR</label>
                                                <input type="text" class="form-control" name="year"
                                                value="<?php echo $row["sy_admitted"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">SECTION</label>
                                                <input type="text" class="form-control" name="section" value="<?php echo $row["section"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">SEMESTER</label>
                                                <input type="text" class="form-control" name="term" value="<?php echo $row["term"];?>">
                                            </div>

                                        </div>
   

                                       
                                      <div class="form-group">
                                        <div class="row gutter">

                                        	 <div class="col-md-4">
                                                <label class="control-label">ADVICING CODE</label>
                                                <input type="text" class="form-control" id="advicing_code" name="advicing_code"
                                                value="<?php echo $row["advicing_code"];?>"
                                                 >
                                                 <button type="button" id="generate" class="btn btn-primary">GENERATE!</button>
                                        	</div>
                                        	<div id="displayData"></div>

                                           <!--  <div class="col-md-4">
                                                <label class="control-label">CREDIT LEC</label>
                                                <input type="number" class="form-control" name="credit_lec" value="<?php echo $row["credit_lec"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">CREDIT LAB</label>
                                                <input type="number" class="form-control" name="credit_lab" value="<?php echo $row["credit_lab"]?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">TOTAL UNIT</label>
                                                <input type="number" class="form-control" name="total_credit" value="<?php echo $row['total_credit'];?>">
                                            </div>
 -->
                                            <!-- <div class="col-md-4">
                                                <label class="control-label">BALANCE</label>
                                                <input type="number" class="form-control" id="student_id_balance" value="<?php echo $student_id;?>">
                                                <button type="button" id="generate1" class="btn btn-primary">GENERATE!</button>
                                            </div>
                                            <div id="displayData"></div> -->
                                            <div class="col-md-4">
                                                <label class="control-label">BALANCE</label>
                                                <input type="text" class="form-control" id="student_id" name="balance"
                                                value="<?php echo $row["student_id"];?>"
                                                 >
                                                 <button type="button" id="generate1" class="btn btn-primary">GENERATE!</button>
                                        	</div>
                                        	<div id="displayData2"></div>

                                            <div class="col-md-4">
                                                <label class="control-label">MISC THIS YEAR</label>
                                                <input type="number" class="form-control" name="misyear">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">LAB THIS YEAR</label>
                                                <input type="number" class="form-control" name="labyear">
                                            </div>
                                             <div class="col-md-4">
                                                <label class="control-label">IS</label>
                                                <input type="text" class="form-control" name="is_scholarship" value="<?php echo $row["is_approve"];?>">
                                            </div>

                                       	</div>

                                    </div>

                             
 	     



                                            <div class="form-group">
                                            	<div class="row gutter">
                                            	<div class="col-md-12 selectContainer">
                                                <label class="control-label">TYPE OF PAYMENT</label>
                                                <select class="form-control" name="typeofpayment">
                                                    <option value="enrollment">ENROLLMENT</option>
                                                       
                                                </select>
                                            </div>
                                            
                                            
                                           
     <?PHP 

                               }
                    }
            

                else
                {
                echo "<script>alert(' NO RECORD FOUND! .')</script>";
                }
                
                

                
?>
	
<?PHP }?>  
                                        
                                        -fees-
                                        <br>
                                        	<div class="col-md-4">
                                                <label class="control-label">TUITION</label>
                                                <input type="number" class="form-control" name="tuition" value="0">
                                            </div>
                                            	<div class="col-md-4">
		                                                <label class="control-label">MISC</label>
		                                                <input type="number" class="form-control" name="misc" value="0">
                                            	</div>

                                            	<div class="col-md-4">
                                                <label class="control-label">LABORATORY</label>
                                                <input type="number" class="form-control" name="labfee" value="0">
                                            	</div>
                                            	<div class="col-md-4">
                                                <label class="control-label">SCHOOL PUB</label>
                                                <input type="number" class="form-control" name="schoolpub" value="0">
                                            	</div>
                                            	<div class="col-md-4">
                                                <label class="control-label">SSC</label>
                                                <input type="number" class="form-control" name="ssc" value="0">
                                            	</div>
                                            </div>

                                        </div>    			


                                    <div class="form-group">
                                        <label class="control-label">Review</label>
                                        <textarea class="form-control" name="review" rows="5" placeholder="This will be posted in time"></textarea>
                                    </div>
                                   
                                    <button type="submit" name="save" class="btn btn-sUCCESS btn-lg">Submit</button>
                                </form>
                         </div>
                			</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->


		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};

		new Chartist.Line('#headline-chart', data, options);


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [{
				name: 'series-real',
				data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
			}, {
				name: 'series-projection',
				data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
			}]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

		new Chartist.Line('#visits-trends-chart', data, options);


		// visits chart
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[6384, 6342, 5437, 2764, 3958, 5068, 7654]
			]
		};

		options = {
			height: 300,
			axisX: {
				showGrid: false
			},
		};

		new Chartist.Bar('#visits-chart', data, options);


		// real-time pie chart
		var sysLoad = $('#system-load').easyPieChart({
			size: 130,
			barColor: function(percent) {
				return "rgb(" + Math.round(200 * percent / 100) + ", " + Math.round(200 * (1.1 - percent / 100)) + ", 0)";
			},
			trackColor: 'rgba(245, 245, 245, 0.8)',
			scaleColor: false,
			lineWidth: 5,
			lineCap: "square",
			animate: 800
		});

		var updateInterval = 3000; // in milliseconds

		setInterval(function() {
			var randomVal;
			randomVal = getRandomInt(0, 100);

			sysLoad.data('easyPieChart').update(randomVal);
			sysLoad.find('.percent').text(randomVal);
		}, updateInterval);

		function getRandomInt(min, max) {
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}

	});
	</script>
</body>

</html>
