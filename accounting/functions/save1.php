<?php
include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$ornumber=$_POST['ornumber'];
$student_id=$_POST['student_id'];
$credit_lec=$_POST['credit_lec'];
$credit_lab=$_POST['credit_lab'];
$total_credit=$_POST['total_credit'];
$balance=$_POST['balance'];
$miscyear=$_POST['miscyear'];
$labyear=$_POST['labyear'];
$typeofpayment=$_POST['typeofpayment'];
$tuition=$_POST['tuition'];
$misc=$_POST['misc'];
$labfee=$_POST['labfee'];
$schoolpub=$_POST['schoolpub'];
$ssc=$_POST['ssc'];
$review=$_POST['review'];


			
 		$current_timestamp = date('Y-m-d H:i:s');
    	$query = "INSERT INTO p1(transactiondate,ornumber,student_id,credit_lec,credit_lab,total_credit,balance,miscyear,labyear,typeofpayment,tuition,misc,labfee,schoolpub,ssc,review)VALUES('{$current_timestamp}','$ornumber','$student_id','$credit_lec','$credit_lab','$total_credit','$balance','$miscyear','$labyear','$typeofpayment','$tuition','$misc','$labfee','$schoolpub','$ssc','$review')";
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