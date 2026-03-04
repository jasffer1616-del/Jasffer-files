<?php
session_start();
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IT Merchandise</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>

  
    <div class="navbar">
      <div class="nav-icons">
        <a href="homepage.html">Home</a>
        <a href="products.php">Products</a>
        <a href="profile.php">Profile</a>
        <a href="orders.php">Orders</a>
        <a href="contacts.html">Contacts</a>
      </div>
    </div>

  <div class="notif-container">
  

   
    <form class="order-form" method="post" action="">
      <h2 class="h2_orders">Order Information</h2>
      <h4 class="h_orders">Product</h4>
       <input type="text" id="product" name="product" 
       value="<?php echo isset($_SESSION['product']) ? $_SESSION['product'] : ''; ?>" 
       placeholder="Product">
       <h4 class="h_orders">Name</h4>
      <input type="text" id="name" name="name" 
       value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?>" 
       placeholder="Name">
       <h4 class="h_orders">Size</h4>
      <input type="text" id="size" name="size" 
       value="<?php echo isset($_SESSION['size']) ? $_SESSION['size'] : ''; ?>" 
       placeholder="Size">
       <h4 class="h_orders">Section</h4>
       <input type="text" id="section" name="section" 
       value="<?php echo isset($_SESSION['section']) ? $_SESSION['section'] : ''; ?>" 
       placeholder="Section">
       <h4 class="h_orders">ID Number</h4>
       <input type="text" id="idnumber" name="idnumber" 
       value="<?php echo isset($_SESSION['idnumber']) ? $_SESSION['idnumber'] : ''; ?>" 
       placeholder="ID Number">
       <h4 class="h_orders">Reference</h4>
       <input type="text" id="reference" name="reference" 
       value="<?php echo isset($_SESSION['reference']) ? $_SESSION['reference'] : ''; ?>" 
       placeholder="Reference">
       <h4 class="h_orders">Amount</h4>
       <input type="text" id="amount" name="amount" 
       value="<?php echo isset($_SESSION['amount']) ? $_SESSION['amount'] : ''; ?>" 
       placeholder="Amount">
      </form>
  </div>
  
  



  </body>