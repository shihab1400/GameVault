<?php
   session_start();
   if (isset($_SESSION["user_id"])) {
      if($_SESSION["user_role"]=='admin') {

      } else { 
         echo 'User Dashboard';
      }
   } else {
      header("Location: ../index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="dashboard.css">
   <title>Document</title>
</head>
<body>
   <div class="dashboard_sidebar">
      <ul>
         <li><a href="addproduct.php">Add Product</a></li>
         <li><a href="displayProduct.php">View Order</a></li>
         <li><a href="../logout.php">Logout</a></li>
      </ul>
   </div>
   <div class="dashboard_main">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non architecto excepturi consectetur consequuntur corrupti quae sequi nobis voluptate ad neque harum eum natus similique quas veritatis asperiores laboriosam, deleniti, repudiandae iusto dignissimos, laborum qui sed! Voluptatibus incidunt odit debitis illum id cum aliquid excepturi amet libero quidem? Perspiciatis magnam, commodi aspernatur expedita laudantium dolorum, laboriosam nostrum natus repudiandae ea enim hic suscipit non illum maxime error dignissimos fugit veritatis, explicabo ad perferendis inventore debitis deserunt. Explicabo alias dolor perspiciatis, in quasi eius itaque esse maxime veniam cupiditate id distinctio veritatis corrupti eaque aperiam neque illo non sunt repellat? Quisquam, tempore.</p>
   </div>
</body>
</html>