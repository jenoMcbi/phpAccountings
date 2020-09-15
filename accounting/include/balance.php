
<?php 
include('connect.php');
	$test1 = $_POST['a'];


	// $query=("SELECT
 //                                        a.*,
 //                                        b.curriculum_id,
 //                                        c.*,
 //                                        d.*,
 //                                        e.sys_id,
 //                                        e.academic_yr,
 //                                        e.yr_level,
 //                                        e.section,
 //                                        e.term,
 //                                        f.department_id,
 //                                        f.department_code
 //                                        g.*

 //                                         FROM enrolled_subjects a JOIN class_schedule b ON a.enrollment_code= b.enrollment_code
 //                                         JOIN subjects c ON c.subject_code = b.subject_code
 //                                         JOIN students_master_file d ON d.student_id = a.student_id
 //                                         JOIN class_schedule e ON e.sys_id=e.sys_id
 //                                         JOIN department f ON f.department_id=f.department_id
 //                                         JOIN  payments g ON g.student_id=d.student_id

 //                                         WHERE a.subject_code = b.subject_code AND a.student_id='$test' ");
    $query=("SELECT * from payments where student_id='$test1' ORDER BY id DESC");
                    
                
                    $result = sqlsrv_query( $conn, $query );

                 



                     if($result)

                    {
                        
                                    
                        
                                    if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
                                                {
                                                        $due=($row['total_credit']* 150 +$row['misyear']+$row['labyear']+$row['balance']-$row['tuition']-$row['misc']-$row['labfee']-$row['peramount']);
      

 				?>
 											<div class="col-md-4">
                                                <label class="control-label">BALANCE</label>
                                                <input type="number" class="form-control" name="balance" value="<?php echo $due;?>">
                                            </div>
					<?php 	}
                    }
                    else{
                    	 die( print_r( sqlsrv_errors(), true) );
                    }
                   
                    
     ?>