<?php
include('../config/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];

    $sql = "SELECT * FROM rooms WHERE availability=1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "Available Rooms:";
        while ($row = $result->fetch_assoc()) {
            echo "<p>" . $row['room_type'] . " - Available</p>";
        }
    } else {
        echo "No rooms available for the selected dates.";
    }

    $conn->close();
}
?>
