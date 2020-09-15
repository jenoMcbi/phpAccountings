<?php

$msg= 0;
 if(isset($_POST['save']))
  {

$addDate=$_POST['addDate'];
$idnumber= $_POST['idnumber'];
$department= $_POST['department'];

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mi=$_POST['mi'];
$status=$_POST['status'];
$typeofstudent=$_POST['typeofstudent'];
$year=$_POST['year'];
$section=$_POST['section'];
$semester=$_POST['semester'];
$labtype=$_POST['labtype'];
$unitcount=$_POST['unitcount'];
$labcount=$_POST['labcount'];	
$review=$_POST['review'];

$query=("SELECT * from chairperson where idnumber='$idnumber'");

$result=sqlsrv_query($conn,$query);


 if(sqlsrv_has_rows($result)>0)
 {    
 		$msg="1";
 }	
else
{
	$current_timestamp = date('Y-m-d H:i:s');
    $query = "insert into chairperson(addDate,idnumber,department,firstname,lastname,mi,status,typeofstudent,year,section,semester,labtype,unitcount,labcount,review)VALUES('{$current_timestamp}','$idnumber','$department','$firstname','$lastname','$mi','$status','$typeofstudent','$year','$section','$semester','$labtype',$unitcount,$labcount,'$review')";
$result = sqlsrv_query($conn, $query);

	if($result)
{
 
     $msg ="2";
}
}
}
?>
