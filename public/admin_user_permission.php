<?php include('../includes/header.php'); ?>
<h2>User Permissions</h2>
<form method="POST" action="admin_permissions_handler.php">
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

    <label for="role">Assign Role:</label>
    <select name="role" required>
        <option value="admin">Admin</option>
        <option value="user">User</option>
    </select>

    <button type="submit">Assign Role</button>
</form>
<?php include('../includes/footer.php'); ?>
