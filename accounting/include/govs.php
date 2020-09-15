 <?php 	

$sql="SELECT * from enrollment where tos='govschoolar'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

												// echo "<table class='table table-hover'><tr><th>Subject</th><th>Sender</th><th>message</th></tr>";
												while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
												{
													// echo "<table class='info'>";
													// $tot = ($row['tuition'] + $row['misc']+$row['peramount']+$row['toramount']+$row['othersamount']+$row['entrance']);
													echo "<tr >";
													
													echo "<td>".$row['idnumber']."</td>";
													//echo "<td>". $row['ornumber']. "</td>";
													echo "<td>".$row['firstname']."</td>";
													echo "<td>".$row['lastname']."</td>";
													echo "<td>".$row['department']."</td>";
													echo "<td>".$row['tos']."</td>";


													// echo "<td>".$row['typeofpayment']."</td>";
													// echo "<td>".$row['tuition']."</td>";
													//echo "<td>".$row['bal']."</td>";
													//echo "<td>".$row['schoolpub']."</td>";
													// echo "<td>".function sum();
													// echo "<td>".$tot."</td>";
													// echo "<td>".$row['toramount']."</td>";
													// echo "<td>".$row['othersamount']."</td>";

													//echo "<td>".$Date = $row['transactiondate']->format('d/m/Y')."</td>";
													// echo "<td>". $row['review']. "</td>";

								

													//echo "</tr>";
													// echo "</table>";
												

												// echo "</table>";

// sqlsrv_free_stmt( $stmt);
?>
<!-- <td colspan="2"><a href="upp2.php?id=<?php echo $row["id"]; ?>"> <div class="icon-4x"> <span class="icon-mode_edit" type="submit" name="save"></span></div> -->
				
				
								
												<?php  
											
												echo "</tr>";
												}
												?>
