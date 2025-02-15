<?php
include('../config/db.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_SESSION['user_id'];
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password != $confirm_password) {
        echo "New passwords do not match.";
    } else {
        $sql = "SELECT password FROM users WHERE id='$user_id'";
        $result = $conn->query($sql);
        $user = $result->fetch_assoc();

        if (password_verify($old_password, $user['password'])) {
            $new_password_hashed = password_hash($new_password, PASSWORD_DEFAULT);
            $update_sql = "UPDATE users SET password='$new_password_hashed' WHERE id='$user_id'";

            if ($conn->query($update_sql) === TRUE) {
                echo "Password changed successfully!";
            } else {
                echo "Error: " . $conn->error;
            }
        } else {
            echo "Old password is incorrect.";
        }
    }

    $conn->close();
}
?>
