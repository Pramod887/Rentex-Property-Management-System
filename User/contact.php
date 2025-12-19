<?php
session_start();

    
 include '../config/connection.php';
  if (isset($_POST['submit']))  {
      
       
       $f_name= $_POST['f_name'];
      $email= $_POST['email'];
       $f_subject= $_POST['f_subject'];
       $msg= $_POST['msg'];
       $rating=$_POST['rating'];


       {
        $query = "INSERT INTO feedback(f_name,email,f_subject,msg,rating)Values('$f_name','$email','$f_subject','$msg','$rating')";
        $run = $conn->query($query) or die("Error in saving Data".$conn->error);    
        if($run)
        {
        echo '<script>alert("feedback sending Successfull!")</script>';
        echo '<script>window.location.href="contact.php";</script>';
                }
            }
            }
?>




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
       .rating {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row-reverse; /* Change the flex-direction to reverse the order */
  }

  .rating input[type="radio"] {
    display: none;
  }

  .rating label {
    font-size: 30px;
    color: #ff9500;
    cursor: pointer;
  }

  .rating label:before {
    content: '\2605';
    opacity: 0.3;
  }

  .rating input[type="radio"]:checked ~ label:before {
    opacity: 1;


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
            <a class="nav-link active " href="contact.php">Contact</a>
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


  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contact US</h1>
              <span class="color-text-a">Your Property needs matter to us. Reach out to us today, and let us guide you towards your dream property. We're just a call or click away!</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <div>
                  <iframe width="800" height="500" frameborder="0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15563.8763372843!2d75.1868942!3d12.7805187!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4bd11a6a9050f%3A0xd866a7b41d8c42fc!2sVivekananda%20College%20of%20Arts%2C%20Science%20and%20Commerce!5e0!3m2!1sen!2sin!4v1686675153545!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">" scrolling="no">
                  </iframe>
                  <div style="white-space: nowrap; text-align: center; width: 800px; padding: 6px 0;">
                     <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=12.780016584568358~75.1819109916687&amp;sty=r&amp;lvl=16&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
                     <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=12.780016584568358~75.1819109916687&amp;sty=r&amp;lvl=16&amp;rtp=~pos.12.780016584568358_75.1819109916687____&amp;FORM=MBEDLD">Get Directions</a>
                    
                 </div>
             </div>
            </div>
          </div>
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="contact.php" method="post">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="f_name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="f_subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="msg" class="form-control"  cols="45" rows="8" placeholder="Message" required></textarea>
                      </div>
                      <p>Please rate your experience:</p>
                      <div class="rating">
                    <input type="radio" name="rating" id="star5" value="5" required/>
                    <label for="star5"></label>
                        <input type="radio" name="rating" id="star4" value="4" />
                     <label for="star4"></label>
                  <input type="radio" name="rating" id="star3" value="3" />
                     <label for="star3"></label>
                  <input type="radio" name="rating" id="star2" value="2" />
                  <label for="star2"></label>
                  <input type="radio" name="rating" id="star1" value="1" />
                    <label for="star1"></label>
                     </div>

                    <!-- <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                      </div>
                    </div> -->

                    <div class="col-md-12 text-center mt-3">
  <button type="submit" name="submit" class="btn btn-a" style="margin-bottom: 30px;">Send Message</button>
</div>

                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Say Hello</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a">rentex@gmail.com</span>
                      </p>
                      <p class="mb-1">Phone.
                        <span class="color-a"> +91 7676458734
                        </li></span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Find us in</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                       Vivekananda college,nehru nagar
                        <br> Puttur
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Social networks</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

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

</body>

</html>