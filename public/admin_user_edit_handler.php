<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $new_email = $_POST['new_email'];

    $sql = "UPDATE users SET email='$new_email' WHERE id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "User details updated successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
