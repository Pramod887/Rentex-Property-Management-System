<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rentex </title>
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
  <style> .search-bar {
  background-color: #f8f9fa;
  padding: 40px 0;
  margin-top:-10%;
  margin-left:50%;
}

.search-bar .container {
  text-align: center;
}

.search-bar .input-group {
  display: inline-flex;
  max-width: 500px;
}

.search-bar .form-select {
  flex: 1;
  margin-right: 10px;
}

.search-bar .btn-primary {
  min-width: 120px;
}</style>
  
  

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
            <a class="nav-link active" href="pro.php">Property</a>
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

  <main id="main">
     <!-- ======= Intro Single ======= -->
     <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Properties</h1>
              
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    <section class="search-bar">
      <div class="container">
        <form id="searchForm" method="GET" action="">
          <div class="input-group">
            <select id="searchInput" name="search" class="form-select">
            <option value="">Select City</option>
              <option value="Bangalore">Bangalore</option>
              <option value="Mangalore">Mangalore</option>
              <option value="Mysore">Mysore</option>
              <option value="Madikeri">Madikeri</option>
              <option value="Bellary">Bellary</option>
              <option value="Puttur">Puttur</option>
            </select>
            <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
          </div>
        </form>
      </div>
    </section><!-- End Search Bar -->

    <!-- ======= Intro Single ======= -->
    <section class="property-grid grid">
  <div class="container">
    <div class="row">
    <?php
          include '../Config/connection.php';

          $search = isset($_GET['search']) ? $_GET['search'] : '';

          // Fetch properties from the addhome table based on the selected city
          $query = "SELECT * FROM addhome";
          if (!empty($search)) {
            $query .= " WHERE h_add = '$search'";
          }

          $result = $conn->query($query);
          $propertiesFound = false;

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_object()) {
              $propertiesFound = true;
              ?>
           <div class="col-md-6">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="<?php echo '../seller/homeupload/'.$row->h_image;?>" alt="" class="img-a img-fluid" />
          </div>
          <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo $row->h_name ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $row->h_phone ?></span>
                   
                    
                  
                      <span class="price-a"><?php echo $row->cat ?></span>
                      <span class="price-a">Home</span>
                    </div>
                    
                   
                    <a href="property-single.php?h_id=<?php echo $row->h_id; ?>" class="link-a">Click here to view<span class="bi bi-chevron-right"></span></a>
                  </div>
                  <div class="card-footer-a">
                  <a href="cart.php?h_id=<?php echo $row->h_id; ?>" class="btn btn-primary">Favourites</a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
      }
      //fetch property from addflat
      $search = isset($_GET['search']) ? $_GET['search'] : '';

      // Fetch properties from the addhome table based on the selected city
      $query = "SELECT * FROM addflat";
      if (!empty($search)) {
        $query .= " WHERE f_add = '$search'";
      }

      $result = $conn->query($query);
      $propertiesFound = false;

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
          $propertiesFound = true;
          ?>
           <div class="col-md-6">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="<?php echo '../seller/homeupload/'.$row->f_image;?>" alt="" class="img-a img-fluid" />
          </div>
          <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo $row->f_name ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $row->f_phone ?></span>
                   
                    
                  
                      <span class="price-a"><?php echo $row->cat ?></span>
                      <span class="price-a">Flat</span>
                    </div>
       
        <a href="property-singel1.php?f_id=<?php echo $row->f_id; ?>" class="link-a">Click here to view<span class="bi bi-chevron-right"></span></a>
                  </div>
                  <div class="card-footer-a">
                  <a href="cart2.php?f_id=<?php echo $row->f_id; ?>" class="btn btn-primary">Favourites</a>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        }
      }
      
      // Fetch properties from the addpg table
      $search = isset($_GET['search']) ? $_GET['search'] : '';

      // Fetch properties from the addhome table based on the selected city
      $query = "SELECT * FROM addpg";
      if (!empty($search)) {
        $query .= " WHERE p_add = '$search'";
      }

      $result = $conn->query($query);
      $propertiesFound = false;

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
          $propertiesFound = true;
          ?>
           <div class="col-md-6">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            <img src="<?php echo '../seller/homeupload/'.$row->p_image;?>" alt="" class="img-a img-fluid" />
          </div>
          <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="#"><?php echo $row->p_name ?></a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a"><?php echo $row->p_phone ?></span>
                   
                    
                  
                      <span class="price-a"><?php echo $row->cat ?></span>
                      <span class="price-a">PG</span>
                    </div>
                 
                    <a href="property-singel2.php?p_id=<?php echo $row->p_id; ?>" class="link-a">Click here to view<span class="bi bi-chevron-right"></span></a>
                  </div>
                  <div class="card-footer-a">
                  <a href="cart1.php?p_id=<?php echo $row->p_id; ?>" class="btn btn-primary">Favourites</a>
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          }

          if (!$propertiesFound) {
            echo "<p>No properties found for the selected address.</p>";
          }
          ?>
      
    </div>
  </div>
</section>




  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include 'footer.php';?>
  <!-- End  Footer -->

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