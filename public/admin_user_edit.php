<?php include('../includes/header.php'); ?>
<h2>Edit User Details</h2>
<form method="POST" action="admin_user_edit_handler.php">
    <label for="user_id">Select User:</label>
    <select name="user_id" required>
        <!-- Populate with users from the database -->
        <?php
        include('../config/db.php');
        $sql = "SELECT id, username FROM users";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['username'] . "</option>";
        }
        ?>
    </select>

    <label for="new_email">New Email:</label>
    <input type="email" name="new_email" required>

    <button type="submit">Update User</button>
</form>
<?php include('../includes/footer.php'); ?>
