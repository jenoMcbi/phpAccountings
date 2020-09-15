<?php
          
           		 $msg= 0;
                 if(isset($_POST['get2']))
                 


                  {
                   
					$student_id= $_POST['student_id'];
                   	$fname = $_POST['fname'];
                   	$lname =$_POST['lname'];
                   	$enrollment_code=$_POST['enrollment_code'];
                   	$subject_code=$_POST['subject_code'];
                   	$credit_lec=$_POST['credit_lec'];
                   	$credit_lab=$_POST['credit_lab'];
                   	$total_credit=$_POST['total_credit'];
                   	$department=$_POST['department'];
                   	$mi=$_POST['mi'];
                   	$year=$_POST['year'];
                   	$section=$_POST['section'];
                   	$semester=$_POST['semester'];
                   	$status=$_POST['status'];
                   	$typeofstudent=$_POST['typeofstudent'];
                   	


                   			$query=("SELECT * from payments");
                    		$result = sqlsrv_query( $conn, $query );


                    		$query=(" SELECT 
                          COUNT(a.advicing_code),
                          SUM(c.credit_lec) AS credit_lec,
                          SUM(c.credit_lab) AS credit_lab,
                          SUM(total_credit) AS total_credit

                      From enrolled_subjects a JOIN class_schedule b ON a.enrollment_code=b.enrollment_code
                      JOIN subjects c ON c.subject_code = b.subject_code

                      WHERE a.subject_code = b.subject_code AND c.curriculum_id = b.curriculum_id AND a.advicing_code='$advicing_code'");
                	
			    
                    $result = sqlsrv_query( $conn, $query );

                     if(sqlsrv_has_rows($result)==1)

                    {
                        
                        			
						
                                    if( $row = sqlsrv_fetch_array( $result, SQLSRV_FETCH_ASSOC))
                                                {
                                                  echo $row['credit_lec'];
                                                }
                   }
             }
             
             ?>      