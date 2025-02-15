<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];
    $room_type = $_POST['room-type'];

    $sql = "INSERT INTO bookings (guest_name, check_in, check_out, room_type) VALUES ('$name', '$check_in', '$check_out', '$room_type')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
