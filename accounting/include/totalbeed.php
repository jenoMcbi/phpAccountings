<!--  -->
 <?php 	
 //include'connect.php';										
$sql = "SELECT count(*) id from enrollment where department='beed'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

									while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
												{
													echo "<tr >";
												
													echo "<td> <h4>". $row['id']. " </h4> </td> ";
													
													echo "</tr>";
}

sqlsrv_free_stmt( $stmt);?>
