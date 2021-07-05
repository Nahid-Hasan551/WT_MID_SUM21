<?php
  session_start();
   if (!isset($_SESSION["loggeduser"])) {
  //if (!isset($_COOKIE["loggeduser"])) {
    header("Location: login.php");
  }
 ?>

<html>
  <body>
    <h1 align="center">Welcome <?php echo $_SESSION["loggeduser"]; ?></h1>
    <a href="product.php">Add Products</a>
    <a href="">All Products</a>
    <a href="">All Users</a>
    <a href="">All Categories</a>
  </body>
</html>