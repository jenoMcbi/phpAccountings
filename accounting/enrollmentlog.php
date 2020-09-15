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
	<link rel="stylesheet" href="assets/css/datatables/dataTables.bs.min.css" >
    <link rel="stylesheet" href="assets/css/datatables/autoFill.bs.min.css" >
    <link rel="stylesheet" href="assets/css/datatables/fixedHeader.bs.css" >
    <link rel="stylesheet" href="assets/css/datatables/buttons.bs.css" >
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include 'include/nav.php'; ?>
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
									<li><a href="enrollment.php" class="">Enrollment</a></li>
									<li><a href="periodic.php" class="">Periodical Exam</a></li>
									<!-- <li><a href="entrance.php" class="">Entrance Exam</a></li> -->
									<li><a href="others.php" class="">Others</a></li>
								</ul>
							</div>
						</li>
						
						<!-- <li><a href="paymentlog.php" class=""><i class="lnr lnr-cog"></i> <span>Payments Logs</span></a></li> -->
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
						<li><a href="assesment.php" class=""><i class="lnr lnr-dice"></i> <span>Assesment Slip</span></a></li>
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
					<h3 class="page-title">Enrollment fee form</h3>
					<div class="panel panel-headline">
						<div class="panel-body">
								<div class="panel-body">
                                <div class="table-responsive">
                                    <table  id="copy-print-csv" class="display table table-striped table-bordered no-margin">
                                        <thead>
                                            <tr>
                                                <th>TRANSACTION DATE</th>
                                                <th>OR NUMBER</th>
                                                <th>ID NUMBER</th>
                                                <th>DEPARTMENT</th>
                                                <th>FIRSTNAME</th>
                                                <th>LASTNAME</th>
                                                <th>MIDDLE INITIAL</th>
                                                <th>STATUS</th>
                                                <th>YEAR</th>
                                                <!-- <th>TYPE OF STUDENT</th> -->
                                                <th>SECTION</th>
                                                <th>SEMESTER</th>
                                                <th>UNITS</th>
                                                <th>BALANCE</th>
                                                <th>MISC THIS YEAR</th>
                                                <th>LABORATORY THIS YEAR</th>
                                                <th>TYPE OF PAYMENT</th>
                                                <th>TUITION</th>
                                                <th>MISC</th>
                                                <th>LABORATORY</th>
                                                <th>SCHOOL PUB</th>
                                                <th>SSC</th>
                                                <th>REVIEW</th>
                                                <th>EDIT</th>
                                                

                                            </tr>
                                        </thead>
                                        <tfoot>
                                             
                                        </tfoot>
                                        <tbody>
                                                
                                                    <?php include'include/dislog.php';?>
                                                  
                                        </tbody>
                                    </table>
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
	<script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/sparkline/retina.js"></script>
    <script src="assets/js/scrollup.min.js"></script>
    <script src="assets/js/d3.min.js"></script>
    <script src="assets/js/heatmap/cal-heatmap.min.js"></script>
    <script src="assets/js/heatmap/cal-heatmap.custom.js"></script>
    <script src="assets/js/datatables/dataTables.min.js"></script>
    <script src="assets/js/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/datatables/dataTables.tableTools.js"></script>
    <script src="assets/js/datatables/autoFill.min.js"></script>
    <script src="assets/js/datatables/autoFill.bootstrap.min.js"></script>
    <script src="assets/js/datatables/fixedHeader.min.js"></script>
    <script src="assets/js/datatables/buttons.min.js"></script>
    <script src="assets/js/datatables/flash.min.js"></script>
    <script src="assets/js/datatables/jszip.min.js"></script>
    <script src="assets/js/datatables/pdfmake.min.js"></script>
    <script src="assets/js/datatables/vfs_fonts.js"></script>
    <script src="assets/js/datatables/html5.min.js"></script>
    <script src="assets/js/datatables/buttons.print.min.js"></script>
    <script src="assets/js/datatables/custom-datatables.js"></script>
    <script src="assets/js/common.js"></script>

</html>
