<?php include('../includes/header.php'); ?>
<h2>Manage Users</h2>
<!-- Display users -->
<?php
include('../config/db.php');
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['username'] . " - " . $row['email'] . "</p>";
    }
} else {
    echo "No users found.";
}
?>
<?php include('../includes/footer.php'); ?>
