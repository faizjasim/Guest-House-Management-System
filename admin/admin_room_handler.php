<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $room_type = $_POST['room_type'];
    $availability = $_POST['availability'];

    $sql = "INSERT INTO rooms (room_type, availability) VALUES ('$room_type', '$availability')";

    if ($conn->query($sql) === TRUE) {
        echo "Room added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
