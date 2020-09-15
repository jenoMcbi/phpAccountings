
<?php
session_start();
include 'functions/loginfunction.php'; 

if(isset($_SESSION['username'])){
header("Location:index.php");
}
// $warningmsg2 = FALSE;
// $warningmsg = FALSE;

if (isset($_POST["loginbtn"]))
{

  if(!isset($_SESSION['attempts']))
  {
    $_SESSION['attempts'] = 0;
  }

  if($_SESSION['attempts'] < 2)
  {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $password=  base64_encode($password);
    // $password = md5($password);

    $login = UserLogin($username,$password);
    if($login == 1)
    {
      $_SESSION['username'] = $username;
      $_SESSION['attempts'] = 0;
      header("Location:index.php");
      // echo "<script>window.open('index.php')</script>"; 
    }
    if($login == 2)
    {
      $warningmsg2 = TRUE;
    }
    if($login == 3)
    {
      $warningmsg = TRUE;
    }
    if($login == 4)
    {
      $errormsg = TRUE;
      $_SESSION['attempts'] = $_SESSION['attempts']+1;
      $logincount = $_SESSION['attempts'];
    }
    
  }

  else 
  {
    // echo"<script>alert('disconnected')</script>";
    $attemptmsg = TRUE;
    $_SESSION['attempts'] = 0;
  }
  
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>LUNA | Responsive Admin Theme</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/loginfunction/vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="assets/loginfunction/vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="assets/loginfunction/vendor/bootstrap/css/bootstrap.css"/>

    <!-- App styles -->
    <link rel="stylesheet" href="assets/loginfunction/styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="assets/loginfunction/styles/pe-icons/helper.css"/>
   <!--  <link rel="stylesheet" href="styles/stroke-icons/style.css"/> -->
    <link rel="stylesheet" href="assets/loginfunction/styles/style.css">
</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">


    <!-- Main content-->
    <section class="content">
        <div class="back-link">
            <a href="index.php" class="btn btn-accent">Back to Dashboard</a>
        </div>

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Login</h3>
                    <small>
                        Please enter your credentials to login.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="index.html" id="loginForm" novalidate>
                        <div class="form-group">
                            <label class="control-label" for="username">Username</label>
                            <input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
                            <span class="help-block small">Your unique username to app</span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                            <span class="help-block small">Your strong password</span>
                        </div>
                        <div>
                            <button class="btn btn-accent" type="submit" name="loginbtn">Login</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->

<!-- Vendor scripts -->
<script src="assets/loginfunction/vendor/pacejs/pace.min.js"></script>
<script src="assets/loginfunction/vendor/jquery/dist/jquery.min.js"></script>
<script src="assets/loginfunction/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- App scripts -->
<script src="scripts/luna.js"></script>

</body>

</html>