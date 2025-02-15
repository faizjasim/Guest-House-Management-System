<?php include('../includes/header.php'); ?>
<h2>Change Your Password</h2>
<form method="POST" action="change_password_handler.php">
    <label for="old_password">Old Password:</label>
    <input type="password" name="old_password" required>

    <label for="new_password">New Password:</label>
    <input type="password" name="new_password" required>

    <label for="confirm_password">Confirm New Password:</label>
    <input type="password" name="confirm_password" required>

    <button type="submit">Change Password</button>
</form>
<?php include('../includes/footer.php'); ?>
