<?php include('../includes/header.php'); ?>
<h2>Manage Rooms</h2>
<form method="POST" action="admin_room_handler.php">
    <label for="room_type">Room Type:</label>
    <select name="room_type" required>
        <option value="single">Single</option>
        <option value="double">Double</option>
        <option value="suite">Suite</option>
    </select>
    
    <label for="availability">Availability:</label>
    <select name="availability" required>
        <option value="1">Available</option>
        <option value="0">Not Available</option>
    </select>
    
    <button type="submit">Add Room</button>
</form>

<h3>Existing Rooms</h3>
<?php
include('../config/db.php');
$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['room_type'] . " - " . ($row['availability'] ? "Available" : "Not Available") . "</p>";
    }
} else {
    echo "No rooms available.";
}
?>
<?php include('../includes/footer.php'); ?>
