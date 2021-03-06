<?php include "../function.php" ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('assets/img/apple-icon.png') ?>" />
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/img/favicon.ico') ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?php echo base_url('assets/css/light-bootstrap-dashboard.css?v=2.0.0') ?> " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url('assets/css/demo.css" rel="stylesheet') ?>" />
    <script src="<?php echo base_url('assets/js/jquery-3.5.0.min.js') ?>"></script>
</head>

<body>

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
                  <a class="nav-link" href="#">
                     <i class="nc-icon nc-chart-pie-35"></i>
                     <p>Dashboard</p>
                  </a>
               </li>
               <li>
                  <a class="nav-link" href="#">
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
                <nav class="navbar navbar-expand-lg" color-on-scroll="500">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#pablo"> Checkout</a>
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
                <!-- Start edit_infoguest -->
                <div class="content">        
                    <?php $rec_bl_id = $_GET['id'] ?>
                    <form id="update_form_edit" method="POST">
                        <div class="card">
                            <div class="">
                                <div class="col-md-12 text-right mt-3 ">
                                <iframe style ="display: none" src="<?php echo base_url("/page/printInhouse.php?rec_bl_id=".$rec_bl_id)?>" name="frame1"></iframe>
                                    <button type="button" id="Checkout" class="btn btn-primary btn-round"> Check Out</button>
                                    <button type="button" id="" class="btn btn-danger btn-round"> Reguest C/O</button>
                                    <button type="button" id="btn_print" class="btn btn-warning btn-round" onclick="frames['frame1'].print()">Print</button>
                                    <button type="submit" id="" class="btn btn-info btn-round ">Close</button>

                                </div>
                                <div class="card-head">
                                    <hr>
                                    <div class="row">

                                        <div class="col-md-10">
                                            <h4 class="mt-4 fixposition"> INFORMATION <strong> :</strong> <span id="show_fname"></span> <span id="show_lname"></span></h3>
                                        </div>
                                        <div class="col-md-2 mt-3">
                                            <button type="submit" data-toggle="modal" id="save_edit_infoguest" data-target="#exampleModal" class="btn btn-primary btn-round ">Save</button>

                                            <!-- Button trigger modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel">WANT TO CHANGES?</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_yes_update">Save</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" id="cancel_edit_infoguest" class="btn btn-info btn-round ">Cancel</button>
                                            <input type="text" name="id_bl_update" id="id_bl_update" style="display:none;">
                                            <!-- ALERT BOX SUCCESS -->
                                            <div id="modal_alert" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content alert alert-success">
                                                        SUCCESSFULLY
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">First Name : </label>
                                            <input type="text" class="form-control" id="fname_edit_infoguest" name="fname_edit_infoguest" />
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Last Name : </label>
                                            <input type="text" class="form-control" id="lname_edit_infoguest" name="lname_edit_infoguest" />
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Phone : </label>
                                            <input type="text" class="form-control" id="phone_edit_infoguest" name="phone_edit_infoguest" />
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Passport ID : </label>
                                            <input type="text" class="form-control" id="passport_edit_infoguest" name="passport_edit_infoguest" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">Birthday (YYYY-MM-DD) : </label>
                                            <input type="date" class="form-control" id="bd_edit_infoguest" name="bd_edit_infoguest" />
                                        </div>
                                        <div class="col-md-3">
                                            <label class="mdb-main-label">Nationality : </label>
                                            <select class="form-control mdb-select md-form" editable="true" searchable="Search and add here" id="nation_edit_infoguest" name="nation_edit_infoguest">
                                                <option value="N/A">N/A</option>
                                                <option value="thai">thai</option>
                                            </select>

                                        </div>
                                        <div class="col-md-3">
                                            <label for="">E-mail : </label>
                                            <input type="text" class="form-control" id="email_edit_infoguest" name="email_edit_infoguest" />
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Sex : </label>
                                            <select class="form-control" id="sex_edit_infoguest" name="sex_edit_infoguest">
                                                <option value="0">N/A</option>
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>

                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="">Including Breakfast : </label>
                                            <select class="form-control" id="incbreakfast_edit_infoguest" name="incbreakfast_edit_infoguest">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Breakfast : </label>
                                            <select class="form-control" id="breakfast_edit_infoguest" name="breakfast_edit_infoguest">
                                                <option value="N/A">N/A</option>
                                                <option value="set1">set1</option>
                                                <option value="set2">set2</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="">Room Price : </label>
                                            <input type="text" class="form-control" id="room_price_edit_infoguest" name="room_price_edit_infoguest" />
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Post Address : </label>
                                            <input type="text" class="form-control" id="padd_edit_infoguest" name="padd_edit_infoguest" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Billing Address : </label>
                                            <input type="text" class="form-control" id="badd_edit_infoguest" name="badd_edit_infoguest" />
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Notes : </label>
                                            <input type="text" class="form-control" id="note_edit_infoguest" name="note_edit_infoguest" /><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end edit_infoguest -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Company</a>
                            </li>
                            <li>
                                <a href="#">Portfolio</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </body>

    <style>
        .fixposition {
            margin-left: 15px;
        }
    </style>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url('assets/js/core/jquery.3.2.1.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/core/popper.min.js') ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/js/core/bootstrap.min.js') ?>" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="<?php echo base_url('assets/js/plugins/bootstrap-switch.js') ?>"></script>
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Chartist Plugin  -->
    <script src="<?php echo base_url('assets/js/plugins/chartist.min.js') ?>"></script>
    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js') ?>"></script>
    <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
    <script src="<?php echo base_url('assets/js/light-bootstrap-dashboard.js?v=2.0.0') ?> " type="text/javascript"></script>
    <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
    <script src="<?php echo base_url('assets/js/demo.js') ?>"></script>

    <script src="<?php echo base_url('application/save_checkout.js') ?>"></script>
    <script src="<?php echo base_url('application/edit_infoguest_checkout.js') ?>"></script>

</html>