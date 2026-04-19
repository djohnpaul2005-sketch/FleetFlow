<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'fleetflow_db';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully to database.\n";

    $stmt = $conn->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "Users found: " . count($users) . "\n";
    foreach ($users as $user) {
        echo "ID: " . $user['id'] . " | User: " . $user['username'] . " | Pass: " . $user['password'] . " | Role: " . $user['role'] . " | Status: " . $user['status'] . "\n";
    }

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
