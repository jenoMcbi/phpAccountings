<?php
			include'functions/save1.php';
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
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<!-- <form class="navbar-form navbar-left">
					<div class="input-group">
						<input type="text" value="" class="form-control" placeholder="Search dashboard...">
						<span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
					</div>
				</form> -->
				<!-- <div class="navbar-btn navbar-btn-right">
					<a class="btn btn-success update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
				</div> -->
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<!-- <span class="badge bg-danger">5</span> -->
							</a>
							<ul class="dropdown-menu notifications">
								<!-- <li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li> -->
							</ul>
						</li>
						<!-- <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
							<!-- 	<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="addstudent.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Add New Students</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Payment forms</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="enrollment.php" class="">Enrollment</a></li>
									<li><a href="periodic.php" class="">Periodical Exam</a></li>
									<li><a href="entrance.php" class="">Entrance Exam</a></li>
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
									<li><a href="entrancelog.php" class="">Entrance Logs</a></li>
									<li><a href="otherslog.php" class="">Others Logs</a></li>
								</ul>
							</div>
						</li>
						<!-- <li><a href="paymentlog.php" class=""><i class="lnr lnr-cog"></i> <span>Payments Logs</span></a></li> -->
						
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>List</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									<li><a href="student.php" class="">Studens List</a></li>
									<li><a href="schoolar.php" class=""> CHED Schoolars</a></li>
									<li><a href="gov.php" class="">Goverment Schoolar</a></li>
									<li><a href="fisher.php" class="">Fisher Folks Schoolar</a></li>
								</ul>
							</div>
						</li>
						<li><a href="assesment.php" class=""><i class="lnr lnr-dice"></i> <span>Assesment Slip</span></a></li>
						<li><a href="notification.php" class=""><i class="lnr lnr-alarm"></i> <span>Notifications</span></a></li>
						
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



                                            <div class="col-md-4">
                                                <label class="control-label">OR NUMBER</label>
                                                <input type="text" class="form-control" name="ornumber">
                                            </div>

                                            <div class="col-md-8">
                                                <label class="control-label">ID NUMBER</label>
                                                <input type="text" class="form-control" name="student_id">
                                                 <button type="submit" name="get" class="btn btn-primary">GET ID INFORMATION!</button>
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
                   	


                	
			                	$query=("SELECT
			                			 subjects.subject_code,
			                			 subjects.credit_lec,
			                			 subjects.credit_lab,
			                			 subjects.total_credit,
										 enrolled_subjects.enrollment_code,
										 enrolled_subjects.subject_code,
									     students_master_file.student_id,
									     students_master_file.fname,
									     students_master_file.lname,
									     students_master_file.mi,
									     students_master_file.department,
									     students_master_file.year,
									     students_master_file.section,
									     students_master_file.semester,
									     students_master_file.status,
									     students_master_file.typeofstudent
									from subjects JOIN enrolled_subjects on enrolled_subjects.student_id=enrolled_subjects.student_id
									JOIn students_master_file on enrolled_subjects.student_id=students_master_file.student_id
									where students_master_file.student_id='$student_id' ORDER BY students_master_file.student_id DESC");

                    //$query=("SELECT * from chairperson where idnumber='$idnumber'");
                    $result = sqlsrv_query( $conn, $query );

                     if(sqlsrv_has_rows($result)==1)

                    {
                        
                        			
						
                                    if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
                                                {
                                                	// $total += $row['credit_lec'];
                                                	// $total2+=$row['credit_lab'];
                                                	// $all=($total+$total2);

                                       

                                                	//$total=($row['credit_lab'])+($row['credit_lec']);	
                                        	
             //                                    	$tuition1=($row['unit'] * 150 + $row['balance']);

													// $due=($row['unit']* 150 +$row['miscyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']);
													// $due1=($due-$row['peramount']);
													



?>
<?php?>
                                            <div class="col-md-4">
                                                <label class="control-label">DEPARTMENT</label>
                                                <input type="text" class="form-control" name="department" value="<?php echo $row["department"];?>">
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
                                                <input type="text" class="form-control" name="mi"
                                                value="<?php echo $row["mi"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">STATUS</label>
                                                <input type="text" class="form-control" name="status"
                                                value="<?php echo $row["status"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">TYPE OF STUDENT</label>
                                                <input type="text" class="form-control" name="typeofstudent"
                                                value="<?php echo $row["typeofstudent"];?>">
                                            </div>
                                            <div class="col-md-4 selectContainer">
                                                <label class="control-label">YEAR</label>
                                                <select class="form-control" name="year">
                                                    <option value="firstyear">First Year</option>
                                                    <option value="secondyear">Second Year</option>
                                                    <option value="thirdyear">Third Year</option>
                                                    <option value="fourthyear">Fourth Year</option>   
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">SECTION</label>
                                                <input type="text" class="form-control" name="section" value="<?php echo $row["section"];?>">
                                            </div>
                                            <div class="col-md-4 selectContainer">
                                                <label class="control-label">SEMESTER</label>
                                                <select class="form-control" name="semester">
                                                    <option value="firstsem">First Semester</option>
                                                    <option value="secondsem">Second Semester</option>
                                                    <option value="summer">Summer</option>
                                                </select>
                                            </div>
                                            <!-- <div class="col-md-4"> -->
                                            <!-- <div class="col-md-4">
                                                <label class="control-label">ENROLLMENT CODE</label>
                                                <input type="text" class="form-control" name="enrollment_code" value="<?php echo $row["enrollment_code"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">SUBJECT CODE</label>
                                                <input type="text" class="form-control" name="subject_code" value="<?php echo $row["subject_code"];?>">
                                            </div> -->

                                        </div>
                                      <div class="form-group">
                                        <div class="row gutter">
                                            <div class="col-md-4">
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

                                            <div class="col-md-4">
                                                <label class="control-label">BALANCE</label>
                                                <input type="number" class="form-control" name="balance" value="<?php echo $due1;?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">MISC THIS YEAR</label>
                                                <input type="number" class="form-control" name="miscyear">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">LAB THIS YEAR</label>
                                                <input type="number" class="form-control" name="labyear">
                                            </div>

                                       	</div>

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
                                            <div class="form-group">
                                            	<div class="row gutter">
                                            	<div class="col-md-12 selectContainer">
                                                <label class="control-label">TYPE OF PAYMENT</label>
                                                <select class="form-control" name="typeofpayment">
                                                    <option value="enrollment">ENROLLMENT</option>
                                                       
                                                </select>
                                            </div>
                                            
                                            
                                           

                                        
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
