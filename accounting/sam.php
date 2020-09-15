<?php
        // include'functions/addstudent.php';
        // include'sweetalert/swalstud.php';


include'include/connect.php';

$msg= 0;
 if(isset($_POST['save']))
  {

$addDate=$_POST['addDate'];
$idnumber= $_POST['idnumber'];
$department= $_POST['department'];

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mi=$_POST['mi'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$review=$_POST['review'];

$query=("SELECT * from students where idnumber='$idnumber'");

$result=sqlsrv_query($conn,$query);


 if(sqlsrv_has_rows($result)>0)
 {    
        $msg="1";
 }  
else
{
    $current_timestamp = date('Y-m-d H:i:s');
    $query = "INSERT INTO  students(addDate,idnumber,department,firstname,lastname,mi,gender,dob,address,review)VALUES('{$current_timestamp}','$idnumber','$department','$firstname','$lastname','$mi','$gender','$dob','$address','$review')";
$result = sqlsrv_query($conn, $query);

    if($result)
{
 
     $msg ="2";
}
}
}
?>
<form  action="sam.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            
                                            <input type="hidden" class="form-control" name="addDate">

                                            <div class="col-md-8">
                                                <label class="control-label">ID NUMBER</label>
                                                <input type="text" class="form-control" name="idnumber">
                                            </div>
                                            <div class="col-md-4 selectContainer">
                                                <label class="control-label">DEPARTMENT</label>
                                                <select class="form-control" name="department">
                                                    <option value="beed">BEED</option>
                                                    <option value="bse">BSE</option>
                                                    <option value="bshrm">BSHRM</option>
                                                    <option value="bsit">BSIT</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row gutter">
                                            <div class="col-md-4">
                                                <label class="control-label">FIRSTNAME</label>
                                                <input type="text" class="form-control" name="firstname">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">LASTNAME</label>
                                                <input type="text" class="form-control" name="lastname">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">MIDLE INITIAL</label>
                                                <input type="text" class="form-control" name="mi">
                                            </div>
                                            <div class="col-md-4 selectContainer">
                                                <label class="control-label">STATUS</label>
                                                <select class="form-control" name="status">
                                                    <option value="old">OLD</option>
                                                    <option value="new">NEW</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-md-4 selectContainer">
                                                <label class="control-label">GENDER</label>
                                                <select class="form-control" name="gender">
                                                    <option value="male">MALE</option>
                                                    <option value="female">FEMALE</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">BIRTHDATE</label>
                                                <input type="date" class="form-control" name="dob">
                                            </div>
                                            <div class="col-md-4">
                                                <label class="control-label">ADDRESS</label>
                                                <input type="text" class="form-control" name="address">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Review</label>
                                        <textarea class="form-control" name="review" rows="5" placeholder="This will be posted in time" required/></textarea>
                                    </div>
                                   
                                    <button type="submit" name="save" class="btn btn-info">Submit</button>
                                </form>