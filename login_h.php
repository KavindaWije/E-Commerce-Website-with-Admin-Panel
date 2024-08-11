<?php
@include 'config.php'; 

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM user WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);
      if($row['user_type'] == 'admin'){
         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');
      } elseif($row['user_type'] == 'user'){
         $_SESSION['user_name'] = $row['name'];
         header('location:profile.php');
      }
   } else {
      $error[] = 'incorrect email or password!';
   }
}
?>
