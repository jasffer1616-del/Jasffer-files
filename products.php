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
    <link rel="stylesheet" href="style2.css">
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div class="nav-icons">
        <a  href="homepage.html">Home</a>
        <a href="products.php">Products</a>
        <a href="profile.php">Profile</a>
        <a href="orders.php">Orders</a>
        <a href="contacts.html">Contacts</a>
    </div>
</div>

<!-- STEP 0: PRODUCT LIST -->
<div class="product-container" id="gcash">
    <div class="product-card">
        <img class="img1" src="it-tshirt.jpg" alt="IT T-SHIRT">
        <h3>IT T-SHIRT</h3>
        <div class="price">
            <button class="btn1" id="payButton">₱450</button>
        </div>
    </div>

    <div class="product-card" id="idgcash">
        <img class="img1" src="lanyard.jpg" alt="IT ID LANYARD">
        <h3>IT ID LANYARD</h3>
        <div class="price">
            <button class="btn1" id="idpayButton">₱100</button>
        </div>
    </div>
</div>

<!-- STEP 1: TSHIRT FORM -->
<div class="body1" id="pay" style="display:none;">
    <div class="card">
        <div class="image-box">
            <img src="it-tshirt.jpg" alt="IT T-Shirt">
            <p class="homep">IT T-SHIRT</p>

            <form id="tsForm">
                <input class="input1" type="text" name="name" placeholder="Name" required>
                <input class="input1" type="text" name="section" placeholder="Section" required>
                <input class="input1" type="text" name="size" placeholder="Size" required>
                <input class="input1" type="text" name="idnumber" placeholder="ID Number" required>


                <button class="button2" type="button" id="paymentButton">Pay Gcash</button>

                <p class="note">
                <strong>Note:</strong> Payment must be 450 pesos.
                </p>
            </form>

        </div>
    </div>
</div>

<!-- STEP 2: TSHIRT PAYMENT -->
<div class="card" id="payment" style="display:none;">
    <div class="image-box">
        <img src="qr.jpg" alt="QR">

        <form id="tsPayForm">
            <label>Reference:</label>
            <input class="input1" type="text" name="reference" required>

            <label>Amount:</label>
            <input class="input1" type="number" name="amount" required>

            <button class="button2" type="button" id="gcashButton">Place Order</button>
             <p class="note">
                <strong>Note:</strong> Payment must be 450 pesos.
                </p>
        </form>
    </div>
</div>

<!-- STEP 1: LANYARD FORM -->
<div class="body1" id="idpay" style="display:none;">
    <div class="card">
        <div class="image-box">
            <img src="lanyard.jpg" alt="Lanyard">
            <p class="homep">IT LANYARD</p>

            <form id="lyForm">
                <input class="input1" type="text" name="name" placeholder="Name" required>
                <input class="input1" type="text" name="section" placeholder="Section" required>
                <input class="input1" type="text" name="size" placeholder="Size" required>
                <input class="input1" type="text" name="idnumber" placeholder="ID Number" required>

                <button class="button2" type="button" id="idpaymentButton">Pay Gcash</button>
                <p class="note">
                <strong>Note:</strong> NA size for lanyard.
                </p>
            </form>
        </div>
    </div>
</div>

<!-- STEP 2: LANYARD PAYMENT -->
<div class="card" id="idpayment" style="display:none;">
    <div class="image-box">
        <img src="qr.jpg" alt="QR">

        <form id="lyPayForm">
            <label>Reference:</label>
            <input class="input1" type="text" name="reference" required>

            <label>Amount:</label>
            <input class="input1" type="number" name="amount" required>

            <button class="button2" type="button" id="idgcashButton">Place Order</button>
             <p class="note">
                <strong>Note:</strong> Payment must be 100 pesos.
                </p>
        </form>
    </div>
</div>

<script src="product_info.js"></script>


</body>
</html>
