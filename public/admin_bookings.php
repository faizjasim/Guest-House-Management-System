<?php include('../includes/header.php'); ?>
<h2>Manage Bookings</h2>
<!-- Display bookings -->
<?php
include('../config/db.php');
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['guest_name'] . " - " . $row['room_type'] . " - " . $row['check_in'] . " to " . $row['check_out'] . "</p>";
    }
} else {
    echo "No bookings found.";
}
?>
<?php include('../includes/footer.php'); ?>
