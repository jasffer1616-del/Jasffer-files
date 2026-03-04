<?php
session_start();
include("connect.php");
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

<div class="profile-card">
    <h2 class="profile-info">Profile Information</h2>

    <form>
        <label for="fName">First Name</label>
      <input type="text" id="fName" name="fName" 
       value="<?php echo isset($_SESSION['fName']) ? $_SESSION['fName'] : ''; ?>" 
       placeholder="First Name">

        <label for="lName">Last Name</label>
      <input type="text" id="lName" name="lName" 
       value="<?php echo isset($_SESSION['lName']) ? $_SESSION['lName'] : ''; ?>" 
       placeholder="Last Name">

        <label for="email">Email</label>
      <input type="email" id="email" name="email" 
       value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>" 
       placeholder="Your Email">


        <div class="btn-container">
            <a href="logout.php"><button type="button">Logout</button></a>
        </div>
    </form>
</div>



</body>
</html>