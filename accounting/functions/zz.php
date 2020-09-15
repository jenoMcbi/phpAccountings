
<?php
include'include/connect.php';
$msg= 0;
 if(isset($_POST['save']))
  {

$transactiondate=$_POST['transactiondate'];
$ornumber=$_POST['ornumber'];
$student_id=$_POST['student_id'];
$credit_lec=$_POST['credit_lec'];
$credit_lab=$_POST['credit_lab'];
$total_credit=$_POST['total_credit'];
$balance=$_POST['balance'];
$misyear=$_POST['misyear'];
$labyear=$_POST['labyear'];
$typeofpayment=$_POST['typeofpayment'];
$tuition=$_POST['tuition'];
$misc=$_POST['misc'];
$labfee=$_POST['labfee'];
$schoolpub=$_POST['schoolpub'];
$is_scholarship=$_POST['is_scholarship'];
$ssc=$_POST['ssc'];
$review=$_POST['review'];


			
 		$current_timestamp = date('Y-m-d H:i:s');
    	$query = "INSERT INTO payments(transactiondate,ornumber,student_id,credit_lec,credit_lab,total_credit,balance,misyear,labyear,typeofpayment,tuition,misc,labfee,schoolpub,is_scholarship,ssc,review)VALUES('{$current_timestamp}','$ornumber','$student_id','$credit_lec','$credit_lab','$total_credit','$balance','$misyear','$labyear','$typeofpayment','$tuition','$misc','$labfee','$schoolpub','$is_scholarship','$ssc','$review')";
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