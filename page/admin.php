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
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
     <!-- CSS Files -->
     <link href=<?php echo base_url("/assets/css/bootstrap.min.css") ?> rel="stylesheet" />
     <link href=<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0 ") ?> rel="stylesheet" />
     <!-- CSS Just for demo purpose, don't include it in your project -->
     <link href=<?php echo base_url("/assets/css/demo.css") ?> rel="stylesheet" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
                     <a class="navbar-brand" href="#pablo"> Agency </a>
                     <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                         <span class="navbar-toggler-bar burger-lines"></span>
                     </button>
                 </div>
             </nav>
             <!-- End Navbar -->
             <div class="content">
                 <div class="container-fluid">
                     <div class="row">
                         <div class="col-md-12">
                             <div class="card strpied-tabled-with-hover">
                                 <div class="card-header ">
                                     <h4 class="card-title">Home</h4>
<<<<<<< HEAD
=======
                                    
>>>>>>> 2b70b02bb46f8cec722468671b9fa349bb3a5212
                                     <div class="container-fluid">
                                        <div class="header_right">
                                            <p align="right">
                                        <button type="button" class="btn btn-round btn-fill btn-info">Add Agency</button>
                                    </p>  
                                        </div>
                                     </div>
                                        
                                     <hr>
                                     <div class="row">
                                     <div class="col-md-5">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Show</label>
                                            <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect">
                                                <option selected>10</option>
                                                <option value="1">20</option>
                                                <option value="2">50</option>
                                                <option value="3">100</option>
                                            </select>  
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">entries</label>
                                        
                                        
                                    </div>
                                    <div class="col-md-7">
                                        <div class="input-group mb-6">
                                            <label for="example-text-input" class="col-sm-3 col-form-label" >Search : </label>
                                            <input type="text" class="form-control" placeholder="Search" value="Chanankorn">
                                    
                                          </div>
          
                            

                                    </div>


                                </div>
                                 </div>
                                 <div class="card-body table-full-width table-responsive">
                                    <table id="example" class="table pmd-table table-hover table-striped display dt-responsive nowrap" cellspacing="0" width="100%">
                                         <thead>
                                             <th> </th>
                                             <th>Code</th>
                                             <th>Agency Name</th>
                                             <th>Commission</th>
                                             <th>Sale Name</th>
                                             <th>Email</th>
                                             <th>Phone</th>
                                             <th>Address</th>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><button type="button" class="btn btn-round btn-fill btn-info">Info</button></td>
                                                 <td>Book</td>
                                                 <td>booking.com</td>
                                                 <td>15.0</td>
                                                 <td>Chanankorn Jandaeng</td>
                                                 <td>cjundang@gmail.com</td>
                                                 <td>0887848043</td>
                                                 <td>123/12 </td>
                                             </tr>
                                             <tr>
                                                <td><button type="button" class="btn btn-round btn-fill btn-info">Info</button></td>
                                                <td>Book</td>
                                                <td>booking.com</td>
                                                <td>15.0</td>
                                                <td>Chanankorn Jandaeng</td>
                                                <td>cjundang@gmail.com</td>
                                                <td>0887848043</td>
                                                <td>123/12</td>
                                            </tr>
                                         </tbody>
                                     </table>
                                     <div class="row">
                                        <div class="col-md-6">
                                            <label class="mr-sm-2" for="inlineFormCustomSelect">Showing 1 to 1 entries</label>
                                            
                                            
                                        </div>
                                    </div>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                                      </ul>
                                        
                                        
                                 </div>
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
     
  
 </body>
 <script>
        $(document).ready(function() {
        setInterval( function() {
        var hours = new Date().getHours();
        $(".hours").html(( hours < 10 ? "0" : "" ) + hours);
        }, 1000);
        setInterval( function() {
        var minutes = new Date().getMinutes();
        $(".min").html(( minutes < 10 ? "0" : "" ) + minutes);
        },1000);
        setInterval( function() {
        var seconds = new Date().getSeconds();
        $(".sec").html(( seconds < 10 ? "0" : "" ) + seconds);
        },1000);
        });
</script>
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
 


 </html>