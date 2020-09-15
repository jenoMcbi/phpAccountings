<?php
include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$transactiondate=$_POST['transactiondate'];
$ornumber=$_POST['ornumber'];
$idnumber= $_POST['idnumber'];
$department= $_POST['department'];

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mi=$_POST['mi'];
//$status=$_POST['status'];
$tos=$_POST['tos'];
$year=$_POST['year'];
$section=$_POST['section'];
$semester=$_POST['semester'];
// $unit=$_POST['unit'];
$balance=$_POST['balance'];
$typeofpayment=$_POST['typeofpayment'];
$peramount=$_POST['peramount'];
$perterm=$_POST['perterm'];
$review=$_POST['review'];

// $query=("SELECT * from enrollment where idnumber='$idnumber'");

// $result=sqlsrv_query($conn,$query);
// $query=("SELECT * from students where idnumber='$idnumber'");

// $result=sqlsrv_query($conn,$query);




// // if(sqlsrv_has_rows($result)>0)
// // {    

// // 		// $query=("SELECT * from enrollment where idnumber='$idnumber' and  perterm='$perterm'");
// // 		// $result=sqlsrv_query($conn,$query);

// // 		// if(sqlsrv_has_rows($result)>0)
// // 		// {
// // 		// 	$msg="6";
// // 		// }

// // 		// else
// // 		// {	
// //  		$current_timestamp = date('Y-m-d H:i:s');
// //     	$query = "INSERT INTO enrollment(transactiondate,ornumber,idnumber,department,firstname,lastname,mi,tos,year,section,semester,balance,typeofpayment,peramount,perterm,review)VALUES('{$current_timestamp}','$ornumber','$idnumber','$department','$firstname','$lastname','$mi','$tos','$year','$section','$semester','$balance','$typeofpayment','$peramount','$perterm','$review')";
// // 		$result = sqlsrv_query($conn, $query);


// // if($result)
// // {
 
// //      $msg ="2";
// // }

// // }
// if(sqlsrv_has_rows($result)>0)
// {    

		$query=("SELECT * from enrollment where idnumber='$idnumber'");
		$result=sqlsrv_query($conn,$query);

		if(sqlsrv_has_rows($result)>0)
		{
			
 		$current_timestamp = date('Y-m-d H:i:s');
     	$query = "INSERT INTO enrollment(transactiondate,ornumber,idnumber,department,firstname,lastname,mi,tos,year,section,semester,balance,typeofpayment,peramount,perterm,review)VALUES('{$current_timestamp}','$ornumber','$idnumber','$department','$firstname','$lastname','$mi','$tos','$year','$section','$semester','$balance','$typeofpayment','$peramount','$perterm','$review')";
		$result = sqlsrv_query($conn, $query);


		if($result)
		{
		 
		     $msg ="2";
		}

		}
		else
		{
			
				$msg="1";
		}

}
?>