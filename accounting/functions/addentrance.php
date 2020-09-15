<?php
include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$transactiondate=$_POST['transactiondate'];
$ornumber=$_POST['ornumber'];
$idnumber= $_POST['idnumber'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mi=$_POST['mi'];
$typeofpayment=$_POST['typeofpayment'];
$entrance=$_POST['entrance'];
$review=$_POST['review'];


 		$current_timestamp = date('Y-m-d H:i:s');
    	$query = "INSERT INTO enrollment(transactiondate,ornumber,idnumber,firstname,lastname,mi,typeofpayment,entrance,review)VALUES('{$current_timestamp}','$ornumber','$idnumber','$firstname','$lastname','$mi','$typeofpayment','$entrance','$review')";
		$result = sqlsrv_query($conn, $query);


if($result)
{
 
     $msg ="2";
}
	
else
{
	
		$msg="6";
}
}
?>