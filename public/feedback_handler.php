<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $feedback = $_POST['feedback'];
    $rating = $_POST['rating'];

    // Save feedback to the database
    $sql = "INSERT INTO feedback (feedback, rating) VALUES ('$feedback', '$rating')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for your feedback!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
