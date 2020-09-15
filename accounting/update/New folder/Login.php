<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="assets/images/default-logo.png">
        <title>Kiosk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="assets/vendor/fontawesome/font-awesome.css"/>
        <link rel="stylesheet" href="assets/vendor/animate.css/animate.css">
        <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/styles/pe-icons/pe-icon-7-stroke.css"/>
        <link rel="stylesheet" href="assets/styles/pe-icons/helper.css"/>
        <link rel="stylesheet" href="assets/styles/style.css">
        <link rel="stylesheet" href="assets/styles/login.css">
        <link rel="stylesheet" href="assets/styles/customize.css">
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <script>
            function preventBack(){window.history.forward();}
            setTimeout("preventBack()", 0);
            window.onunload=function(){null};
        </script>
    </head>

    <body>

         <?php 
              $invalid = 0;
             if(isset($_GET['invalid']))
            {
                  $invalid = 1;
            }
        ?> 
        <script>
            $(document).ready(function(){
                $('.invalid').fadeOut(5000);
            })
        </script>
      
    <!-- CANVAS ANIMATION -->
    <div id="canvas-wrapper">
        <canvas id="demo-canvas"></canvas>
    </div>
    
    <!-- LOGIN FORM -->
    <div id="login-page-bg">
        <div id="login-page-transparent">
            <div class="alert alert-danger invalid" style="display: <?php echo $invalid == 1 ? 'block':'none'; ?>;">
                <div style="position: absolute;">
                    <h4><i class="fa fa-warning fa-2x"></i></h4> 
                </div>
                <div style="padding-left: 50px;">
                    <span class="bold-font">LOGIN ERROR</span><br>
                    <span>Invalid username or password !</span>
                </div>
            </div>
        </div>
    </div>
    <div id="login-page-wrapper">
        <div id="lpw-header" class="text-center">
            <img src="assets/images/Kiosk-logo.png" alt="">
        </div>
        <div id="lpw-content" class="spacer-top-2x">
           <form method="post" action="includes/logincontrol.php">
            
                <div class="form-group">
                    <label class="control-label" for="username">Student ID</label>
                    <input type="text" placeholder="Student ID" name="student_id" id="student_id" class="form-control" required/>
                    <!-- <span class="help-block small">Your unique username to app</span> -->
                </div>
                <div class="form-group">
                    <label class="control-label" for="password">Password</label>
                    <input type="password" placeholder="Password"  name="student_password" id="student_password" class="form-control" required/>
                    <!-- span class="help-block small">Your strong password</span> -->
                </div>
                <div class="spacer-top-1x">
                    <button class="btn btn-custom btn-block text-white" name="submit">Login</button>
                </div>
            </form>
        </div>
        <div id="lpw-footer" class="text-center">
            <div class="spacer-top-2x">
                <img src="assets/images/cpc-quotes.png" alt="we">
            </div>
            <div class="spacer-top-1x">
                 <small class="text-white font-xs">&copy; <?= date('Y'); ?> cpc.Kiosk</small>
            </div>
        </div>
    </div>
    
    <!-- BOOTSTRAP -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- PLUGINS -->
    <script type="text/javascript" src="assets/js/pages/login/EasePack.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/rAF.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/TweenLite.min.js"></script>
    <script type="text/javascript" src="assets/js/pages/login/login.js"></script>
    <!-- THEME -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- CANVAS -->
    <script type="text/javascript">

        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });


        });


        function noti(titol,msg,styl)
        {
            var Stacks = {
                stack_top_right: {
                    "dir1": "down",
                    "dir2": "left",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_top_left: {
                    "dir1": "down",
                    "dir2": "right",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bottom_left: {
                    "dir1": "right",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bottom_right: {
                    "dir1": "left",
                    "dir2": "up",
                    "push": "top",
                    "spacing1": 10,
                    "spacing2": 10
                },
                stack_bar_top: {
                    "dir1": "down",
                    "dir2": "right",
                    "push": "top",
                    "spacing1": 0,
                    "spacing2": 0
                },
                stack_bar_bottom: {
                    "dir1": "up",
                    "dir2": "right",
                    "spacing1": 0,
                    "spacing2": 0
                },
                stack_context: {
                    "dir1": "down",
                    "dir2": "left",
                    "context": $("#stack-context")
                },
            }
        }
    </script>

</body>
</html>
