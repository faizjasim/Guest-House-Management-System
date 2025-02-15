<?php include('../includes/header.php'); ?>
<h2>Create an Account</h2>
<form method="POST" action="register_handler.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Register</button>
</form>
<?php include('../includes/footer.php'); ?>
