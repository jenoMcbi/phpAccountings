<?php
include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$adddate=$_POST['adddate'];
$idnumber= $_POST['idnumber'];
$department= $_POST['department'];

$firstname=$_POST['firstname'];
$lastaname=$_POST['lastaname'];
$mi=$_POST['mi'];
$subject_des=$_POST['subject_des'];
$credit_lec=$_POST['credit_lec'];
$credit_lab=$_POST['credit_lab'];	
$total_credit=$_POST['total_credit'];

$query=("SELECT * from student where idnumber='$idnumber'");

$result=sqlsrv_query($conn,$query);


 if(sqlsrv_has_rows($result)>0)
 {    
 		$msg="1";
 }	
else
{
	$current_timestamp = date('Y-m-d H:i:s');
    $query = "insert into student(adddate,idnumber,department,firstname,lastaname,mi,subject_des,credit_lec,credit_lab,total_credit)VALUES('{$current_timestamp}','$idnumber','$department','$firstname','$lastaname','$mi','$subject_des','$credit_lec','$credit_lab','$total_credit')";
$result = sqlsrv_query($conn, $query);

	if($result)
{
 
     $msg ="2";
}
}
}
?>
