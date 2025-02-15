<?php include('../includes/header.php'); ?>
<h2>Service Requests</h2>
<!-- List and manage service requests -->
<?php
include('../config/db.php');
$sql = "SELECT * FROM services";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p>" . $row['service_name'] . "</p>";
    }
} else {
    echo "No service requests.";
}
?>
<?php include('../includes/footer.php'); ?>
