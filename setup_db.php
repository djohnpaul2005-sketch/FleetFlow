<?php
$host = 'localhost';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h3>State 1: Connected to MySQL Server...</h3>";

    // 1. Create Database and Tables from SQL File
    $sqlFile = 'db/fleetflow_db.sql';
    if (file_exists($sqlFile)) {
        $sql = file_get_contents($sqlFile);
        $conn->exec($sql);
        echo "✅ Database `fleetflow_db` and Tables created successfully.<br>";
    } else {
        die("❌ Error: SQL file not found at $sqlFile");
    }

    // 2. Connect to the specific DB to insert seed data
    $conn->query("USE fleetflow_db");

    // 3. Seed Admin User
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = 'admin'");
    $stmt->execute();
    if ($stmt->fetchColumn() == 0) {
        // Note: Using plain text as per current implementation plan. Change to password_hash() in production.
        $conn->exec("INSERT INTO users (username, password, role) VALUES ('admin', 'admin123', 'admin')");
        echo "✅ Default Admin Created: <strong>admin</strong> / <strong>admin123</strong><br>";
    } else {
        echo "ℹ️ Admin user already exists.<br>";
    }

    // 4. Seed Manager User (for testing)
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = 'manager'");
    $stmt->execute();
    if ($stmt->fetchColumn() == 0) {
        $conn->exec("INSERT INTO users (username, password, role) VALUES ('manager', 'manager123', 'manager')");
        echo "✅ Sample Manager Created: <strong>manager</strong> / <strong>manager123</strong><br>";
    } else {
        echo "ℹ️ Manager user already exists.<br>";
    }

    echo "<hr><h3>🚀 Setup Complete!</h3>";
    echo "<a href='index.php' style='padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 5px;'>Go to Landing Page</a>";

} catch(PDOException $e) {
    echo "<br><strong style='color:red'>Error:</strong> " . $e->getMessage();
}
?>
