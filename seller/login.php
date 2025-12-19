<?php
  include '../config/connection.php';
   session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM sellerlogin WHERE email = '$email' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         $_SESSION['admin_login']= $email;
         
         header("location:dashboard.php");
      }else {
         $error = "<h3>Your Login Email or Password is invalid</h3>";
      }
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rentex</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            background-image: url('assets/images/widget/Ashram2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
			background-color:lightblue;
        }

        .auth-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
			
        }

        .auth-content {
            width: 400px;
            background-color: grey;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            animation: slide-up 0.5s ease forwards;
        }

        @keyframes slide-up {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .auth-content .logo {
            text-align: center;
            margin-bottom: 20px;
            opacity: 0;
            animation: fade-in 1s ease forwards 0.5s;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .auth-content .logo img {
            width: 250px;
			height: 250px;
            border-radius: 50%;
        }

        .auth-content h4 {
            text-align: center;
            margin-bottom: 20px;
            color: black;
            opacity: 0;
            animation: fade-in 1s ease forwards 0.8s;
        }

        .auth-content form .form-group {
            position: relative;
            margin-bottom: 20px;
            opacity: 50;
            animation: fade-in 1s ease forwards 1s;
        }

        .auth-content form .form-group input {
            width: 100%;
            padding: 10px;
            border: 10px;;
            border-radius: 10px;
            font-size: 14px;
            background-color: yellow;
            color: #333;
            outline: none;
        }

        .auth-content form .form-group i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: #666;
        }

        .auth-content form .form-group input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .auth-content form .form-group input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .auth-content form .form-group a {
            position: absolute;
            right: 0;
            bottom: -20px;
            text-align: center;
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .auth-content form .form-group a:hover {
            color: yellow;
        }
       

    </style>
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="logo">
                <img src="images/mylogo.png" alt="Logo">
            </div>
            <h4>LOG IN</h4>
            <form action="login.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
  
       
      
    <input type="text" class="form-control" name="email" id="Email" placeholder="Email address" required>
  
</div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="Password" placeholder="Password" required>
                    
                </div>
				<?php
                if (isset($error)) {
                    echo '<div class="error-message">' . $error . '</div>';
                }
				if (isset($_SESSION['login_success'])) {
                    echo '<div class="success-message">Login successful</div>';
                    unset($_SESSION['login_success']);
                }
                ?>
                <input type="submit" name="submit" value="LogIn" class="btn btn-block btn-primary mb-4" />
                <a href="../user/index.php" class="btn btn-block btn-primary mb-4"style="padding:10px 55px;color:black;text-decoration:none;" >Back</a>
            </form>
        </div>
    </div>
</body>

</html>
