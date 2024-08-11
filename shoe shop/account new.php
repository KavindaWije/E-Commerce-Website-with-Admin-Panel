<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>&lt;align = "centre"&gt;&lt;b&gt;User Login&lt;/b&gt;&lt;/align&gt;</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Add viewport meta tag -->
	<title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./style.css">
   <link rel="stylesheet" href="./account.css">
   <link rel="stylesheet" type="text/css" href="Cart.css">
   <style>
    nav ul li.admin-login {
  margin-top: auto; /* Pushes the button to the bottom */
}

nav ul li.admin-login button {
  background-color: #4caf50;
  color: white;
  border: none;
  padding: 10px 20px;
  cursor: pointer;
  font-size: 16px;
  border-radius: 5px;
  transition: background-color 0.3s;
}

nav ul li.admin-login button:hover {
  background-color: #4caf50;
}
  </style>


   <!-- Include the PHP file -->
   <?php include './login_h.php'; ?>
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
        <a href="admin_page.php"><button>Admin Login</button></a>
      </li>
    </ul>
  </nav>
  <div class="form-container">
    <form action="" method="post">
       <h3>login now</h3>
       <?php
       if(isset($error)){
          foreach($error as $error){
             
          }
       }
       ?>
       <input type="email" name="email" required placeholder="enter your email">
       <input type="password" name="password" required placeholder="enter your password">
       <input type="submit" name="submit" value="login now" class="form-btn">
       <p>don't have an account? <a href="register_form.php">register now</a></p>
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