<?php
include 'db/db_connect.php';

echo "<h2>Database Integry Test</h2>";

// 1. Verify if previous test insert exists
$stmt = $conn->query("SELECT * FROM users WHERE username LIKE 'testdriver_%' ORDER BY id DESC LIMIT 1");
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo "Found user from previous test: " . htmlspecialchars($user['username']) . " (ID: " . $user['id'] . ")<br>";
    
    // Check driver
    $stmt = $conn->prepare("SELECT * FROM drivers WHERE user_id = ?");
    $stmt->execute([$user['id']]);
    $driver = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($driver) {
        echo "Found associated driver profile: " . htmlspecialchars($driver['name']) . "<br>";
    } else {
        echo "<strong style='color:red'>WARNING: User exists but Driver profile is MISSING!</strong><br>";
    }
} else {
    echo "No test user found from previous run. Inserting new one...<br>";
    
    try {
        $conn->beginTransaction();

        // 1. User
        $username = 'testdriver_' . time();
        $password = 'password123';
        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, 'driver')");
        $stmt->execute([$username, $password]);
        $user_id = $conn->lastInsertId();
        echo "User inserted with ID: $user_id<br>";

        // 2. Driver
        $name = 'Test Driver';
        $contact = '1234567890';
        $license = 'DL123456';
        $expiry = date('Y-m-d', strtotime('+1 year'));
        $address = 'Test Address';
        $vehicle_id = NULL;

        $stmt = $conn->prepare("INSERT INTO drivers (user_id, name, contact_number, license_number, license_expiry, address, assigned_vehicle_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $name, $contact, $license, $expiry, $address, $vehicle_id]);
        echo "Driver inserted.<br>";

        $conn->commit();
        echo "Transaction Committed Successfully.<br>";
        
    } catch (PDOException $e) {
        $conn->rollBack();
        echo "Error: " . $e->getMessage();
    }
}
?>
