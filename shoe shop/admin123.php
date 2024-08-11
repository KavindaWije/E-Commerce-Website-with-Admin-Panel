<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./style.css">
   <link rel="stylesheet" href="./account.css">

   <!-- Include the PHP file -->
   <?php 
      include './123.php'; 
   ?>
</head>
<body>
   
<?php include './nav.php'; ?>
   
<div class="form-container">
   <form action="" method="post">
      <h3> ADMIN LOGIN</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            
         }
      }
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>don't have an account? <a href="admin_register.php">register now</a></p>
   </form>
</div>

</body>
</html>