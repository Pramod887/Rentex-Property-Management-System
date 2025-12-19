<?php
session_start();
if(!isset($_SESSION["admin_login"]))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Rentex</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f3f4f7;
        }
       
        .topbar{
            background-color:white;
        }

        .container-fluid {
            padding: 20px;
        }

        .white-box {
            background-color: skyblue;
            padding: 50px;
            margin-bottom: 30px;
            border-radius: 10px;
            box-shadow: blue;
        }
        

        .white-box h3.box-title {
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 30px;
        }

        .white-box ul.list-inline {
            padding: 0;
            margin: 0;
        }

        .white-box ul.list-inline li {
            display: inline-block;
            margin-right: 10px;
            font-size: 14px;
        }

        .white-box .counter {
            font-size: 22px;
            font-weight: 500;
        }

        .text-success1 {
            color:black;
        }
        

        .text-purple {
            color: #6f42c1;
        }

        .text-info {
            color: #17a2b8;
        }

        .footer {
            background-color:transparent;
            padding: 20px;
            margin-top: 30px;
            text-align: center;
        }
    
    /* Existing styles for the footer */

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: transparent;
        padding: 20px;
        text-align: center;
    }

    /* New styles for the footer name animation */
    .footer-name {
        position: relative;
        animation: moveFooterName 20s linear infinite;
    }

    /* CSS animation for the footer name */
    @keyframes moveFooterName {
        0% {
            left: -100%;
        }
        100% {
            left: 100%;
        }
    }



    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       <?php include 'sidebar.php' ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Three charts -->
                <!-- ============================================================== -->
                <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12" onclick="location.href='viewhome.php';" style="cursor: pointer;">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total No of Homes</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li class="ms-auto">
                <span class="counter text-success1">
                    <?php
                    include '../Config/connection.php';
                    $query = "SELECT COUNT(*) AS total FROM addhome";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_object()) {
                            $total_homes = $row->total;
                            ?>
                            <?php echo $total_homes; ?>
                            <?php
                        }
                    }
                    ?>
                </span>
            </li>
        </ul>
    </div>
</div>


<div class="col-lg-4 col-md-12" onclick="location.href='viewflat.php';" style="cursor: pointer;">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total No of flats</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li class="ms-auto">
                <span class="counter text-success1">
                    <?php
                    include '../Config/connection.php';
                    $query = "SELECT COUNT(*) AS total FROM addflat";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_object()) {
                            $total_flat = $row->total;
                            ?>
                            <?php echo $total_flat; ?>
                            <?php
                        }
                    }
                    ?>
                </span>
            </li>
        </ul>
    </div>
</div>


<div class="col-lg-4 col-md-12" onclick="location.href='viewpg.php';" style="cursor: pointer;">
    <div class="white-box analytics-info">
        <h3 class="box-title">Total No of PG</h3>
        <ul class="list-inline two-part d-flex align-items-center mb-0">
            <li class="ms-auto">
                <span class="counter text-success1">
                    <?php
                    include '../Config/connection.php';
                    $query = "SELECT COUNT(*) AS total FROM addpg";
                    $result = $conn->query($query);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_object()) {
                            $total_pg = $row->total;
                            ?>
                            <?php echo $total_pg; ?>
                            <?php
                        }
                    }
                    ?>
                </span>
            </li>
        </ul>
    </div>
</div>


                   
                </div>
            
               
                <footer class="footer text-center move-footer" style="margin-top: 150px"><h3 class="footer-name">Rentex</h3>
</footer>

            

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <script src="plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>