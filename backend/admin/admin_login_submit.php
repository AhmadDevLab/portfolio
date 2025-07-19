<?php
session_start();
include '../config/config.php';

// Check if form submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email) || empty($password)) {
        die("<h4 style='color:red;'>Email and Password are required.</h4>");
    }

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT id, name, password FROM admin_users WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $admin = $result->fetch_assoc();

        if ($admin && password_verify($password, $admin['password'])) {
            // Login successful
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['name'];
            header("Location:/Portfolio_ahmed/backend/index.php ");
            exit;
        } else {
            echo "<h4 style='color:red;'>Invalid email or password.</h4>";
        }
    } else {
        die("<h4 style='color:red;'>Query failed: " . $conn->error . "</h4>");
    }
} else {
    die("<h4 style='color:red;'>Invalid request method.</h4>");
}
?>
