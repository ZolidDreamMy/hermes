<?php session_start() ?>
<?php include "../function.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("/assets/img/apple-icon.png") ?>>
    <link rel="icon" type="image/png" href=<?php echo base_url("/assets/img/favicon.ico") ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href=<?php echo base_url("/assets/css/bootstrap.min.css") ?> rel="stylesheet" />
    <link href=<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ") ?> rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=<?php echo base_url("/assets/css/demo.css") ?> rel="stylesheet" />
    <link href=<?php echo base_url("/assets/css/jquery.dataTables.css") ?> rel="stylesheet" />

    <style>
        .colordate {
            color: white;
        }
    </style>

</head>


<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo base_url("/assets/img/sidebar-5.jpg") ?>">
            <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"
            
            Tip 2: you can also add an image using data-image tag
            -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        HERMES
                    </a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="dashboard.html">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="./user.html">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="checkin.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Check in</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="info_checkout.php">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Check out</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="agency.php">
                            <i class="nc-icon nc-atom"></i>
                            <p>Agency</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo"> Check In </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">


                                    <div class="col-md-12">
                                        <div class="">
                                            <h3 class="card-title text-center mb-2">
                                                <div class="d-flex flex-wrap justify-content-center mt-2">
                                                    <div class="colordate">

                                                        <body>
                                                            <div class="col-md-12">
                                                                <div>
                                                                    <h2 class="positions card-title text-center mb-2 ">
                                                                        <div class="d-flex flex-wrap justify-content-center mt-2">
                                                                            <div>
                                                                                <div id="local_time">&nbsp;</div>
                                                                                <script language="JavaScript1.2">
                                                                                    function local_date(now_time) {
                                                                                        var arrMonthName = new Array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
                                                                                        current_local_time = new Date();
                                                                                        if (current_local_time.getDate() == '1' || current_local_time.getDate() == '21' || current_local_time.getDate() == '31')
                                                                                            var z = 'st';
                                                                                        else if (current_local_time.getDate() == '2' || current_local_time.getDate() == '22')
                                                                                            var z = 'nd';
                                                                                        else if (current_local_time.getDate() == '3' || current_local_time.getDate() == '23')
                                                                                            var z = 'rd';
                                                                                        else var z = 'th';
                                                                                        if (current_local_time.getHours() >= '0' && current_local_time.getHours() <= '12')
                                                                                            var times = 'am';
                                                                                        else var times = 'pm';

                                                                                        local_time.innerHTML = arrMonthName[(current_local_time.getMonth() + 1)] + " " + current_local_time.getDate() + "" + z + " " + current_local_time.getFullYear() + "  ,  " + current_local_time.getHours() + ":" + current_local_time.getMinutes() + ":" + current_local_time.getSeconds() + " " + times;
                                                                                        setTimeout("local_date()", 1000);
                                                                                    }
                                                                                    setTimeout("local_date()", 1000);
                                                                                </script>
                                                                            </div>
                                                                        </div>
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </body>
                                                    </div>
                                                </div>
                                            </h3>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- <label class="mr-sm-2" for="inlineFormCustomSelect">Show</label>
                                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                                <option selected>10</option>
                                                <option value="1">20</option>
                                                <option value="2">50</option>
                                                <option value="3">100</option>
                                            </select>
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">entries</label> -->


                                        </div>
                                        <div class="col-md-5">
                                            <!-- <div class="input-group mb-3">
                                                <label for="example-text-input" class="col-sm-3 col-form-label">Search:</label>
                                                    <input type="text" class="form-control" placeholder="Search" id="keyword" value="">
                                                <button type="button" class="btn btn-round btn-fill btn-info" id="btnSearch">Search</button>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card-body table-full-width table-responsive">
                                        <table id="datatable1" class="table pmd-table table-hover table-striped display position-card ">
                                            <thead>
                                                <th> </th>
                                                <th>Guest name</th>
                                                <th>Room</th>
                                                <th>Contact Name</th>
                                                <th>Phone</th>
                                                <th>Agency</th>
                                                <th>Book Dates</th>
                                            </thead>
                                            <tbody id="tb1">

                                            </tbody>
                                        </table>
                                    </div>
                                    </>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav>
                            <ul class="footer-menu">
                                <li>
                                    <a href="#">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Blog
                                    </a>
                                </li>
                            </ul>
                            <p class="copyright text-center">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                            </p>
                        </nav>
                    </div>
                </footer>
            </div>
        </div>
        <style>
            .position-card {
                padding-left: 20px;
                padding-right: 20px;

            }
        </style>

</body>


<!--   Core JS Files   -->
<script src=<?php echo base_url("/assets/js/core/jquery.3.2.1.min.js") ?> type="text/javascript"></script>
<script src=<?php echo base_url("/assets/js/core/popper.min.js") ?> type="text/javascript"></script>
<script src=<?php echo base_url("/assets/js/core/bootstrap.min.js") ?> type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src=<?php echo base_url("/assets/js/plugins/bootstrap-switch.js") ?>></script>
<!--  Google Maps Plugin    -->
<script type=<?php echo base_url("text/javascript") ?> src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src=<?php echo base_url("/assets/js/plugins/chartist.min.js") ?>></script>
<!--  Notifications Plugin    -->
<script src=<?php echo base_url("/assets/js/plugins/bootstrap-notify.js") ?>></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src=<?php echo base_url("/assets/js/light-bootstrap-dashboard.js?v=2.0.0 ") ?> type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src=<?php echo base_url("/assets/js/demo.js") ?>></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.js') ?>"></script>

<script src=<?php echo base_url("/application/Search.js") ?>></script>





</html>