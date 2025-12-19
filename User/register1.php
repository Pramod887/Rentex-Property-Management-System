<?php
session_start();

include '../config/connection.php';

// Fetch a random row from the addhome table
$query = "SELECT p_id, p_image FROM addpg ORDER BY RAND() LIMIT 1";
$result = $conn->query($query);

// Check if the query was successful
if ($result) {
    // Fetch the data from the query result
    $data1 = $result->fetch_assoc();
    $p_id = $data1['p_id'];
    $p_image = $data1['p_image'];
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];

    // Check if the property with the given h_id is already registered for the user
    $checkQuery = "SELECT COUNT(*) as count FROM registerpg WHERE p_id = '$p_id'";
    $checkResult = $conn->query($checkQuery);
    $count = $checkResult->fetch_assoc()['count'];

    if ($count > 0) {
        echo '<script>alert("Sorry! Property already registered")</script>';
        echo '<script>window.location.href="pg.php";</script>';
        exit; // Stop further execution of the script
    }

    // Save the registration data in the registerp table
    $query = "INSERT INTO registerpg(name, phone, email, address, p_id, p_image) VALUES ('$name', '$phone', '$email', '$address', '$p_id', '$p_image')";
    $run = $conn->query($query);

    if ($run) {
        echo '<script>alert("Property Registered Successfully!")</script>';
        echo '<script>window.location.href="pg.php";</script>';
    } else {
        echo "Error in saving data: " . $conn->error;
    }
}
?>



<!-- Rest of your HTML code -->







<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rentex contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
     .form-control {
        border: none;
        border-radius: 10px;
        background-color: #f7f7f7;
        padding: 15px;
        margin-bottom: 15px;
        width: 100%;
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #555;
    }

    .form-control:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    .btn-a {
        background-color: #ff6767;
        border: none;
        color: #fff;
        padding: 15px 30px;
        border-radius: 10px;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
        transition: background-color 0.3s ease;
        cursor: pointer;
        font-family: Arial, sans-serif;
        font-size: 16px;
    }

    .btn-a:hover {
        background-color: #ff5050;
    }

    /* Optional: Add background and spacing to the form container */
    .section-t8 {
        background-color: #ebebeb;
        padding: 50px 0;
    }

    /* Optional: Center align the form */
    .col-md-7 {
        margin: 0 auto;
        max-width: 500px;
        margin-top:10%;
    }


    </style>

  <!-- =======================================================
  * Template Name: EstateAgency
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

 

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="assets/img/mylogo.png" style="width:100%; height: 80px;" alt="homepage" />
                        </b>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link " href="home.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.php">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="property-grid.html">Property</a>
          </li>

         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="rent.php">Home</a>
              <a class="dropdown-item " href="pg.php">PG</a>
              <a class="dropdown-item " href="flat.php">Flat</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cart</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="cart.php">Home</a>
              <a class="dropdown-item " href="cart1.php">PG</a>
              <a class="dropdown-item " href="cart2.php">Flat</a>
            </div>
          </li>
        </ul>
      </div>

      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>

    </div>
  </nav><!-- End Header/Navbar -->


  <main id="main">
        <div class="col-sm-12 section-t8">
            <div class="row">
                <div class="col-md-7">
                    <form action="register1.php" method="post">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control form-control-lg form-control-a" placeholder="Your email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control form-control-lg form-control-a" placeholder="Your phone number" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="address" class="form-control form-control-lg form-control-a" placeholder="Your address" required>
                                </div>
                            </div>
                            <!-- ... your existing code ... -->
                            <div class="col-md-12 text-center">
                                <button type="submit" name="submit" class="btn btn-a">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- End #main -->

    <!-- ... your existing code ... -->

</body>

</html>









    <!-- ======= Intro Single ======= -->
    <?php include 'footer.php';?>

  <!-- <div id="preloader"></div> -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>