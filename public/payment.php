<?php include('../includes/header.php'); ?>
<h2>Make Payment</h2>
<form id="payment-form" method="POST" action="payment_handler.php">
    <label for="payment-method">Choose Payment Method:</label>
    <input type="radio" name="payment-method" value="paypal"> PayPal
    <input type="radio" name="payment-method" value="bkash"> bKash

    <button type="submit">Proceed to Payment</button>
</form>
<?php include('../includes/footer.php'); ?>
