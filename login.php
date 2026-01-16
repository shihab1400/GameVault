<?php
   include "db.php";
   session_start();
   if(isset($_POST["submit"])) {
      $email = $_POST["email"];
      $password = $_POST["password"];

      $sql = "select * from users where email = '$email'";
      $result = mysqli_query($conn, $sql);
      if($result->num_rows > 0) {
         $row = mysqli_fetch_array($result);
         if($row["password"] == $password) {
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_name"] = $row["lastName"];
            $_SESSION["user_role"] = $row["role"];
            if($_SESSION['user_role']=='admin') {
               header("Location: admin/dashboard.php");
            } else if($_SESSION['user_role']=='buyer') {
               echo 'Buyer dashboard';
            } else {
               echo 'Seller dashboard';
            }
         } else {
            echo "Wrong Password!";
         }
      } else {
         echo "Not registered! Sign Up first";
      }
   }
?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="login.css">
   <title>Document</title>
</head>
<body>
   <div class="overlay"></div>
   <div class="login-container">
      <form action="login.php" method="post">
         <input type="email" name="email" placeholder="Enter Email!" required>
         <input type="password" name="password" placeholder="Enter Password!" required>
         <input type="submit" name="submit" value="login" class="btn">
         <p>Not Registered Yet! <a href="register.php">Sign Up!</a></p>
      </form>
   </div>
</body>
</html>