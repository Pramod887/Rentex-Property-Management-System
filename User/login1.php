<?php
  include '../config/connection.php';
   session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $email = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT * FROM admin WHERE email = '$email' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         $_SESSION['admin_login']= $email;
         
         header("location:dashboard.php");
      }else {
         $error = "Your Login Email or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login Page in HTML with CSS Code Example</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="style2.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="assets/img/mylogo.png" style="width:100%; height: 300px;" alt="homepage" />
                        </b>
		<span>
			<p>login with social media</p>
			<a href="https://www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Login with Twitter</a>
		</span>
		</div>
	</div>
	
	
		<div class="right">
		<h5>Login</h5>
		<p>Don't have an account? <a href="signup.php">Creat Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" placeholder="email" name="email">
			<br>
			<input type="password" placeholder="password" name="password">
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
	<label>
		<input type="checkbox" name="item" checked/>
		<span class="text-checkbox">Remember me</span>
	</label>
			<p> forget password?</p>
		</div>
			
			<br>
			<a href="signup.php">
				<button class="block"><b>Register<b></button>
</a>
			<!-- <input type="submit" name="submit" value="Submit" class="btn btn-block btn-primary mb-4" /> -->
			
			<button>Login</button>
			
	</div>
	
</div>
<!-- partial -->
  
</body>
</html>
