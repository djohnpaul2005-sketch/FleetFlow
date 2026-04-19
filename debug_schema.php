<?php
include 'db/db_connect.php';

echo "<h2>Database Schema Check</h2>";

// Check Index on assigned_vehicle_id
$stmt = $conn->query("SHOW INDEX FROM drivers WHERE Column_name = 'assigned_vehicle_id'");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "Index: " . $row['Key_name'] . " - Unique: " . ($row['Non_unique'] == 0 ? 'Yes' : 'No') . "<br>";
}
?>
