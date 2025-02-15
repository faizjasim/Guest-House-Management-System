<?php include('../includes/header.php'); ?>
<h2>Your Profile</h2>
<?php
session_start();
if (isset($_SESSION['user_id'])) {
    include('../config/db.php');
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id=$user_id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        echo "<p>Username: " . $user['username'] . "</p>";
        echo "<p>Email: " . $user['email'] . "</p>";
    } else {
        echo "User not found.";
    }
} else {
    echo "You must be logged in to view this page.";
}
?>
<?php include('../includes/footer.php'); ?>
