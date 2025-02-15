<?php include('../includes/header.php'); ?>
<h2>Book Your Stay</h2>
<form id="booking-form" method="POST" action="booking_handler.php">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="check-in">Check-in Date:</label>
    <input type="date" id="check-in" name="check-in" required>

    <label for="check-out">Check-out Date:</label>
    <input type="date" id="check-out" name="check-out" required>

    <label for="room-type">Room Type:</label>
    <select id="room-type" name="room-type" required>
        <option value="single">Single Room</option>
        <option value="double">Double Room</option>
    </select>

    <button type="submit">Book Now</button>
</form>
<?php include('../includes/footer.php'); ?>
