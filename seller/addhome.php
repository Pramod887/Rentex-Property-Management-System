<?php
session_start();
if (!isset($_SESSION["admin_login"])) {
    header("Location: ../Admin/login.php");
}

include '../Config/connection.php';
if (isset($_POST['submit'])) {
    $h_name = $_POST['h_name'];
    $h_add = $_POST['h_add'];
    $h_phone = $_POST['h_phone'];
    $h_details = $_POST['h_details'];
    $cat = $_POST['cat'];
    $imagecount = count($_FILES['h_image']['name']);

    for ($i = 0; $i < $imagecount; $i++) {
        $h_image = $_FILES['h_image']['name'][$i];
        $imageTemname = $_FILES['h_image']['tmp_name'][$i];
        $tarpath = "homeupload/" . $h_image;

        if (move_uploaded_file($imageTemname, $tarpath)) {
            $query = "INSERT INTO addhome (h_name, h_add, h_phone, h_image, h_details, cat) VALUES ('$h_name', '$h_add', '$h_phone', '$h_image', '$h_details', '$cat')";
            $run = $conn->query($query) or die("Error in saving Data" . $conn->error);

            if ($run) {
                echo '<script>alert("Home details added successfully!")</script>';
                echo '<script>window.location.href="addhome.php";</script>';
            }
        }
    }
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
            background-color: white;
        }

        .container {
            margin-top: 50px;
        }

        .card {
            border: 5px;
            border-radius: 10px;
            box-shadow: red;
        }

        .card-title {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            font-weight: 500;
            margin-bottom: 10px;
        }

        .form-control {
            background-color: skyblue;
            border: none;
            border-radius: 3px;
            padding: 10px;
            box-shadow: none;
        }

        .form-control:focus {
            background-color: #f3f4f7;
        }

        .btn-success {
            background-color: #4caf50;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 500;
            text-transform: uppercase;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #45a049;
        }

        .footer {
            background-color: #fff;
            padding: 20px;
            margin-top: 50px;
        }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
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
                        <h4 class="page-title">Add Home details</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Add Home Details</a></li>
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
                <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="addhome.php" method="POST" enctype="multipart/form-data">
                               
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Home name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Home name"
                                                class="form-control p-0 border-0" name="h_name" Required/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Home address</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Home address"
                                                class="form-control p-0 border-0" name="h_add" Required/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Price</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Price."
                                                class="form-control p-0 border-0" name="h_phone" Required/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Upload image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                        <input type="file" name="h_image[]" 
                                                class="form-control p-0 border-0" name="h_image"  Required/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Home Details</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter Home details"
                                                class="form-control p-0 border-0" name="h_details" Required/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0" for="cat"> choose a categories</label>
                                        <div class="col-md-12 border-bottom p-0">
                                          <select  name="cat">
                                            <option value="purchase">purchase</option>
                                            <option value="Rent">Rent</option>  </select>
                                    </div>
                                    </div>

                                    
                                   
                                
                                    <div class="form-group mb-4">
                                        <div class="col-sm-12">
                                        <input type="submit" name="submit" value="Add" class="btn btn-success" />
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
               
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            
            <footer class="footer text-center" style="margin-top: 150px"> 
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





        