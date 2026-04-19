<?php
include 'db/db_connect.php';

echo "<h2>Column Lengths Check</h2>";

$tables = ['users' => 'username', 'drivers' => 'name', 'drivers' => 'contact_number', 'drivers' => 'license_number', 'drivers' => 'address'];

foreach ($tables as $table => $col) {
    if (is_int($table)) { // Fix array key issue if any, but array is associative here with duplicate keys which is bad
        // duplicate keys overwrite in array
    }
}
// Fix array structure
$checks = [
    ['table' => 'users', 'col' => 'username'],
    ['table' => 'users', 'col' => 'password'],
    ['table' => 'drivers', 'col' => 'name'],
    ['table' => 'drivers', 'col' => 'contact_number'],
    ['table' => 'drivers', 'col' => 'license_number'],
    ['table' => 'drivers', 'col' => 'address']
];

foreach ($checks as $check) {
    $stmt = $conn->query("SHOW COLUMNS FROM {$check['table']} LIKE '{$check['col']}'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "{$check['table']}.{$check['col']}: " . $row['Type'] . "<br>";
}
?>
