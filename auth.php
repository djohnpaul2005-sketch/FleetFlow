<?php
session_start();
include 'db/db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Secure way: Use prepared statements
    $stmt = $conn->prepare("SELECT id, username, password, role, status FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // In a real app, use password_verify($password, $user['password'])
    // For this setup, we'll assume plain text or simple comparison for the demo unless hashed
    if ($user && $password === $user['password']) {
        if ($user['status'] == 'inactive') {
            echo "<script>alert('Account is inactive. Contact Admin.'); window.location.href='login.php';</script>";
            exit;
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        switch ($user['role']) {
            case 'admin':
                header("Location: admin/dashboard.php");
                break;
            case 'manager':
                header("Location: manager/dashboard.php");
                break;
            case 'driver':
                header("Location: driver/dashboard.php");
                break;
            default:
                echo "Invalid Role";
        }
        exit;
    } else {
        // Debug logging
        $logEntry = date('Y-m-d H:i:s') . " - Login failed for user: '$username'. Input password length: " . strlen($password) . ".\n";
        if ($user) {
             $logEntry .= "User found in DB. DB Password length: " . strlen($user['password']) . ". Role: " . $user['role'] . "\n";
        } else {
             $logEntry .= "User NOT found in DB.\n";
        }
        file_put_contents('login_debug.log', $logEntry, FILE_APPEND);

        echo "<script>alert('Invalid Username or Password'); window.location.href='login.php';</script>";
    }
}

