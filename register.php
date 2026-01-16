<?php
   include "db.php";
   if(isset($_POST['submit'])) {
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $dob = $_POST['dob'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $role = $_POST['role'];

      $sql = "INSERT INTO users (firstName, lastName, dob, email, password, role) 
               VALUES ('$firstName', '$lastName', '$dob', '$email', '$password', '$role')";
      $result = mysqli_query($conn, $sql);

      if(!$result) {
         echo "Error: {$conn->error}";
      } else {
         echo "Registered Successfully!";
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="register.css">
   <title>Document</title>
</head>
<body>
   <a href="index.php" class="shoplink">Shop</a>
   <div class="registerdiv">
      <form action="register.php" method="post">
         <input type="text" name="firstName" placeholder="Enter your First Name!" required>
         <input type="text" name="lastName" placeholder="Enter your Last Name!" required>
         <input type="date" name="dob" placeholder="Enter Date of Birth!" required>
         <input type="email" name="email" placeholder="Enter Your Email!" required>
         <input type="password" name="password" placeholder="Enter Password!" required>
         <select name="role" required>
            <option value="">Register as</option>
            <option value="buyer">Buyer</option>
            <option value="seller">Seller</option>
         </select>
         <input type="submit" value="sign up" name="submit" class="btn">
         <p>Go To Login! <a href="login.php">Login!</a></p>
      </form>
   </div>
</body>
</html>