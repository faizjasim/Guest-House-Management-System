<?php include('../includes/header.php'); ?>
<h2>Contact Us</h2>
<form method="POST" action="contact_handler.php">
    <label for="name">Your Name:</label>
    <input type="text" name="name" required>
    
    <label for="email">Your Email:</label>
    <input type="email" name="email" required>
    
    <label for="message">Message:</label>
    <textarea name="message" rows="5" required></textarea>
    
    <button type="submit">Send Message</button>
</form>
<?php include('../includes/footer.php'); ?>
