<?php include('../includes/header.php'); ?>
<h2>Admin Dashboard Statistics</h2>
<?php
include('../config/db.php');

// Example: Get total number of bookings
$sql = "SELECT COUNT(*) as total_bookings FROM bookings";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
echo "<p>Total Bookings: " . $data['total_bookings'] . "</p>";

$conn->close();
?>
<?php include('../includes/footer.php'); ?>
