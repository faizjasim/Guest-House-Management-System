<?php
include('../config/db.php');

// Get payment method
$payment_method = $_POST['payment-method'];

// Process payment based on method
if ($payment_method == 'paypal') {
    // Call PayPal API for payment
    $payment_status = 'Completed';
} elseif ($payment_method == 'bkash') {
    // Simulate bKash payment process
    $payment_status = 'Completed';
}

// Insert payment data into database
$sql = "INSERT INTO payments (amount, status) VALUES ('100.00', '$payment_status')";
if ($conn->query($sql) === TRUE) {
    echo "Payment successful!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
