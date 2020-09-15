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
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<link rel="stylesheet" href="../assets/css/datatables/dataTables.bs.min.css" >
    <link rel="stylesheet" href="../assets/css/datatables/autoFill.bs.min.css" >
    <link rel="stylesheet" href="../assets/css/datatables/fixedHeader.bs.css" >
    <link rel="stylesheet" href="../assets/css/datatables/buttons.bs.css" >
</head>

<body>

<?php

			//include'include/connect.php';
			//$sam=4;
			$msg= 0;
				 if(isset($_POST['get']))
				  {
				  	
				  	$tuition=$_POST['tuition'];

					$query=("SELECT * from enrollment");
					$result = sqlsrv_query( $conn, $query );

		
					
													$tuition=($row['tuition'] *.10);

													echo "<tr>".$tuition."</tr>";
					
				
				}

				
?>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
</body>
	<script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/sparkline/retina.js"></script>
    <script src="../assets/js/scrollup.min.js"></script>
    <script src="../assets/js/d3.min.js"></script>
    <script src="../assets/js/heatmap/cal-heatmap.min.js"></script>
    <script src="../assets/js/heatmap/cal-heatmap.custom.js"></script>
    <script src="../assets/js/datatables/dataTables.min.js"></script>
    <script src="../assets/js/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/datatables/dataTables.tableTools.js"></script>
    <script src="../assets/js/datatables/autoFill.min.js"></script>
    <script src="../assets/js/datatables/autoFill.bootstrap.min.js"></script>
    <script src="../assets/js/datatables/fixedHeader.min.js"></script>
    <script src="../assets/js/datatables/buttons.min.js"></script>
    <script src="../assets/js/datatables/flash.min.js"></script>
    <script src="../assets/js/datatables/jszip.min.js"></script>
    <script src="../assets/js/datatables/pdfmake.min.js"></script>
    <script src="../assets/js/datatables/vfs_fonts.js"></script>
    <script src="../assets/js/datatables/html5.min.js"></script>
    <script src="../assets/js/datatables/buttons.print.min.js"></script>
    <script src="../assets/js/datatables/custom-datatables.js"></script>
    <script src="../assets/js/common.js"></script>

</html>
