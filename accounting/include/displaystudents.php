<!--  -->
 <?php 	

$sql = "SELECT * FROM students ";
$stmt = sqlsrv_query( $conn, $sql );


									while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
												{
													
													echo "<tr >";
													echo "<td>".$Date = $row['addDate']->format('d/m/Y')."</td>";
													echo "<td>". $row['idnumber']. "</td>";
													echo "<td>". $row['department']. "</td>";
													echo "<td>". $row['firstname']. "</td>";
													echo "<td>". $row['lastname']. "</td>";
													echo "<td>". $row['mi']. "</td>";
													echo "<td>". $row['status']. "</td>";
													echo "<td>". $row['gender']. "</td>";
													// echo "<td>".$Date = $row['dob']->format('d/m/Y')."</td>";
													// echo "<td>". $row['address']. "</td>";
													// echo "<td>". $row['tos']."</td>";
												
													echo "<td>". $row['review']. "</td>";
																					
													

													//echo "</tr>";


//sqlsrv_free_stmt( $stmt);

?>

					<td colspan="2"><a href="upp.php?id=<?php echo $row["id"]; ?>"><button type="submit" name="save" class="btn btn-success">modify</button></a>
					
				
								
												<?php  
											
												echo "</tr>";
												}

												?>
