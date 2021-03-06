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
    <link rel="apple-touch-icon" sizes="76x76" href=<?php echo base_url("/assets/img/apple-icon.png") ?>>
    <link rel="icon" type="image/png" href=<?php echo base_url("/assets/img/favicon.ico") ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href=<?php echo base_url("/assets/css/bootstrap.min.css") ?> rel="stylesheet" />
    <link href=<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0" ) ?>rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href=<?php echo base_url("/assets/css/demo.css") ?> rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
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
                    <a class="navbar-brand" href="#pablo"> User </a>
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contact/Agency</h4>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">S</button>
                                    <button type="submit" class="btn btn-info btn-fill pull-right" data-toggle="modal"
                                        data-target="#exampleModalLong" id="cancel_resinfo">C</button>

                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>Check In - chek Out(1 nights)</label>
                                                    <input type="text" class="form-control" placeholder="" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Agency</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="Phone"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Notes</label>
                                                    <textarea rows="4" cols="80" class="form-control"
                                                        placeholder="Here can be your description" value=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Contact/Agency</h4>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">S</button>
                                    <button type="submit" class="btn btn-info btn-fill pull-right" data-toggle="modal"
                                        data-target="#exampleModalLong2" id="cancel_guest">C</button>
                                    <button type="submit" class="btn btn-info btn-fill pull-right">M</button>

                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group ">
                                                    <label>Room:</label>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Type:</label>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Building:</label>
                                                </div>
                                                <div class="form-group ">
                                                    <label>Views:</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5 pr-1 ">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input type="text" class="form-control" placeholder="First Name"
                                                        value="">
                                                </div>
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                        value="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email</label>
                                                    <input type="email" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" placeholder="Phone"
                                                        value="">
                                                </div>

                                            </div>

                                            <div class="clearfix"></div>
                                    </form>

                                    <!-- Button trigger modal
                                      <button type="button" class="btn btn-primary" data-toggle="modal"
                                          data-target="#exampleModalLong">
                                          Launch demo modal
                                      </button> -->

                                    <!-- Modal -->

                                    <!-- <form class="form-detail" action="#" method="post" id="report"> -->

                                    <!-- <input type="hidden" class="form-control" id="id" name="id" value="<?=$id?>"> -->
                                    <div class="form-inline">

                                    </div>
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Cancel
                                                        Reservation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="exampleInputEmail1">Please explain,why you need to
                                                        cancel this reservation (more than 10 characters)?</label>
                                                    <input id="comment" name="comment" value="" type="text"
                                                        class="form-control" placeholder="Please specify" min="10"
                                                        required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal"
                                                        id="save_comment">Save</button>
                                                    <!-- <button onclik="myFunction()" type="button" class="btn btn-primary">Save</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                    <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Cancel
                                                        Reservation</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <label for="exampleInputEmail1">Please explain,why you need to
                                                        cancel this reservation (more than 10 character)?</label>
                                                    <input id="comment_guest" name="comment_guest" value="" type="text"
                                                        class="form-control" placeholder="Please specify" min="10"
                                                        required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal"
                                                        id="save_guest">Save</button>
                                                    <!-- <button onclik="myFunction()" type="button" class="btn btn-primary">Save</button> -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->
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
    <!--   -->
    <!-- <div class="fixed-plugin">
      <div class="dropdown show-dropdown">
          <a href="#" data-toggle="dropdown">
              <i class="fa fa-cog fa-2x"> </i>
          </a>
 
          <ul class="dropdown-menu">
              <li class="header-title"> Sidebar Style</li>
              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger">
                      <p>Background Image</p>
                      <label class="switch">
                          <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                      </label>
                      <div class="clearfix"></div>
                  </a>
              </li>
              <li class="adjustments-line">
                  <a href="javascript:void(0)" class="switch-trigger background-color">
                      <p>Filters</p>
                      <div class="pull-right">
                          <span class="badge filter badge-black" data-color="black"></span>
                          <span class="badge filter badge-azure" data-color="azure"></span>
                          <span class="badge filter badge-green" data-color="green"></span>
                          <span class="badge filter badge-orange" data-color="orange"></span>
                          <span class="badge filter badge-red" data-color="red"></span>
                          <span class="badge filter badge-purple active" data-color="purple"></span>
                      </div>
                      <div class="clearfix"></div>
                  </a>
              </li>
              <li class="header-title">Sidebar Images</li>
 
              <li class="active">
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                      <img src="../assets/img/sidebar-1.jpg" alt="" />
                  </a>
              </li>
              <li>
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                      <img src="../assets/img/sidebar-3.jpg" alt="" />
                  </a>
              </li>
              <li>
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                      <img src="..//assets/img/sidebar-4.jpg" alt="" />
                  </a>
              </li>
              <li>
                  <a class="img-holder switch-trigger" href="javascript:void(0)">
                      <img src="../assets/img/sidebar-5.jpg" alt="" />
                  </a>
              </li>
 
              <li class="button-container">
                  <div class="">
                      <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                  </div>
              </li>
 
              <li class="header-title pro-title text-center">Want more components?</li>
 
              <li class="button-container">
                  <div class="">
                      <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                  </div>
              </li>
 
              <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
 
              <li class="button-container">
                  <button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                  <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
              </li>
          </ul>
      </div>
  </div>
   -->
   
</body>
<!--   Core JS Files   -->
<script src=<?php echo base_url("/assets/js/core/jquery.3.2.1.min.js") ?> type="text/javascript"></script>
<script src=<?php echo base_url("/assets/js/core/popper.min.js") ?> type="text/javascript"></script>
<script src=<?php echo base_url("/assets/js/core/bootstrap.min.js") ?> type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src=<?php echo base_url("/assets/js/plugins/bootstrap-switch.js") ?>></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src=<?php echo base_url("/assets/js/plugins/chartist.min.js") ?>></script>
<!--  Notifications Plugin    -->
<script src=<?php echo base_url("/assets/js/plugins/bootstrap-notify.js") ?>></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src=<?php echo base_url("/assets/js/light-bootstrap-dashboard.js?v=2.0.0 ") ?> type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src=<?php echo base_url("/assets/js/demo.js") ?>></script>
<script src=<?php echo base_url("/application/cancelReservationandGuest.js") ?>></script>
<!-- <script src="../application/guest_info.js"></script> -->

</html>