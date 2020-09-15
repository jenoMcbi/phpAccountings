
<?php 
include('connect.php');
	$test = $_POST['a'];


	$query=("SELECT
										COUNT(a.advicing_code) as advicing_code,
										sum(c.credit_lab) as credit_lab,
										sum(c.credit_lec) as credit_lec,
										sum(total_credit) as total_credit

										 FROM enrolled_subjects a JOIN class_schedule b ON a.enrollment_code= b.enrollment_code
										 JOIN subjects c ON c.subject_code = b.subject_code
										 

										 WHERE a.subject_code = b.subject_code AND c.curriculum_id=b.curriculum_id  and a.advicing_code='$test'");
                	
			    
                    $result = sqlsrv_query( $conn, $query );
                    if($result){

                    	 while ($row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC)) {

      

 				?>
 											<div class="col-md-4">
                                                <label class="control-label">CREDIT LEC</label>
                                                <input type="number" class="form-control" name="credit_lec" value="<?php echo $row["credit_lec"];?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">CREDIT LAB</label>
                                                <input type="number" class="form-control" name="credit_lab" value="<?php echo $row["credit_lab"]?>">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">TOTAL UNIT</label>
                                                <input type="number" class="form-control" name="total_credit" value="<?php echo $row['total_credit'];?>">
                                            </div>
					<?php 	}
                    }
                    else{
                    	 die( print_r( sqlsrv_errors(), true) );
                    }
                   
                    
     ?>