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
$status=$_POST['status'];
$typeofstudent=$_POST['typeofstudent'];
$year=$_POST['year'];
$section=$_POST['section'];
$semester=$_POST['semester'];
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

$query=("SELECT * from students_master_file where student_id='$student_id'");

$result=sqlsrv_query($conn,$query);
// $query=("SELECT * from payments where student_id='$student_id'");

// $result=sqlsrv_query($conn,$query);




if(sqlsrv_has_rows($result)>0)
{    

		$query=("SELECT * from payments where student_id='$student_id' and  year='$year' and semester='$semester'");
		$result=sqlsrv_query($conn,$query);

		if(sqlsrv_has_rows($result)>0)
		{
			$msg="4";
		}

		else
		{	
 		$current_timestamp = date('Y-m-d H:i:s');
    	$query = "INSERT INTO payments(transactiondate,ornumber,student_id,department,fname,lname,mi,status,typeofstudent,year,section,semester,credit_lec,credit_lab,total_credit,balance,miscyear,labyear,typeofpayment,tuition,misc,labfee,schoolpub,ssc,review)VALUES('{$current_timestamp}','$ornumber','$student_id','$department','$fname','$lname','$mi','$status','$typeofstudent','$year','$section','$semester','$credit_lec','$credit_lab','$total_credit','$balance','$miscyear','$labyear','$typeofpayment','$tuition','$misc','$labfee','$schoolpub','$ssc','$review')";
		$result = sqlsrv_query($conn, $query);


if($result)
{
 
     $msg ="2";
}
}
}	
else
{
	
		$msg="1";
}
}
?>