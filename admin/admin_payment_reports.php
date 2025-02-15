<?php include('../includes/header.php'); ?>
<h2>Payment Reports</h2>
<!-- Show all payment reports -->
<?php
include('../config/db.php');
$sql = "SELECT * FROM payments";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>Payment ID: " . $row['id'] . " - Amount: " . $row['amount'] . " - Status: " . $row['status'] . "</p>";
    }
} else {
    echo "No payment records found.";
}
?>
<?php include('../includes/footer.php'); ?>
