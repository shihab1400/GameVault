<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="index.css">
</head>
<body>
   <!-- Header Starts -->
   <header class="header">
      <a href="index.php">shop</a>
      <a href="index.php"><img src="" alt=""></a>
      <nav>
         <ul>
            <li><a href="login.php">login</a></li>
            <li><a href="register.php">signup</a></li>
            <li><a href="">dashboard</a></li>
         </ul>
      </nav>
   </header>
   <!-- Header Ends -->

   <!-- Main Starts -->
   <main class="main">
      <?php for($i = 0; $i<10; $i++) {?>
         <div class="product">
            <img src="gameimg/game.jpg" alt="gameimg">
            <h2>product title</h2>
            <p>product description</p>
            <p>product quantity</p>
            <p class="product_price">product price</p>
            <a href="#">add to cart</a>
         </div>
      <?php }?>
   </main>
   <!-- Main Ends -->

   <!-- Footer Starts -->
   <footer class="footer">
      <p>copyright@: webtech knowledge</p>
   </footer>
   <!-- Footer Ends -->
</body>
</html>