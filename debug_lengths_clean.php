<?php
include 'db/db_connect.php';

$checks = [
    ['table' => 'users', 'col' => 'username'],
    ['table' => 'users', 'col' => 'password'],
    ['table' => 'drivers', 'col' => 'name'],
    ['table' => 'drivers', 'col' => 'contact_number'],
    ['table' => 'drivers', 'col' => 'license_number'],
    ['table' => 'drivers', 'col' => 'address']
];

foreach ($checks as $check) {
    try {
        $stmt = $conn->query("SHOW COLUMNS FROM {$check['table']} LIKE '{$check['col']}'");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo "{$check['table']}.{$check['col']}: " . $row['Type'] . "\n";
    } catch (Exception $e) {
        echo "Error checking {$check['table']}.{$check['col']}: " . $e->getMessage() . "\n";
    }
}
?>
