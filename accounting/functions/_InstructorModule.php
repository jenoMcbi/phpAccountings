<?php 
	
		include "database/dbconnect.php";

	class InstructorModule {

		protected $db;
		public function __construct() 
		{
			$this->db = new DBconnection();
		}

		public function getInstructorList($q) 
		{
			$conn = $this->db->getdbConn();

			if($q == null)
			{
				$sql = "SELECT a.*,b.*, c.*
						FROM tbl_users a LEFT JOIN tbl_userlvl c ON a.userlvl_id = c.userlvl_id
									     LEFT JOIN department b ON a.department_id = b.department_id 
						WHERE a.userlvl_id NOT IN (5,6)
						ORDER BY a.lname ASC ";
			}
			else
			{
				$sql = "SELECT a.*,b.*, c.*
						FROM tbl_users a LEFT JOIN tbl_userlvl c ON a.userlvl_id = c.userlvl_id
									     LEFT JOIN department b ON a.department_id = b.department_id 
						WHERE a.userlvl_id NOT IN (5,6) AND a.fname+' '+a.lname LIKE '%$q%'";
			}

				$result = sqlsrv_query($conn, $sql);
				$data = array();
				while ($row = sqlsrv_fetch_array($result))
				{
					$data[] = $row;
				}
				return $data;
		}

		public function getInstructorDetails($instructor_code)
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT a.*,b.*, c.*
					FROM tbl_users a LEFT JOIN tbl_userlvl c ON a.userlvl_id = c.userlvl_id
									 LEFT JOIN department b ON a.department_id = b.department_id
					WHERE a.instructor_code = '$instructor_code'";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function getAcademicYear()
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT COUNT(academic_yr), academic_yr
					FROM class_schedule 
					GROUP BY academic_yr
					ORDER BY academic_yr DESC";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function getYearLevel()
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT COUNT(yr_level), yr_level 
					FROM class_schedule 
					GROUP BY yr_level
					ORDER BY yr_level ASC";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function getTerm()
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT COUNT(term), term 
					FROM class_schedule 
					GROUP BY term
					ORDER BY term ASC";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function getInstructorLoad($instuctor_code)
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT a.instructor_code,
						   b.enrollment_code,
						   b.academic_yr,
						   b.yr_level,
						   b.term,
						   b.section,
						   b.is_octoberian,
						   b.class_size,
						   b.min_size,
						   b.days,
						   b.start_time,
						   b.end_time,
						   b.room,
						   c.subject_code,
						   c.subject_description,
						   d.curriculum_id,
						   d.course_code,
						   e.course_name
					FROM tbl_users a 
					LEFT JOIN class_schedule b ON a.instructor_code = b.instructor_code
					JOIN subjects c ON c.subject_code = b.subject_code
					JOIN curriculum d ON d.curriculum_id = b.curriculum_id
					JOIN courses_offered e ON e.course_code = d.course_code
					WHERE a.instructor_code = '$instuctor_code'
					ORDER BY academic_yr DESC";

			$result = sqlsrv_query($conn, $sql);
			$data = array();
			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function getSectionLoad($instructor_code, $enrollment_code, $subject_code)
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT  a.fname,
							a.lname,
							a.mname,
							a.instructor_code,
							b.enrollment_code,
							b.academic_yr,
							b.yr_level,
							b.term,
							b.section,
							b.is_octoberian,
							b.class_size,
							b.min_size,
							b.days,
							b.start_time,
							b.end_time,
							b.room,
							c.subject_code,
							c.subject_description,
							c.total_credit,
							d.curriculum_id,
							d.course_code,
							e.course_name
					FROM  tbl_users a JOIN class_schedule b ON a.instructor_code = b.instructor_code
									  JOIN subjects c ON c.subject_code = b.subject_code
									  JOIN curriculum d ON d.curriculum_id = b.curriculum_id
									  JOIN courses_offered e ON e.course_code = d.course_code
					WHERE a.instructor_code = '$instructor_code' AND b.enrollment_code ='$enrollment_code' AND c.subject_code = '$subject_code'";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function getEnrolledStudent($enrollment_code, $subject_code)
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT a.enrollment_code,
						   a.subject_code,
						   a.student_id,
						   a.midterm,
						   a.final,
						   a.average,
						   a.remarks,
						   b.subject_description,
						   c.student_id,
						   c.fname AS student_fname,
						   c.mname AS student_mname,
						   c.lname AS student_lname,
						   c.course_code AS student_course,
						   d.course_name
					FROM enrolled_subjects a JOIN subjects b ON a.subject_code = b.subject_code
											 JOIN students_master_file c ON c.student_id = a.student_id
											 JOIN courses_offered d ON d.course_code = c.course_code
					WHERE a.enrollment_code = '$enrollment_code' AND a.subject_code = '$subject_code'
					ORDER BY c.lname ASC";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}


		public function getStudent($student_id)
		{
			$conn = $this->db->getdbConn();

			$sql = "SELECT a.*, b.*, c.student_id, c.fname, c.lname
					FROM enrolled_subjects a JOIN subjects b ON a.subject_code = b.subject_code
											 JOIN students_master_file c ON a.student_id = c.student_id
					WHERE a.student_id  = '$student_id'";

			$result = sqlsrv_query($conn, $sql);
			$data = array();

			while ($row = sqlsrv_fetch_array($result))
			{
				$data[] = $row;
			}
			return $data;
		}


		public function getTotalLab($student_id)
		{

			$conn = $this->db->getdbConn();
			$sql = "SELECT a.enrollment_code, 
						   b.credit_lab, 
						   c.student_id
					FROM enrolled_subjects a JOIN subjects b ON a.subject_code = b.subject_code
											 JOIN students_master_file c ON a.student_id = c.student_id
					WHERE a.student_id  = '$student_id'";
			$result = sqlsrv_query($conn, $sql);


			$total = 0;
			while($row = sqlsrv_fetch_array($result)) {
				$total += $row['credit_lab'];
			}
			return $total;

			
		}

		public function getTotalLec($student_id)
		{

			$conn = $this->db->getdbConn();
			$sql = "SELECT a.enrollment_code, 
					       b.credit_lec,  
						   c.student_id
					FROM enrolled_subjects a JOIN subjects b ON a.subject_code = b.subject_code
											 JOIN students_master_file c ON a.student_id = c.student_id
					WHERE a.student_id  = '$student_id'";
			$result = sqlsrv_query($conn, $sql);

			$total = 0;
			while($row = sqlsrv_fetch_array($result)) {
				$total += $row['credit_lec'];
			}
			return $total;

			
		}
	}

?>
