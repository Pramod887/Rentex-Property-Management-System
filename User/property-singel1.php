<?php
include '../Config/connection.php';

// Check if the property ID is provided in the query parameter
if (isset($_GET['f_id'])) {
  $propertyId = $_GET['f_id'];

  // Fetch the property details from the addhome table based on the ID
  $query = "SELECT * FROM addflat WHERE f_id = $propertyId";
  $result = $conn->query($query);

  if ($result->num_rows > 0) {
    $property = $result->fetch_object();
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

   
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
            <a class="nav-link " href="pro.php">Property</a>
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

    
    </div>
  </nav><!-- End Header/Navbar -->
  <!-- End Header/Navbar -->

    
      <style>
        .property-details {
          max-width: 800px;
          margin: 0 auto;
          padding: 20px;
          background-color: grey;
          border: 1px solid #ccc;
          margin-top:10%;
        }

        .property-image {
          max-width: 400px;
          height: auto;
          margin-bottom: 20px;
        }

        .property-table {
          width: 100%;
          border-collapse: collapse;
          margin-bottom: 20px;
          
        }

        .property-table th,
        .property-table td {
          padding: 10px;
          text-align: left;
          border-bottom: 1px solid #ccc;
          font-weight: bold;
          background-color:lightblue;
        }

        .property-table th {
          background-color: lightblue;
        }

        .rent-button {
          display: inline-block;
          padding: 10px 20px;
          background-color: #4CAF50;
          color: white;
          text-decoration: none;
          border-radius: 4px;
          transition: background-color 0.3s ease;
        }

        .rent-button:hover {
          background-color: #45a049;
        }

        .animated {
          animation-duration: 1s;
          animation-fill-mode: both;
        }

        @keyframes fadeInUp {
          from {
            opacity: 0;
            transform: translate3d(0, 20px, 0);
          }
          to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
          }
        }

        .fadeInUp {
          animation-name: fadeInUp;
        }
      </style>
    </head>
    <body>
      <div class="property-details animated fadeInUp">
        <img src="<?php echo '../seller/homeupload/'.$property->f_image; ?>" alt="Property Image" class="property-image">
        <table class="property-table">
          <tr>
            <th>Property Title</th>
            <td><?php echo $property->f_name; ?></td>
          </tr>
          <tr>
            <th>Price</th>
            <td><?php echo $property->f_phone; ?></td>
          </tr>
          <tr>
            <th>City</th>
            <td><?php echo $property->f_add; ?></td>
          </tr>
          <tr>
            <th>Category</th>
            <td><?php echo $property->cat; ?></td>
          </tr>
          <tr>
            <th>Details</th>
            <td><?php echo $property->f_details; ?></td>
          </tr>
        </table>
        <a href="flat.php" class="rent-button">Back</a>
        <!-- Display other property details as needed -->
      </div>
      <?php include 'footer.php';?>

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
    </body>
    </html>

    <?php
  } else {
    echo 'Property not found';
  }
} else {
  echo 'Invalid property ID';
}
?>
