 <?php 	

$sql="SELECT 
		a.*,
		b.*,
		c.*,
		d.*
		from students_master_file a JOIN payments b ON a.student_id=b.student_id
		JOIN class_schedule c ON c.sys_id=b.id
		JOIN department d ON d.department_id=d.department_id where typeofpayment='enrollment' ORDER BY transactiondate DESC";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

											// echo "<table class='table table-hover'><tr><th>Subject</th><th>Sender</th><th>message</th></tr>";
												while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
												{
													// echo "<table class='info'>";
													$due=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']);
													$due1=($due-$row['peramount']);
													echo "<tr >";
													echo "<td>".$Date = $row['transactiondate']->format('d/m/Y')."</td>";
													echo "<td>".$row['ornumber']."</td>";
													echo "<td>". $row['student_id']. "</td>";
													echo "<td>".$row['department_code']."</td>";
													echo "<td>".$row['fname']."</td>";
													echo "<td>".$row['lname']."</td>";
													echo "<td>".$row['mname']."</td>";
													echo "<td>".$row['status']."</td>";
													echo "<td>".$row['academic_yr']."</td>";
													// echo "<td>".$row['tos']."</td>";
													echo "<td>".$row['section']."</td>";
													echo "<td>".$row['term']."</td>";
													echo "<td>".$row['total_credit']."</td>";
													echo "<td>".$due1."</td>";
													echo "<td>".$row['misyear']."</td>";
													echo "<td>".$row['labyear']."</td>";
													echo "<td>".$row['typeofpayment']."</td>";
													echo "<td>".$row['tuition']."</td>";
													echo "<td>".$row['misc']."</td>";
													echo "<td>".$row['labfee']."</td>";
													echo "<td>".$row['schoolpub']."</td>";
													echo "<td>".$row['ssc']."</td>";
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
			<td colspan="2"><a href="upp2.php?id=<?php echo $row["id"]; ?>"><button type="submit" name="save" class="btn btn-success">modify</button></a>
				
				
								
												<?php  
											
												echo "</tr>";
												}
												?>
