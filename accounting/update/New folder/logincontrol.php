<?php
    session_start();
    include ('dbconnect.php');
    
    if (isset($_POST['submit'])) {
        $student_id = $_POST['student_id'];
        $student_password =$_POST['student_password'];

        $sql = "SELECT * from students_master_file 
                where student_id = '$student_id' AND student_password = '$student_password'";

        $result = sqlsrv_query($conn,$sql);
        $count = sqlsrv_has_rows($result);
         $row = sqlsrv_fetch_array($result);

         if($count == true)
         {
            $_SESSION['student_id'] = $student_id;
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['mname'] = $row['mnane'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['course'] = $row['course_id'];
            $_SESSION['student_profile'] = $row['student_profile'];

            header('location: ../Grade.php');
         }
         else
         {
             header('location:../login.php?invalid=1');
         }

    }


?>