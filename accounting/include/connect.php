<?php
include'constant.php';
$serverName = "192.168.137.1\SQLEXPRESS"; //serverName\instanceName
$connectionInfo = array( "Database"=>"cpc.enrollment.system", "UID"=>"sa", "PWD"=>"danjo");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if($conn)
{
	// echo"connecetion Established!";
}
else
{
	echo"opps! something went wrong check your Connection!";
	die(print_r(sqlsrv_errors(),TRUE));
}


?>	