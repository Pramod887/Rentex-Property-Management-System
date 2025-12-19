<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RENTEX</title>
 

 
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
    .title-a{
      color:black;
    }
    .property-carousel {
      padding: 50px 0;
      background-color: white;
    }

    .property-carousel .property-image {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .property-carousel .property-image img {
      max-width: 100%;
      max-height: 400px;
    }

    .property-carousel .property-details {
      padding: 20px;
    }

    .property-carousel .property-details h2 {
      font-size: 26px;
      font-weight: bold;
      margin-bottom: 10px;
      color:blue;
      text-decoration:underline;
    }

    .property-carousel .property-details p {
      font-size: 20px;
      font-weight:bold;
      color:black;
    }
    .profile-option {
  position: fixed;
  bottom: 80px;
  right: 20px;
  width: 50px;
  height: 50px;
  background-color: #ffffff;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}

.profile-option:hover {
  background-color: #f1f1f1;
}

.profile-photo {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.profile-popup {
  position: fixed;
  top: 20px; /* Adjust the top position as per your preference */
  right: 20px; /* Adjust the right position as per your preference */
  width: 200px; /* Adjust the width as per your preference */
  height: 200px; /* Adjust the height as per your preference */
  background-color: grey;
  display: none;
  align-items: center;
  justify-content: center;
  margin-top:20%;
}

.profile-popup-content {
  background-color:grey;
  padding: 20px;
  text-align: center;
  color:blue;
}

.profile-popup-photo {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  margin-bottom: 10px;
}

.close-profile-popup {
  background-color: #f1f1f1;
  border: none;
  padding: 10px 20px;
  border-radius: 4px;
  cursor: pointer;
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

  <!-- ======= Property Search Section ======= -->
  

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
                            <img src="assets/img/mylogo.png"style="width:100%; height: 80px;" alt="homepage" />
                        </b>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link active" href="home.php">Home</a>
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
            <a class="nav-link  " href="contact.php">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cart</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="cart.php">Home</a>
              <a class="dropdown-item " href="cart1.php">PG</a>
              <a class="dropdown-item " href="cart2.php">Flat</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link  " href="index.php">Logout</a>
          </li>
        </ul>
      </div>

     

    </div>
  </nav><!-- End Header/Navbar -->
  
  <!-- ======= Intro Section ======= -->
 
<!-- End Intro Section -->


  <main id="main">
 

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-house-door-fill"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Home</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                Home is not just a place, it's a feeling of comfort, warmth, and belonging. Let us help you find the perfect home that captures your heart and makes everyday moments extraordinary
                </p>
              </div>
              <div class="card-footer-c">
                
                 
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-buildings"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Flat</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                A flat is more than just a living space; it's a canvas where you create memories, find comfort, and express your unique style. Let us help you find the perfect flat that complements your lifestyle and becomes a place you can truly call home
                </p>
              </div>
              <div class="card-footer-c">
              
              
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-buildings"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Pg</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                Discover the perfect paying guest accommodation that combines comfort, convenience, and a welcoming atmosphere. Our paying guest options offer a home away from home, where you can forge new friendships, create lifelong memories, and focus on achieving your goals.
                </p>
              </div>
              <div class="card-footer-c">
               
                  
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <section class="property-carousel">
    <div class="container">
      <div class="row">
      <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
              <h2 class="title-a">New Properties 	🏠</h2>
              </div>
            </div>
          </div>
        <div class="col-md-12">
          <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <?php
              include '../Config/connection.php';

              // Fetch properties from the addhome table
              $query = "SELECT * FROM addhome";
              $result = $conn->query($query);

              if ($result->num_rows > 0) {
                $first = true; // Flag to set the first item as active
                while ($row = $result->fetch_object()) {
                  $activeClass = $first ? 'active' : ''; // Add 'active' class to the first item
                  ?>
                  <div class="carousel-item <?php echo $activeClass; ?>">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="property-image">
                          <img src="<?php echo '../seller/homeupload/'.$row->h_image;?>" alt="" class="img-fluid" />
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="property-details">
                          <h2><?php echo $row->h_name ?></h2>
                          <p>Price:<?php echo $row->h_phone ?></p>
                          <p>Location:<?php echo $row->h_add ?></p>
                          <p>Catagory:<?php echo $row->cat ?></p>
                          
                          <!-- Add additional property details as needed -->
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                  $first = false; // Set the flag to false after the first item
                }
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a"> Our Best sellers</h2>
              </div>
              <div class="title-link">
                <a href="#">All sellers
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div><div class="row">
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/sell1.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">Ashwasoorya real estate
                        </a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                   A well suited real estate business organization ,user loves every corner of the house or flat they provide
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +91 9647832898
                    </p>
                    <p>
                      <strong>Email: </strong> ashwasoorya@gmail.com
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/sell4.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">99.acres
                        </a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                  These organizations properties are one of the top selling and trustable properties
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +91 9587483212
                    </p>
                    <p>
                      <strong>Email: </strong> 99acres@gmail.com
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/sell3.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.html" class="link-two">luxury real estate
                        </a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    World of real estate posibilities ,offering a seamless platform to find your dream property amist a sea of choices
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +91 6362188088
                    </p>
                    <p>
                      <strong>Email: </strong> lrealestate@gmail.com
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Agents Section -->
    <div class="profile-option">
      <img src="https://th.bing.com/th/id/OIP.Lpx9j83qR_cfQuaPHuvwWQHaHw?pid=ImgDet&rs=1" alt="Profile Photo" class="profile-photo">
    </div>

    <div id="profile-popup" class="profile-popup">
      <div class="profile-popup-content">
        <img src="https://th.bing.com/th/id/OIP.j1rpn-KTUmqcVBQygXuOuQHaIk?w=158&h=182&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Profile Photo" class="profile-popup-photo">
        <h2>Profile</h2>
        <?php
        // Fetch email and password from the register table
        include '../Config/connection.php';

        $query = "SELECT Username,email FROM register WHERE ID = 34"; // Modify the query as per your needs
        $result = mysqli_query($conn, $query);

        if ($result) {
          $row = mysqli_fetch_assoc($result);
          $Username = $row['Username'];
          $email = $row['email'];
          ?>

          <p>Username: <?php echo $Username; ?></p>
          <p>Email: <?php echo $email; ?></p>
         
          <?php
          mysqli_free_result($result);
        } else {
          echo "Error fetching data from the database: " . mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>

        <button id="close-profile-popup" class="close-profile-popup">Close</button>
      </div>
    </div>

    <!-- ======= Latest News Section ======= -->
    <section class="section-news section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest News</h2>
              </div>
              <div class="title-link">
                <a href="#">Services
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div id="news-carousel" class="swiper">
          <div class="swiper-wrapper">

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Furniture Space</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Eye catching layout and dimensions of the room is essential so decorate your room with beautifull furnitures
                          </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-5.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">interiors</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Bring home beautiful interiors that fit your budget. 
            </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-7.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Amazing gardens</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="#">Homes for every style Superior finishes, trendy designs  at affordable prices.
                          </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

            <div class="carousel-item-c swiper-slide">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Outdoor scenery</a>
                    </div>
                    <div class="card-title-b">Beautiful things can happen when you have good outdoor.
                      <h2 class="title-2">
                        <a href="#">
                          </a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- End carousel item -->

          </div>
        </div>

        <div class="news-carousel-pagination carousel-pagination"></div>
      </div>
    </section><!-- End Latest News Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 <?php include 'footer.php';?>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      // Activate the first item in the carousel
      $('#propertyCarousel .carousel-inner .carousel-item:first').addClass('active');

      // Start the carousel and make it continuous
      $('#propertyCarousel').carousel({
        interval: 10, // Set the interval time between slides (in milliseconds)
        wrap: true // Enable continuous sliding
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
  var profileOption = document.querySelector(".profile-option");
  var profilePopup = document.getElementById("profile-popup");
  var closePopup = document.getElementById("close-profile-popup");

  profileOption.addEventListener("click", function() {
    profilePopup.style.display = "flex";
  });

  closePopup.addEventListener("click", function() {
    profilePopup.style.display = "none";
  });
});
</script>
</body>

</html>