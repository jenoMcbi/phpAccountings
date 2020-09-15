<?php 
    
    session_start();

    if(!isset($_SESSION['student_id']))
    {
        header('location: login.php');
    }
           $a = $_SESSION['student_id'];
           $b = $_SESSION['fname'];
           $c = $_SESSION['mname'];
           $d = $_SESSION['lname']; 
           $e = $_SESSION['course'];
           $g = $_SESSION['student_profile'];
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Page title -->
    <title>Kiosk</title>

    <link rel="stylesheet" href="../../../asset/vendor/fontawesome/font-awesome.css"/>
        <link rel="stylesheet" href="../../../asset/vendor/animate.css/animate.css">
        <link rel="stylesheet" href="../../../asset/vendor/animate.css/animate.css">
        <link rel="stylesheet" href="../../../asset/vendor/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="../../../asset/styles/customize-paper.css">
        <link rel="stylesheet" href="../../../asset/styles/pe-icons/pe-icon-7-stroke.css"/>
        <link rel="stylesheet" href="../../../asset/styles/pe-icons/helper.css"/>
        <link rel="stylesheet" href="../../../asset/styles/style.css">
        <link rel="stylesheet" href="../../../asset/styles/login.css">
        <link rel="stylesheet" href="../../../asset/styles/customize.css"></head>
<body>

<!-- Wrapper-->
<div class="wrapper">

    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="pe-7s-menu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="Grade.php">
                    <img src="assets/images/Kiosk-logo.png">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <!-- <div class="left-nav-toggle">
                    <a href="">
                        <i class="pe-7s-menu"></i>
                    </a>
                </div> -->
                <ul class="nav navbar-nav navbar-right">
                    <li class=" profil-link">
                        <a href="logout.php">
                            <?php echo $b.' '.$c.' '.$e; ?>
                            <!-- <span class="profile-address">officeoftheregistar@cpc.com</span> -->
                            <!-- <img src="images/profile.jpg" class="img-circle" alt=""> -->
                                    <span class="pe-7s-close-circle"></span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->

    <!-- Main content-->
    <section class="content">
        <div class="view-header">
                        <div class="header-icon">
                            <i class="pe page-header-icon pe-7s-users text-cpc" ></i>
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs">Name of Student</h3>
                            <small>
                                ID No.
                            </small>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12">
                        <div class="panel panel-filled">
                            <div class="panel-body">
                                <div class="row">
                                    
                                      <a href="Grade.php" class="btn btn-default text-white">GRADES</a>

                                      <a href="#" class="btn btn-default text-white">BALANCE</a>

                                      <a href="Load.php" class="btn btn-default text-white">LOADS</a> 

                                      <a href="Evaluation.php" class="btn btn-default text-white">EVALUATION</a>

                            </div>
                            </div>
                        </div>
                    </div> 