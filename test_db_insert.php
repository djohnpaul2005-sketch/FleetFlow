<?php
include 'db/db_connect.php';

echo "Attempting to insert test user and driver...<br>";

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
?>
