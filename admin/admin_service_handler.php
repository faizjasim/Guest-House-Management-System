<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];

    $sql = "INSERT INTO services (service_name) VALUES ('$service_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Service request added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
