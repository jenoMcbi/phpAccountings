<?php
include'include/connect.php';
$msg= 0;
 if(isset($_POST['save']))
  {

$transactiondate=$_POST['transactiondate'];
$ornumber=$_POST['ornumber'];
$student_id= $_POST['student_id'];


$balance=$_POST['balance'];
$typeofpayment=$_POST['typeofpayment'];
$peramount=$_POST['peramount'];
$perterm=$_POST['perterm'];
$review=$_POST['review'];

	
 		$current_timestamp = date('Y-m-d H:i:s');
     	$query = "INSERT INTO payments(transactiondate,ornumber,student_id,balance,typeofpayment,peramount,perterm,review)VALUES('{$current_timestamp}','$ornumber','$student_id','$balance','$typeofpayment','$peramount','$perterm','$review')";
		$result = sqlsrv_query($conn, $query);


		if($result)
		{
		 
		     $msg ="2";
		}

		
		else
		{
			
				$msg="1";
		}

}
?>