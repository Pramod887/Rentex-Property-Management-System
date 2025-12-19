
<?php
session_start();
if(!isset($_SESSION["admin_login"]))
{
    header("Location: ../Admin/login.php");
}
    
 include '../Config/connection.php';
  if (isset($_POST['submit'])) {
      
      $id= $_POST['id'];
      $s_name= $_POST['s_name'];
      $s_add=$_POST['s_add'];
      $s_phone=$_POST['s_phone'];
      $s_detail=$_POST['s_detail'];
      $imagecount= count($_FILES['s_image'] ['name']);
    for ($i=0; $i <$imagecount ; $i++) { 
            $s_image= $_FILES['s_image'] ['name'] [$i];
            $imageTemname= $_FILES['s_image'] ['tmp_name'] [$i];
            $tarpath= "sellerupload/" .$s_image;
            if (move_uploaded_file($imageTemname, $tarpath)){  
        $query = "INSERT INTO seller(id,s_name,s_add,s_phone,s_image,s_detail) Values('$id','$s_name','$s_add','$s_phone','$s_image','$s_detail')";
        $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
        if ($run) {
        echo '<script>alert("seller details Added Successfull!")</script>';
        echo '<script>window.location.href="addseller.php";</script>';
                }
            }
            }}
        
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
                        <h4 class="page-title">Add Seller details</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="#" class="fw-normal">Add Seller Details</a></li>
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
                                <form class="form-horizontal form-material" action="addseller.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Seller id</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter seller id"
                                                class="form-control p-0 border-0" name="id" data-validation="required" /> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0">Seller name</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter seller name"
                                                class="form-control p-0 border-0" name="s_name" data-validation="required" /> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Seller address</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter seller address"
                                                class="form-control p-0 border-0" name="s_add" data-validation="required"/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Seller phone no.</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="tel" placeholder="Enter seller phone no."
                                                class="form-control p-0 border-0" name="s_phone" data-validation="required"/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Upload image</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="file" name="s_image[]" 
                                                class="form-control p-0 border-0" name="s_image" data-validation="required"/> </div>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="col-md-12 p-0"> Seller details</label>
                                        <div class="col-md-12 border-bottom p-0">
                                            <input type="text" placeholder="Enter seller details"
                                                class="form-control p-0 border-0" name="s_detail" data-validation="required"/> </div>
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

            
            <footer class="footer text-center" style="margin-top: 150px"> 2021 ©  Tab Studio
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





