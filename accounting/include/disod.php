 <?php 	
 // include'connect.php';		

$sql="SELECT 
		a.*,
		b.*,
		c.*
		FROM students_master_file a JOIN  other_payments b ON a.student_id=b.student_id
		JOIN department c ON c.department_id=c.department_id";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

												// echo "<table class='table table-hover'><tr><th>Subject</th><th>Sender</th><th>message</th></tr>";
												while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
												{
													// echo "<table class='info'>";
													// $tot = ($row['tuition'] + $row['misc']+$row['peramount']+$row['entranceexam']+$row['others']+$row['entrance']);
													echo "<tr >";
													echo "<td>".$Date = $row['transactiondate']->format('d/m/Y')."</td>";
													echo "<td>".$row['ornumber']."</td>";
													echo "<td>". $row['student_id']. "</td>";
												    echo "<td>". $row['department_code']. "</td>";
													echo "<td>".$row['fname']."</td>";
													echo "<td>".$row['lname']."</td>";
													echo "<td>".$row['mname']."</td>";
												    echo "<td>".$row['paymenttype']."</td>";
													
													 echo "<td>".$row['amount']."</td>";
													// echo "<td>".$row['otherterm']."</td>";
													echo "<td>".$row['review']."</td>";
													// echo "<td>".$tot."</td>";
													// echo "<td>".$row['toramount']."</td>";
													// echo "<td>".$row['othersamount']."</td>";

													
													//echo "<td>". $row['review']. "</td>";

								

													//echo "</tr>";
													// echo "</table>";
												

												// echo "</table>";

// sqlsrv_free_stmt( $stmt);
?>
			<td colspan="2"><a href="upp5.php?id=<?php echo $row["id"]; ?>"><button type="submit" name="save" class="btn btn-success">modify</button></a>
				
				
								
												<?php  
											
												echo "</tr>";
												}
												?>
