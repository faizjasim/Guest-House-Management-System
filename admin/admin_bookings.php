<?php include('../includes/header.php'); ?>
<h2>All Bookings</h2>
<?php
include('../config/db.php');
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['guest_name'] . " booked a " . $row['room_type'] . " from " . $row['check_in'] . " to " . $row['check_out'] . "</p>";
    }
} else {
    echo "No bookings available.";
}
?>
<?php include('../includes/footer.php'); ?>
