<?php
include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$transactiondate=$_POST['transactiondate'];
$ornumber=$_POST['ornumber'];
$student_id= $_POST['student_id'];
$department= $_POST['department'];

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mi=$_POST['mi'];
//$status=$_POST['status'];
$typeofstudent=$_POST['typeofstudent'];
$year=$_POST['year'];
$section=$_POST['section'];
$semester=$_POST['semester'];
// $unit=$_POST['unit'];
$balance=$_POST['balance'];
$typeofpayment=$_POST['typeofpayment'];
$peramount=$_POST['peramount'];
$perterm=$_POST['perterm'];
$review=$_POST['review'];

		$query=("SELECT * from payments where student_id='$student_id'");
		$result=sqlsrv_query($conn,$query);

		if(sqlsrv_has_rows($result)>0)
		{
			
 		$current_timestamp = date('Y-m-d H:i:s');
     	$query = "INSERT INTO payments(transactiondate,ornumber,student_id,department,fname,lname,mi,typeofstudent,year,section,semester,balance,typeofpayment,peramount,perterm,review)VALUES('{$current_timestamp}','$ornumber','$student_id','$department','$fname','$lname','$mi','$typeofstudent','$year','$section','$semester','$balance','$typeofpayment','$peramount','$perterm','$review')";
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