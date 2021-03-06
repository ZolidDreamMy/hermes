<!-- 
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <?php include "../function.php" ?>
 <!DOCTYPE html>

 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("/assets/img/apple-icon.png")?>>
     <link rel="icon" type="image/png" href=<?php echo base_url("/assets/img/favicon.ico")?>>
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
         name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href=<?php echo base_url("/assets/css/bootstrap.min.css")?> rel="stylesheet" />
     <link href=<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0")?> rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href=<?php echo base_url("/assets/css/demo.css")?> rel="stylesheet" />
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
             <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                 <div class="container-fluid">
                     <a class="navbar-brand" href="#pablo"> Dashboard </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                         aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                                 <a class="nav-link dropdown-toggle" href="http://example.com"
                                     id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                     aria-expanded="false">
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
                 <div class="card">
                     <div class="col-md-12">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-8"><h4 class="card-title">Agency</h4> <label >add agency information</label></div>
                                 <div class="col-md-4 text-right">
                                        <button type="submit" class="btn btn-info btn-round" id="add_agency"><i class="nc-icon nc-simple-add"></i> Save</button> 
                                        <button type="button" id="btn_close_add_agency" class="btn btn-primary btn-round"><i class="nc-icon nc-simple-remove"></i> Close</button></div>
                             </div>
                         </div>
                         <div class="card-body">
                             <!-- row contact -->
                             <div class="row">
                                 <div class="col-md-5">
                                     <h4><i class="nc-icon nc-backpack"></i> Information</h4>
                                 </div>
                             </div>
                             <!--end row contact -->
                             <!-- row form edit data -->
                             <div class="row">
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <div class="form-group">
                                             <label>Code</label>
                                             <input type="text" class="form-control" id="code_agency"  value="" require>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Agency name</label>
                                            <input type="text" class="form-control" id="name_agency"  value="" require>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Commission(%)</label>
                                        <input type="number" min="0" id="commission_agency" class="form-control" require>
                                            
                                      </div>
                                </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Sales Name</label>
                                         <input type="text" class="form-control" id="sales_name_agency"   require>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Email</label>
                                         <input type="email" class="form-control" id="email_agency"   require>
                                     </div>
                                 </div>
                                 <div class="col-md-3">
                                     <div class="form-group">
                                         <label>Telephone</label>
                                         <input type="text" class="form-control" id="tel_agency"   require>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Address</label>
                                         <input type="text" class="form-control" id="address_agency"  require>
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-group">
                                         <label>Comment</label>
                                         <textarea class="form-control" id="comment_agency"   require></textarea>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
            <!-- ALERT BOX SUCCESS -->
            <div id="modal_alert" class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content alert alert-success">
                                                        SAVE SUCCESSFULLY
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
 </body>
 
 </script>
 <!--   Core JS Files   -->
 <script src=<?php echo base_url("/assets/js/core/jquery.3.2.1.min.js")?> type="text/javascript"></script>
 <script src=<?php echo base_url("/assets/js/core/popper.min.js")?> type="text/javascript"></script>
 <script src=<?php echo base_url("/assets/js/core/bootstrap.min.js")?> type="text/javascript"></script>
 <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
 <script src=<?php echo base_url("/assets/js/plugins/bootstrap-switch.js")?>></script>
 <!--  Google Maps Plugin    -->
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 <!--  Chartist Plugin  -->
 <script src=<?php echo base_url("/assets/js/plugins/chartist.min.js")?>></script>
 <!--  Notifications Plugin    -->
 <script src=<?php echo base_url("/assets/js/plugins/bootstrap-notify.js")?>></script>
 <!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
 <script src=<?php echo base_url("/assets/js/light-bootstrap-dashboard.js?v=2.0.0")?> type="text/javascript"></script>
 <!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
 <script src=<?php echo base_url("/assets/js/demo.js")?>></script>
 <script src=<?php echo base_url("/application/add_agency.js")?>></script>

 
 </html>