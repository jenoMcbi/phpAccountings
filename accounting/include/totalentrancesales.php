<!--  -->
 <?php 	
 //include'connect.php';										
$sql = "SELECT SUM(amount)  as total FROM other_payments where paymenttype='entranceexam'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

									while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
												{
													echo "<tr >";
													echo "<div style='color: darkblue; text-align: right;'>";
													echo "<td> <h1>". $row['total']. " </h1> </td> ";
													echo "</div>";
													echo "</tr>";
}

sqlsrv_free_stmt( $stmt);?>
