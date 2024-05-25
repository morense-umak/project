<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Selection</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="home.css">

</head>
<body>
<?php include("head.php"); ?>
<div class="container">
    <div class="payment-container">
        <h2>Buyer Information</h2>
        <div class="buyer-info">
            <input type="text" id="buyerName" placeholder="Enter Your Name">
        </div>
        <div class="buyer-info">
            <input type="text" id="buyerAddress" placeholder="Enter Your Address">
        </div>
        <div class="buyer-info">
            <input type="text" id="buyerContact" placeholder="Enter Your Phone Number">
        </div>
        <h2>Select Payment Method</h2>
        <div class="payment-option">
            <input type="radio" id="gcash" name="payment" value="gcash">
            <label for="gcash">GCash</label>
        </div>
        <div class="payment-option">
            <input type="radio" id="cod" name="payment" value="cod">
            <label for="cod">Cash on Delivery</label>
        </div>
        <div class="gcash-details" id="gcashDetails">
            <h3>GCash Payment</h3>
            <img src="qrcode.jpg" alt="GCash QR Code">
            <input type="text" id="referenceNumber" placeholder="Enter Reference Number">
        </div>
        <div class="confirmation" id="confirmation">
            <button id="confirmButton"><a href="order.php">Confirm</a></button>
        </div>
    </div>
</div>
<script src="pay.js"></script>
<div class="cartTab">
    <h1>Order List</h1>
    <div class="listorder">
        <div class="item">
            <div class="image">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <div class="btn">
        <button class="close">Close</button>
        <button class="checkout"><a href="checkOut.php">CheckOUT</a></button>
    </div>
    <script src="app.js"></script>
</body>
</html>
