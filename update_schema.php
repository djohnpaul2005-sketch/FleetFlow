<?php
include 'db/db_connect.php';

try {
    // Add 'photo' column to drivers table
    $stmt = $conn->query("SHOW COLUMNS FROM drivers LIKE 'photo'");
    if ($stmt->rowCount() == 0) {
        $conn->exec("ALTER TABLE drivers ADD COLUMN photo VARCHAR(255) DEFAULT NULL AFTER address");
        echo "Successfully added 'photo' column to drivers table.\n";
    } else {
        echo "'photo' column already exists in drivers table.\n";
    }
} catch (PDOException $e) {
    echo "Error updating schema: " . $e->getMessage() . "\n";
}
?>
