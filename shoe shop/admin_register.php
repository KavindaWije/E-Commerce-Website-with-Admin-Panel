<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./style.css">
   <link rel="stylesheet" href="./account.css">
   <link rel="stylesheet" type="text/css" href="Cart.css">

   <!-- Include the PHP file -->
   <?php include './Admin_reghand.php'; ?>
</head>
<body>
<nav>
    <div class="logo">
      <img src="images/home/Black White Professional Concept Shoes Store Logo.png" alt="HF" width="100px">
    </div>
    <ul>
      <li><a href="homepage2.php">Home</a></li>
      <li><a href="About.html">About</a></li>
      <li><a href="Product.html">Product</a></li>
      <li><a href="Contact.html">Contact</a></li>
      <li><a href="account new.php">Account</a></li>
      <li class="search-bar">
        <input type="text" placeholder="Search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </li>
      <li class="cart-icon"><a href="Cart.html"><img src="cart.jpg" alt="Cart"></a></li>
      <!-- Add the admin login button -->
      <li class="admin-login">
        <a href="admin_login.php"><button>Admin Login</button></a>
      </li>
    </ul>
  </nav>
   
<div class="form-container">
   <form action="" method="post">
      <h3>register now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error_msg){
            
         }
      }
      ?>
      <input type="text" name="name" required placeholder="enter your name">
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <select name="user_type" required>

    <option value="user">Admin</option>

    
</select>
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="./login_form.php">login now</a></p>
   </form>
</div>
<footer>
    <div class="footer">
    <div class="row">
    <a href="account.html"><i class="fa fa-facebook"></i></a>
    <a href="account.html"><i class="fa fa-instagram"></i></a>
    <a href="account.html"><i class="fa fa-youtube"></i></a>
    <a href="account new.html"><i class="fa fa-twitter"></i></a>
    </div>
    
    <div class="row">
    <ul>
    <li><a href="#">Contact us</a></li>
    <li><a href="#">Our Services</a></li>
    <li><a href="#">Privacy Policy</a></li>
    <li><a href="#">Terms and Conditions</a></li>
    <li><a href="#">Career</a></li>
    </ul>
    </div>
    
    <div class="row">
    INFERNO Copyright © 2023 Inferno - All rights reserved || Designed By: Ashan 
    </div>
    </div>
    </footer>

</body>
</html>
