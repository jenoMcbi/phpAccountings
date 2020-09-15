<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from bootstrap.gallery/nexton/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2017 03:00:58 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Nexton Admin Panel">
    <meta name="keywords" content="Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Template, Best Admin UI, Bootstrap Template, Themeforest, Bootstrap">
    <meta name="author" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>Nexton Admin Panel, Nexton Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/main.css" rel="stylesheet" media="screen">
    <link href="fonts/icomoon/icomoon.css" rel="stylesheet">
    <link href="css/heatmap/cal-heatmap.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.bs.min.css" rel="stylesheet">
    <link href="assets/datatables/autoFill.bs.min.css" rel="stylesheet">
    <link href="assets/datatables/fixedHeader.bs.css" rel="stylesheet">
    <link href="assets/datatables/buttons.bs.css" rel="stylesheet">
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-84219024-1', 'auto');
        ga('send', 'pageview');
    </script>
    <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <header class="clearfix">
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <div class="pull-right">
            <ul id="header-actions" class="clearfix">
                <li class="list-box dropdown"><a id="drop10" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="info-label">4</span> <i class="icon-circle-check info-icon text-warning"></i></a>
                    <div class="dropdown-menu">
                        <section class="todo">
                            <fieldset class="todo-list">
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Fix UI Bug</span> <small class="scheduled">Scheduled for 24th Dec, Assigned to Shawn.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Send all Documents</span> <small class="scheduled">Scheduled for 24th Dec, Assigned to Leena.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Attend Wedding Party</span> <small class="scheduled">Scheduled on 10th Dec, Assigned to Mark.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb" checked="checked"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Meet Mr.James</span> <small class="scheduled">Completed on 5th Dec, Assigned to Robin.</small></label>
                                <label class="todo-list-item">
                                    <input type="checkbox" class="todo-list-cb overdue" checked="checked"> <span class="todo-list-mark"></span> <span class="todo-list-desc">Read Turning Points</span> <small class="scheduled">Overdue 12 days, Assigned to Wincy.</small></label>
                            </fieldset>
                        </section>
                    </div>
                </li>
                <li class="list-box dropdown"><a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><span class="info-label">7</span> <i class="icon-notifications_active info-icon text-success"></i></a>
                    <ul class="dropdown-menu imp-notify">
                        <li>
                            <div class="thumb"><img src="img/user4.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Wilson Kewis</strong>
                                <p>The best dashboard design I have ever seen. Good luck with sales.</p><small class="date">Today at 10:10 pm - 21.12.2016</small></div>
                        </li>
                        <li>
                            <div class="thumb"><img src="img/user7.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Justin Mezzell</strong>
                                <p>To keep your account secure, we need to revalidate your account.</p><small class="date">3 days ago at 2:30 pm</small></div>
                        </li>
                        <li>
                            <div class="thumb"><img src="img/user1.png" alt="Admin Dashboard"></div>
                            <div class="details"><strong>Shawn Ankith</strong>
                                <p>Contact you via phone with support for recent purchases and product information.</p><small class="date">7 days ago at 5:15 pm</small></div>
                        </li>
                    </ul>
                </li>
                <li class="list-box user-admin dropdown">
                    <div class="admin-details">
                        <div class="name">Shawn</div>
                        <div class="designation">System Admin</div>
                    </div><a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-account_circle"></i></a>
                    <ul class="dropdown-menu sm">
                        <li class="dropdown-content"><a href="#"><i class="icon-warning2"></i>Update Password<br><span>Your password will expire in 7 days.</span></a> <a href="profile.html">Edit Profile</a> <a href="forgot-pwd.html">Change Password</a> <a href="validations.html">Settings</a> <a href="login.html">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div><a href="comments.html" class="support">Support</a>
        <div class="custom-search">
            <input type="text" class="search-query" placeholder="Search here ..."> <i class="icon-search4"></i></div>
    </header>
    <div class="container-fluid">
        <div class="dashboard-wrapper">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html"><i class="icon-home2"></i>Dashboard</a></li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-notification2"></i> Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="comments.html">Comments</a></li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="pricing.html">Pricing Plans</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-location3"></i>Charts <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="c3-graphs.html">C3 Graphs</a></li>
                                <li><a href="maps.html">Maps</a></li>
                                <li><a href="flot.html">Flot Graphs</a></li>
                                <li><a href="morris-graphs.html">Morris Graphs</a></li>
                                <li><a href="vector-maps.html">Vector Maps</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-browser"></i>Forms <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="form-inputs.html">Form Inputs</a></li>
                                <li><a href="validations.html">Validations</a></li>
                                <li><a href="editor.html">Editors</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-image2"></i>UI Lab <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="labels-badges.html">Labels &amp; Badges</a></li>
                                <li><a href="spinners.html">Spinners</a></li>
                                <li><a href="notifications.html">Notifications</a></li>
                                <li><a href="progressbars.html">Progress Bars</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="custom-panels.html">Panels</a></li>
                                <li><a href="custom-drag.html">Drag &amp; Drop</a></li>
                                <li><a href="custom-grid.html">Grid</a></li>
                                <li><a href="default.html">Default Layout</a></li>
                                <li><a href="layout-full.html">Layout Without Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-new-message"></i>Tables <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-error_outline"></i>Error <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.html">Login</a></li>
                                <li><a href="signup.html">Sign Up</a></li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                                <li><a href="forgot-pwd.html">Forgot Password</a></li>
                                <li><a href="error.html">Page Not Found</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="top-bar clearfix">
                <div class="page-title">
                    <h4>Data tables</h4></div>
                <ul class="topbar-stats">
                    <li>
                        <div class="sales-block hidden-sm"><span id="overallIncome"></span></div>
                        <div class="sales-details">
                            <h4><span>$9579</span> <i class="icon-arrow-up-right2 up"></i></h4>
                            <h5>Overall Income</h5></div>
                    </li>
                </ul>
            </div>
          
                <div class="row gutter">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-light no-margin">
                            <div class="panel-heading">
                                <h4>Scroll Table</h4></div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="copy-print-csv" class="display table table-striped table-bordered no-margin">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>
                                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">Copyright Nexton Admin App <span>2017</span>.</footer>
        </div>
        <div class="right-sidebar">
            <div class="panel panel-blue">
                <div class="panel-heading">
                    <h5>Sales</h5></div>
                <div class="panel-body">
                    <div id="cal-heatmap" class="auto-margin"></div>
                </div>
            </div>
            <div class="panel">
                <div class="info-stats green-two">
                    <div class="icon-type pull-left"><i class="icon-announcement"></i></div>
                    <div class="sale-num">
                        <h4>732</h4>
                        <p>Notifications</p>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="info-stats green-one">
                    <div class="icon-type pull-left"><i class="icon-drafts"></i></div>
                    <div class="sale-num">
                        <h4>529</h4>
                        <p>Messages</p>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="info-stats pink">
                    <div class="icon-type pull-left"><i class="icon-chat2"></i></div>
                    <div class="sale-num">
                        <h4>218</h4>
                        <p>Comments</p>
                    </div>
                </div>
            </div>
            <div class="panel">
                <div class="info-stats yellow">
                    <div class="icon-type pull-left"><i class="icon-assignment_turned_in"></i></div>
                    <div class="sale-num">
                        <h4>147</h4>
                        <p>Tasks</p>
                    </div>
                </div>
            </div>
            <div class="panel">
                <ul class="views">
                    <li>
                        <p class="detail-info"><i class="icon-vinyl blue"></i> Signups</p>
                    </li>
                    <li>
                        <p class="detail-info"><i class="icon-vinyl green"></i> Users Online</p>
                    </li>
                    <li>
                        <p class="detail-info"><i class="icon-vinyl red"></i>Uploads</p>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <ul class="contributions">
                    <li>
                        <p class="clearfix">New Dashboard<span>$5681</span></p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"><span class="sr-only">89% Complete (success)</span></div>
                        </div>
                    </li>
                    <li>
                        <p class="clearfix">User Interface<span>$2143</span></p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"><span class="sr-only">55% Complete (success)</span></div>
                        </div>
                    </li>
                    <li>
                        <p class="clearfix">PSD to Html<span>$3740</span></p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%"><span class="sr-only">29% Complete (success)</span></div>
                        </div>
                    </li>
                    <li>
                        <p class="clearfix">App Design<span>$8210</span></p>
                        <div class="progress progress-md">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%"><span class="sr-only">10% Complete (success)</span></div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel">
                <div class="tags clearfix"><a href="#">Dashboard</a> <a href="#">Timeline</a> <a href="#">Newsfeed</a> <a href="#">Admin</a> <a href="#">Profile</a> <a href="#">Invoice</a> <a href="#">Graphs</a> <a href="#">Inbox</a> <a href="#">Sass</a> <a href="#">App</a></div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sparkline/retina.js"></script>
    <script src="js/scrollup.min.js"></script>
    <script src="js/d3.min.js"></script>
    <script src="js/heatmap/cal-heatmap.min.js"></script>
    <script src="js/heatmap/cal-heatmap.custom.js"></script>
    <script src="js/datatables/dataTables.min.js"></script>
    <script src="js/datatables/dataTables.bootstrap.min.js"></script>
    <script src="js/datatables/dataTables.tableTools.js"></script>
    <script src="js/datatables/autoFill.min.js"></script>
    <script src="js/datatables/autoFill.bootstrap.min.js"></script>
    <script src="js/datatables/fixedHeader.min.js"></script>
    <script src="js/datatables/buttons.min.js"></script>
    <script src="js/datatables/flash.min.js"></script>
    <script src="js/datatables/jszip.min.js"></script>
    <script src="js/datatables/pdfmake.min.js"></script>
    <script src="js/datatables/vfs_fonts.js"></script>
    <script src="js/datatables/html5.min.js"></script>
    <script src="js/datatables/buttons.print.min.js"></script>
    <script src="js/datatables/custom-datatables.js"></script>
    <script src="js/common.js"></script>
</body>
<!-- Mirrored from bootstrap.gallery/nexton/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Mar 2017 03:01:19 GMT -->

</html>