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
$status=$_POST['status'];
$tos=$_POST['tos'];
$year=$_POST['year'];
$section=$_POST['section'];
$semester=$_POST['semester'];
$unit=$_POST['unit'];
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

$query=("SELECT * from enrollment where idnumber='$idnumber'");

$result=sqlsrv_query($conn,$query);
$query=("SELECT * from chairperson where idnumber='$idnumber'");

$result=sqlsrv_query($conn,$query);




if(sqlsrv_has_rows($result)>0)
{    

		$query=("SELECT * from enrollment where idnumber='$idnumber' and  year='$year' and semester='$semester'");
		$result=sqlsrv_query($conn,$query);

		if(sqlsrv_has_rows($result)>0)
		{
			$msg="4";
		}

		else
		{	
 		$current_timestamp = date('Y-m-d H:i:s');
    	$query = "INSERT INTO enrollment(transactiondate,ornumber,idnumber,department,firstname,lastname,mi,status,tos,year,section,semester,unit,balance,miscyear,labyear,typeofpayment,tuition,misc,labfee,schoolpub,ssc,review)VALUES('{$current_timestamp}','$ornumber','$idnumber','$department','$firstname','$lastname','$mi','$status','$tos','$year','$section','$semester','$unit','$balance','$miscyear','$labyear','$typeofpayment','$tuition','$misc','$labfee','$schoolpub','$ssc','$review')";
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