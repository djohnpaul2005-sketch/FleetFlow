<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'fleetflow_db';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if admin exists
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = 'admin'");
    $stmt->execute();
    $user = $stmt->fetch();

    if ($user) {
        // Update password
        $sql = "UPDATE users SET password = 'admin123', status='active', role='admin' WHERE username = 'admin'";
        $conn->exec($sql);
        echo "✅ Admin user updated. Password reset to: admin123\n";
    } else {
        // Create user
        $sql = "INSERT INTO users (username, password, role, status) VALUES ('admin', 'admin123', 'admin', 'active')";
        $conn->exec($sql);
        echo "✅ Admin user created. Password: admin123\n";
    }

} catch(PDOException $e) {
    echo "❌ Error: " . $e->getMessage();
}
?>
