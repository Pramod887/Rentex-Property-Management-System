<?php
include('../config/connection.php');
session_start();
$msg = "";
$Error_Pass = "";
if (isset($_GET['Verification'])) {
  $raquet = mysqli_query($conn, "SELECT * FROM register WHERE CodeV='{$_GET['Verification']}'");
  if (mysqli_num_rows($raquet) > 0) {
    $query = mysqli_query($conn, "UPDATE user SET verification='1' WHERE CodeV='{$_GET['Verification']}'");
    if ($query) {
      $rowv = mysqli_fetch_assoc($raquet);
      header("Location: home.php?id='{$rowv['id']}'");
    }else{
      header("Location: index.php");
    }
  } else {
    header("Location: index.php");
  }
}
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $Pass = mysqli_real_escape_string($conn,$_POST['Password']);
  $sql = "SELECT * FROM register WHERE email='{$email}' and Password='{$Pass}'";
  $resulte = mysqli_query($conn, $sql);

  if (mysqli_num_rows($resulte) === 1) {
    $row = mysqli_fetch_assoc($resulte);
    if ($row['verification'] === '0') {
      $_SESSION['user_id']=$row['id'];
      

         header("Location: home.php");
    }
    else
    {
      $msg = "<div class='alert alert-info'>First Verify Your Account</div>";
    }
  }
  else
  {
    $msg = "<div class='alert alert-danger'>Email or Password is not match</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
  <title>Sign in & Sign up Form</title>
  <style>
    .alert {
      padding: 1rem;
      border-radius: 5px;
      color: white;
      margin: 1rem 0;
      font-weight: 500;
      width: 65%;
    }

    .alert-success {
      background-color: #42ba96;
    }

    .alert-danger {
      background-color: #fc5555;
    }

    .alert-info {
      background-color: #2E9AFE;
    }

    .alert-warning {
      background-color: #ff9966;
    }
    .Forget-Pass{
      display: flex;
      width: 65%;
    }
    .Forget{
      color: #2E9AFE;
      font-weight: 500;
      text-decoration: none;
      margin-left: auto;
      
    }
    .button {
      padding: 10px 20px;
      background-color: ;
      color: white;
      border: none;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      cursor: pointer;
    }
    .logo {
    width: 110px; /* Adjust the width as per your preference */
    height: auto; /* Adjust the height as per your preference */
    margin-bottom: 20px; /* Add some bottom margin to create spacing */
  }
     
    
  </style>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="POST" class="sign-in-form">
          <h2 class="title">Sign in</h2>
          <?php echo $msg ?>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" name="email" placeholder="Email" />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" name="Password" placeholder="Password" />
          </div>
          <div class="Forget-Pass">
          <a href="Forget.php" class="Forget">Forget Password ?</a></div>
          <input type="submit" name="submit" value="Login" class="btn solid" />
          
        </form>
        <div class="social-media">

<a href="../admin/login.php" class="btn"  style="padding:10px 55px;text-decoration:none;">ADMIN</a>
<a href="../seller/login.php" class="btn"  style="padding:10px 55px;text-decoration:none;">SELLER</a>

</div>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
     
        <div class="content">
  <img src="assets/img/mylogo.png" alt="Logo" class="logo">
  <h3>New here?</h3>
  <p>You are just one step away from exploring Rentex</p>
  <a href="lSignup.php" class="btn"  style="padding:10px 50px;text-decoration:none;">Sign up</a>
        </div>
       
      </div>
    </div>
  </div>

  <script src="app.js"></script>
</body>

</html>