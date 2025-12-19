<?php
session_start();

// Check if the error_msg session variable is set



if (isset($_SESSION['delete_msg'])) {
    $deleteMsg = $_SESSION['delete_msg'];
    echo "<script>alert('$deleteMsg');</script>";
    unset($_SESSION['delete_msg']); // Clear the session variable
}

// Check if cart session exists
if (isset($_SESSION['cart1'])) {
    $cartItem = $_SESSION['cart1'];
} else {
    $cartItem = [];
}

// Check if property ID is passed through the URL
if (isset($_GET['h_id'])) {
    $h_id = $_GET['h_id'];

    // Check if the item is already in the cart
    $itemExists = false;
    foreach ($cartItem as $item) {
        if ($item->h_id == $h_id) {
            $itemExists = true;
            break;
        }
    }

    if (!$itemExists) {
        // Store the property details in the cart array
        $propertyDetails = getPropertyDetails($h_id);
        if ($propertyDetails !== null) {
            $cartItem[] = $propertyDetails;
            $_SESSION['cart1'] = $cartItem;
        }
    } else {
        // Item already exists in the cart
        $errorMsg = "Item already exists in the cart.";
        header("Location: cart.php?error=" . urlencode($errorMsg));
        exit();
    }

    // Redirect to cart.php to display the cart contents
    header("Location: cart.php");
    exit();
}

// Function to fetch property details based on ID
function getPropertyDetails($h_id)
{
    include '../Config/connection.php';

    // Fetch property details from the database
    $query = "SELECT * FROM addhome WHERE h_id = '$h_id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_object();
        return $row;
    }

    return null;
}

// Check if delete button is clicked
if (isset($_GET['delete'])) {
    $deleteIndex = $_GET['delete'];

    // Remove the item from the cart
    if (isset($cartItem[$deleteIndex])) {
        unset($cartItem[$deleteIndex]);
        $_SESSION['cart1'] = array_values($cartItem);
        $_SESSION['delete_msg'] = "Property Removed From Favourites";
    }

    // Redirect to cart.php to display the updated cart contents
    header("Location: cart.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rentex properties</title>
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
  
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        /* CSS for the table structure */
        table {
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        .delete-btn {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }
        
        .empty-cart-msg {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
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
  <div>
    <!-- Display the cart items -->
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10%;
            background-color: lightblue;
        }

        table td {
            padding: 10px;
            border: 1px solid #ccc;
            border-color: blue;
        }

        table img {
            max-width: 100px;
            max-height: 100px;
        }

        .delete-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
        }

        .back-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 5px;
            display: block;
            margin-top: 10px;
        }

        .error-message {
            color: #dc3545;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .empty-cart-message {
            font-weight: bold;
            margin-top: 10%;
            font-size: 30px;
        }
    </style>

    <!-- Error message -->
    <?php if (isset($errorMsg)): ?>
        <div class="error-message"><?php echo $errorMsg; ?></div>
    <?php endif; ?>

    <!-- Display the cart items -->
    <?php if (count($cartItem) > 0): ?>
        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($cartItem as $index => $items): ?>
                <tr>
                    <td><img src="../seller/homeupload/<?php echo $items->h_image; ?>" alt="Property Image"></td>
                    <td><?php echo $items->h_name; ?></td>
                    <td><?php echo $items->h_phone; ?></td>
                    <td><a href="cart.php?delete=<?php echo $index; ?>" class="delete-button">Delete</a></td>
                    <td><a href="property-single.php?h_id=<?php echo $items->h_id; ?>" class="delete-button">View</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <div class="empty-cart-message">Your cart is empty.</div>
    <?php endif; ?>

    <!-- Back button -->
    <a href="rent.php" class="back-button">Back</a>

    <?php include 'footer.php';?>
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
          
</body>
</html>
