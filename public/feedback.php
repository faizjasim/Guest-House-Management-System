<?php include('../includes/header.php'); ?>
<h2>Submit Your Feedback</h2>
<form method="POST" action="feedback_handler.php">
    <label for="feedback">Your Feedback:</label>
    <textarea name="feedback" rows="5" required></textarea>
    
    <label for="rating">Rating:</label>
    <select name="rating" required>
        <option value="1">1 - Poor</option>
        <option value="2">2 - Fair</option>
        <option value="3">3 - Good</option>
        <option value="4">4 - Very Good</option>
        <option value="5">5 - Excellent</option>
    </select>

    <button type="submit">Submit Feedback</button>
</form>
<?php include('../includes/footer.php'); ?>
