<?php include "../function.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Hermes
    </title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no" name="viewport" />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo base_url("/assets/css/bootstrap.min.css") ?>" rel="stylesheet" />
    <link href="<?php echo base_url("/assets/css/light-bootstrap-dashboard.css?v=2.0.0") ?>" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url("/assets/css/demo.css") ?>" rel="stylesheet" />

    <!-- Jquery -->
    <script src="../js/jquery-3.5.0.min.js"></script>
    <script src="../application/print_receipt.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="main-panel">
            <!-- Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div id="printableArea">
                        <table style="width:100%" border="0">
                            <tbody>
                                <tr>
                                    <td style="width:80%" colspan="2">&nbsp;</td>
                                    <td style="width:20%"><img src="../assets/img/leakhon.jpg" width="80%"></td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <h2>RECEIPT</h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top" style="width:30%"><span id="rec_guest_address"> </span></td>
                                    <td valign="top" style="width:35%">
                                        <p>
                                            <b>Guest name </b></b><span id="rec_guest_name"> </span>
                                        </p>
                                        <p><b>Address </b><span id="rec_guest_address2"> </span></p>
                                        <p><b>Phone</b> <span id="ginfo_telno"> </span></p>
                                        <p><b>Email </b><span id="ginfo_email"> </span></p>
                                        <p><b>Date: </b><span id="rec_date1"> </span></p>
                                    </td>
                                    <td valign="top" style="width:35%">
                                        <p><b>Passport/ID </b><span id="ginfo_passport_id"> </span></p>
                                        <p><b>Room no </b>R<span id="rec_room_name"> </span></p>
                                        <p><b>Arrival Date </b><span id="rec_checkin"> </span></p>
                                        <p><b>Departure Date </b><span id="ginfo_out"> </span></p>

                                        <p><b>Receipt No. </b><span id="rec_no"> </span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Thank you for your visit. It's a pleasure to have serve you on
                                        your vacation.<br><br>

                                        We wish you a very happy holiday with us.<br><br>

                                        Sincerely yours.
                                    </td>
                                    <td valign="top" colspan="2" style="padding-left: 150px;">
                                        <p>
                                            <table class="table">
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Price</th>
                                                </tr>
                                                <tr>
                                                    <td><span id="rec_date2"> </span></td>
                                                    <td>Accommodation</td>
                                                    <td><span id="rec_night"></td>
                                                    <td><span id="unit_price"></td>
                                                    <td><span id="price"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Check In:<span id="ci"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Check Out:<span id="co"></td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Subtotal:</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Service Charge:</td>
                                                    <td></td>
                                                    <td>10%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Tax:</td>
                                                    <td></td>
                                                    <td>7%</td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>Total:</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><span id="total"></td>

                                                </tr>

                                            </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
<style type="text/css" media="print">
    @page {
        size: auto;
        /* auto is the initial value */
        margin: 0;
        /* this affects the margin in the printer settings */
    }
</style>