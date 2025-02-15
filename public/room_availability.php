<?php include('../includes/header.php'); ?>
<h2>Check Room Availability</h2>
<form method="POST" action="room_availability_handler.php">
    <label for="check-in">Check-in Date:</label>
    <input type="date" name="check-in" required>

    <label for="check-out">Check-out Date:</label>
    <input type="date" name="check-out" required>

    <button type="submit">Check Availability</button>
</form>
<?php include('../includes/footer.php'); ?>
