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
    <script>


function printPage() {
    window.print();
	
}

</script>
<style type="text/css">
	@media print{
		.print{
			display: none;
		}
	}
</style>
</head>

<body>
<html>



<h5><input style="font-family: Italic; font-size: 13pt; cursor: pointer" type="button" class="print" value="PRINT ASSESSMENT" onclick="printPage()" /></h5>


 

<?php

			// include'include/connect.php';
			//$sam=4;
			$msg= 0;
				 if(isset($_POST['get']))
				  {
				  	// $sam=$_POST['sam'];
				  	$student_id= $_POST['student_id'];
				  	//$transactiondate=$_POST['transactiondate'];
				  	$ornumber=$_POST['ornumber'];
				  	$department=$_POST['department'];
				  	$fname=$_POST['fname'];
				  	$lname=$_POST['lname'];
				  	$tuition=$_POST['tuition'];
				  	$peramount=$_POST['peramount'];
				  	$perterm=$_POST['perterm'];
				  	$misyear=$_POST['misyear'];
				  	$labyear=$_POST['labyear'];


				  	
				  
  	
				 //    $sql = "SELECT * FROM acc_journal";
					// $stmt = sqlsrv_query( $conn, $sql );
					
				  	


				  	$query=("SELECT 
									students_master_file.student_id,
									students_master_file.fname,
									students_master_file.lname,
									students_master_file.mname,
									payments.id,
									payments.transactiondate,
									payments.ornumber,
									payments.student_id,
									payments.credit_lec,
									payments.credit_lab,
									payments.total_credit,
									payments.balance,
									payments.misyear,
									payments.labyear,
									payments.typeofpayment,
									payments.tuition,
									payments.misc,
									payments.labfee,
									payments.peramount,
									payments.perterm,
									payments.review
									from students_master_file JOIN payments on payments.id=id
									where students_master_file.student_id='$student_id' AND payments.student_id='$student_id'");
					// $query=("SELECT 
					// 				students_master_file.student_id,
					// 				students_master_file.fname,
					// 				students_master_file.lname,
					// 				students_master_file.mname,
					// 				students_master_file.status,
					// 				payments.p,
					// 				payments.transactiondate,
					// 				payments.ornumber,
					// 				payments.student_id,
					// 				payments.credit_lec,
					// 				payments.credit_lab,
					// 				payments.total_credit,
					// 				payments.balance,
					// 				payments.misyear,
					// 				payments.labyear,
					// 				payments.typeofpayment,
					// 				payments.tuition,
					// 				payments.misc,
					// 				payments.labfee,
					// 				payments.peramount,
					// 				payments.perterm,
					// 				payments.review,
					// 				e.sys_id,
					// 				e.academic_yr,
					// 				e.yr_level,
					// 				e.section,
					// 				e.term,
					// 				f.department_id,
					// 				f.department_code
					// 				from students_master_file
					// 				JOIN payments on payments.p=p
					// 				JOIN class_schedule e ON e.sys_id=e.sys_id
					// 				JOIN department f ON f.department_id=f.department_id
					// 				where payments.student_id='$student_id'");
					$result = sqlsrv_query( $conn, $query );

					// $query=("SELECT * from stud_list where idnumber='$idnumber'");
				 //  	$result = sqlsrv_query( $conn, $query );

					 if(sqlsrv_has_rows($result)==1)

					{
						
						// $query=("SELECT * from acc_journal where typeofpayment='enrollment'");
						// $result = sqlsrv_query( $conn, $query );

						// 	if(sqlsrv_has_rows($result)==1)
						// 	{

								// $query=("SELECT * from acc_journal WHERE transactiondate=CURDATE()");
								// $result=sqlsrv_query($conn, $query);

								// 	if(sqlsrv_has_rows($result)==1)
								// 	{

						
							
							for($i=1; $i<=100; $i++ )
							{
								
									if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
												{
													// $totlab=($row['credit_lab']) * ($row['labyear']);
													$tuition1=($row['total_credit']) * 150 + ($row['balance']);
													//$due1=($row['units']* 150 +$row['miscyear']+$row['labyear']+$row['bal']);
													$due=($row['total_credit']) * 150 +($row['misyear']) + ($row['labyear'])+($row['balance'])-($row['tuition'])-($row['misc'])-($row['labfee']);
													 // + ($row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']);
													$monthdue=($due)/4;

													$bal=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);

													//1

													//$due2=($row['bal'])-($row['peramount' ])-($row['peramountword']='prelim');

													//$due3=($due2)/3;
													


													

													echo "<br>";
													// echo $totlab;
												    echo "<div class='container-fluid'>PRELIM ASSESMENT SLIP </div>";
													echo "<br>";
													echo "<br>";
													echo"NAME:&nbsp".$row['fname']."";
													echo "<br>";
													echo "<br>";
												    echo "BLOCK CODE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUNITS:&nbsp".$row['total_credit']."";
													echo "<br>";
													echo "<br>";
													echo "IDNUMBER:&nbsp".$row['student_id']."";
													echo "<br>";
													echo "<br>";
													echo "OLD ACCOUNT:&nbsp"."&nbsp&nbsp&nbsp&nbsp".$bal."";
													echo "<br>";
													echo "<br>";
													echo "-FEES-";
													echo "<br>";
													echo "<br>";
													echo "TUITION:&nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$tuition1."";
													echo "<br>";
													echo "<br>";
													echo "LABORATORY: &nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['labyear']."";
													echo "<br>";
													echo "<br>";
													echo "MISCELLANEOUS:&nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row['misyear']."";
													echo "<br>";
													echo "<br>";
													echo "TOTAL DUE:&nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$due."";
													echo "<br>";
													echo "<hr style='color:black'>";
													echo "<br>";
													echo "<br>";
													//echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "MONTHLY DUE: &nbsp"."&nbsp&nbsp".$monthdue."";
													echo "<br>";
													echo "<hr style='color:black'>";

													echo "<table  id='copy-print-csv' class='display table table-striped table-bordered no-margin'>";
													echo "<tr>";
													echo "<td>ORNUMBER</td>";
													echo "<td>DESCRIPTION</td>";
													echo "<td>DATE</td>";
													echo "<td>AMOUNT</td>";
													echo "<td>BALANCE</td>";
													echo "</tr>";
													echo "<tr><td>".$row['ornumber']."</td><td>".$row['review']."</td><td>".$Date = $row['transactiondate']->format('d/m/Y')."</td><td>".$row['peramount']."</td><td>".$due."</td></tr>";


													//echo"</table>";


													echo "<br>";
													echo "<br>";
													echo "<br>";
													echo "<br>";


												}

									if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
												{
													$tuition1=($row['total_credit']) * 150 + ($row['balance']);
													//$due1=($row['units']* 150 +$row['miscyear']+$row['labyear']+$row['bal']);
													$due1=($row['balance'])-($row['peramount' ])-($row['perterm']='prelim');
													$monthdue=($due1)/3;

													$bal=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);

													
													//$due3=($due2)/3;
													

													//2
													//echo "<div style='height: 100%; width: 800px; border:1px solid;'>";
													echo "<br>";
													echo "MIDTERM ASSESMENT SLIP";
													echo "<br>";
													echo "<br>";
													echo"NAME:&nbsp".$row['fname']."&nbsp&nbsp&nbsp&nbspSCHOOLYEAR:&nbsp";
													echo "<br>";
													echo "<br>";
													echo "BLOCK CODE:&nbsp&nbsp&nbsp&nbsp&nbspUNITS:&nbsp".$row['total_credit']."";
													echo "<br>";
													echo "<br>";
													echo "IDNUMBER:&nbsp".$row['student_id']."";
													echo "<br>";
													echo "<br>";
													echo "OLD ACCOUNT:&nbsp"."".$bal."";
													echo "<br>";
													echo "<br>";
													echo "-FEES-";
													echo "<br>";
													echo "<br>";
													echo "TUITION:&nbsp"."".$tuition1."";
													echo "<br>";
													echo "<br>";
													echo "LABORATORY: &nbsp".$row['labyear']."";
													echo "<br>";
													echo "<br>";
													echo "MISCELLANEOUS:&nbsp".$row['misyear']."";
													echo "<br>";
													echo "<br>";
													echo "TOTAL DUE:&nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bal."";
													echo "<br>";
													echo "________________________________________________________________________________________________________________________________________";
													echo "<br>";
													echo "<br>";
													//echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "MONTHLY DUE: &nbsp"."&nbsp&nbsp".$monthdue."";
													echo "<br>";
													echo "<hr style='color:black'>";
													//echo "<table class='table table-striped'>";
													// echo "<tr>";
													// echo "<td>ORNUMBER</td>";
													// echo "<td>DESCRIPTION</td>";
													// echo "<td>DATE</td>";
													// echo "<td>AMOUNT</td>";
													// echo "<td>BALANCE</td>";
													// echo "</tr>";
													echo "<tr><td>".$row['ornumber']."</td><td>".$row['review']."</td><td>".$Date = $row['transactiondate']->format('d/m/Y')."</td><td>".$row['peramount']."</td><td>".$due1."</td></tr>";


													//echo"</table>";


												}
												if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
												{
													$tuition1=($row['total_credit']) * 150 + ($row['balance']);
													//$due1=($row['units']* 150 +$row['miscyear']+$row['labyear']+$row['bal']);
													$due2=($row['balance'])-($row['peramount' ])-($row['perterm']='midterm');
													$monthdue=($due2)/3;
													// $bal=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);
													$bal=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);

													
													//$due3=($due2)/3;
													
													//3

													//echo "<div style='height: 100%; width: 800px; border:1px solid;'>";
													echo "<br>";
													echo "SEMI - FINAL ASSESMENT SLIP";
													echo "<br>";
													echo "<br>";
													echo"NAME:&nbsp".$row['fname']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSCHOOLYEAR:&nbsp";
													echo "<br>";
													echo "<br>";
													echo "BLOCK CODE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUNITS:&nbspUNITS:&nbsp".$row['total_credit']."";
													echo "<br>";
													echo "<br>";
													echo "IDNUMBER:&nbsp".$row['student_id']."";
													echo "<br>";
													echo "<br>";
													echo "OLD ACCOUNT:&nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$bal."";
													echo "<br>";
													echo "<br>";
													echo "-FEES-";
													echo "<br>";
													echo "<br>";
													echo "TUITION:&nbsp"."nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$tuition1."";
													echo "<br>";
													echo "<br>";
													echo "LABORATORY: &nbsp".$row['labyear']."";
													echo "<br>";
													echo "<br>";
													echo "MISCELLANEOUS:&nbsp".$row['misyear']."";
													echo "<br>";
													echo "<br>";
													echo "TOTAL DUE:&nbsp"."nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$due2."";
													echo "<br>";
													echo "<hr style='color:black'>";
													echo "<br>";
													echo "<br>";
													//echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "MONTHLY DUE: &nbsp"."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$monthdue."";
													echo "<br>";
													echo "<hr style='color:black'>";
													//echo "<table class='table table-striped'>";
													// echo "<tr>";
													// echo "<td>ORNUMBER</td>";
													// echo "<td>DESCRIPTION</td>";
													// echo "<td>DATE</td>";
													// echo "<td>AMOUNT</td>";
													// echo "<td>BALANCE</td>";
													// echo "</tr>";
													echo "<tr><td>".$row['ornumber']."</td><td>".$row['review']."</td><td>".$Date = $row['transactiondate']->format('d/m/Y')."</td><td>".$row['peramount']."</td><td>".$due2."</td></tr>";


													//echo"</table>";


												}
												if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
												{
													$tuition1=($row['total_credit']) * 150 + ($row['balance']);
													//$due1=($row['units']* 150 +$row['miscyear']+$row['labyear']+$row['bal']);
													$due3=($row['balance'])-($row['peramount' ])-($row['perterm']='semifinal');
													$monthdue=($due3)/2;
													$bal=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);

													
													//$due3=($due2)/3;
													

													//4
													//echo "<div style='height: 100%; width: 800px; border:1px solid;'>";
													echo "<br>";
													echo "FINAL ASSESMENT SLIP";
													echo "<br>";
													echo "<br>";
													echo"NAME:&nbsp".$row['fname']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSCHOOLYEAR:&nbsp";
													echo "<br>";
													echo "<br>";
													echo "BLOCK CODE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUNITS:&nbspUNITS:&nbsp".$row['total_credit']."";
													echo "<br>";
													echo "<br>";
													echo "IDNUMBER:&nbsp".$row['student_id']."";
													echo "<br>";
													echo "<br>";
													echo "OLD ACCOUNT:&nbsp"."".$bal."";
													echo "<br>";
													echo "<br>";
													echo "-FEES-";
													echo "<br>";
													echo "<br>";
													echo "TUITION:&nbsp"."".$tuition1."";
													echo "<br>";
													echo "<br>";
													echo "LABORATORY: &nbsp".$row['labyear']."";
													echo "<br>";
													echo "<br>";
													echo "MISCELLANEOUS:&nbsp".$row['misyear']."";
													echo "<br>";
													echo "<br>";
													echo "TOTAL DUE:&nbsp".$due3."";
													echo "<br>";
													echo "<hr style='color:black'>";
													echo "<br>";
													echo "<br>";
													//echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "<hr style='color:black'>";
													//echo "<table class='table table-striped'>";
													// echo "<tr>";
													// echo "<td>ORNUMBER</td>";
													// echo "<td>DESCRIPTION</td>";
													// echo "<td>DATE</td>";
													// echo "<td>AMOUNT</td>";
													// echo "<td>BALANCE</td>";
													// echo "</tr>";
													echo "<tr><td>".$row['ornumber']."</td><td>".$row['review']."</td><td>".$Date = $row['transactiondate']->format('d/m/Y')."</td><td>".$row['peramount']."</td><td>".$due3."</td></tr>";

													if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
												{
													$tuition1=($row['total_credit']) * 150 + ($row['balance']);
													//$due1=($row['units']* 150 +$row['miscyear']+$row['labyear']+$row['bal']);
													$due4=($row['balance'])-($row['peramount' ])-($row['perterm']='final');
													$monthdue=($due4);
													$bal=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);

													
													//$due3=($due2)/3;
													

													//4
													//echo "<div style='height: 100%; width: 800px; border:1px solid;'>";
													echo "<br>";
													echo "FINAL ASSESMENT SLIP";
													echo "<br>";
													echo "<br>";
													echo"NAME:&nbsp".$row['fname']."&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSCHOOLYEAR:&nbsp";
													echo "<br>";
													echo "<br>";
													echo "BLOCK CODE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUNITS:&nbspUNITS:&nbsp".$row['total_credit']."";
													echo "<br>";
													echo "<br>";
													echo "IDNUMBER:&nbsp".$row['student_id']."";
													echo "<br>";
													echo "<br>";
													echo "OLD ACCOUNT:&nbsp".$bal."";
													echo "<br>";
													echo "<br>";
													echo "-FEES-";
													echo "<br>";
													echo "<br>";
													echo "TUITION:&nbsp".$tuition1."";
													echo "<br>";
													echo "<br>";
													echo "LABORATORY: &nbsp".$row['labyear']."";
													echo "<br>";
													echo "<br>";
													echo "MISCELLANEOUS:&nbsp".$row['misyear']."";
													echo "<br>";
													echo "<br>";
													echo "TOTAL DUE:&nbsp".$due4."";
													echo "<br>";
													echo "<hr style='color:black'>";
													echo "<br>";
													echo "<br>";
													//echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "MONTHLY DUE: &nbsp".$monthdue."";
													echo "<br>";
													echo "<hr style='color:black'>";
													//echo "<table class='table table-striped'>";
													// echo "<tr>";
													// echo "<td>ORNUMBER</td>";
													// echo "<td>DESCRIPTION</td>";
													// echo "<td>DATE</td>";
													// echo "<td>AMOUNT</td>";
													// echo "<td>BALANCE</td>";
													// echo "</tr>";
													echo "<tr><td>".$row['ornumber']."</td><td>".$row['review']."</td><td>".$Date = $row['transactiondate']->format('d/m/Y')."</td><td>".$row['peramount']."</td><td>".$due4."</td></tr>";


													echo"</table>";

													

													


													

												}
												echo "</div>";

							}

							//end of 4 perdiod

						 }

												
					}
			
				else
				{
				echo "<script>alert(' NO ID Number .')</script>";
			    }
				
				}

				
?>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
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
