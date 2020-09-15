<?php
include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$transactiondate=$_POST['transactiondate'];
$ornumber=$_POST['ornumber'];
$student_id=$_POST['student_id'];

$paymenttype=$_POST['paymenttype'];
$amount=$_POST['amount'];
$review=$_POST['review'];

// $query=("SELECT * from enrollment where idnumber='$idnumber'");

// $result=sqlsrv_query($conn,$query);
// $query=("SELECT * from students where idnumber='$idnumber'");

// $result=sqlsrv_query($conn,$query);



// $query=("SELECT * from enrollment where idnumber='$idnumber'");
// 		$result=sqlsrv_query($conn,$query);

// 		if(sqlsrv_has_rows($result)>0)
// 		{
			
 		$current_timestamp = date('Y-m-d H:i:s');
    	$query = "INSERT INTO other_payments(transactiondate,ornumber,student_id,paymenttype,amount,review)VALUES('{$current_timestamp}','$ornumber','$student_id','$paymenttype','$amount','$review')";

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
// if(sqlsrv_has_rows($result)>0)
// {    

		
//  		$current_timestamp = date('Y-m-d H:i:s');
//     	$query = "INSERT INTO enrollment(transactiondate,ornumber,idnumber,department,firstname,lastname,mi,typeofpayment,others,otherterm,review)VALUES('{$current_timestamp}','$ornumber','$idnumber','$department','$firstname','$lastname','$mi','$typeofpayment','$others','$otherterm','$review')";
// 		$result = sqlsrv_query($conn, $query);


// if($result)
// {
 
//      $msg ="2";
// }
// //}
// }	
// else
// {
	
// 		$msg="1";
// }
// }
?>