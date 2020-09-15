<?php 
	 include'connect.php';		
	 
	 function getStudent($student_id = null)
	 {
	 	global $conn;

	 	$sql = "SELECT  a.*,
						b.curriculum_id,
						d.*,
						e.sys_id,
						e.academic_yr,
						e.yr_level,
						e.section,
						e.term,
						f.department_id,
						f.department_code
			FROM enrolled_subjects a JOIN class_schedule b ON a.enrollment_code = b.enrollment_code
			JOIN students_master_file d ON d.student_id = a.student_id
			JOIN class_schedule e ON e.sys_id=e.sys_id
			JOIN department f ON f.department_id=f.department_id

			 WHERE a.subject_code = b.subject_code AND a.student_id='$student_id'";

		$result = sqlsrv_query($conn, $sql);
		$data = array($result);

		while ($row = sqlsrv_fetch_array($result)) {
			$data[] = $row;
		}
		return $data;
	 }

 ?>