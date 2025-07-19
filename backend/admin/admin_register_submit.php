<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin/pages-sign-in.php");
    exit;
}
?>
<?php
include '../config/config.php';

// Validate POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get & sanitize input
    $name     = trim($_POST['name'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $cpassword = $_POST['cpassword'] ?? '';

    // Basic validation
    if (empty($name) || empty($email) || empty($password) || empty($cpassword)) {
        die("<h4 style='color:red;'>All fields are required.</h4>");
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<h4 style='color:red;'>Invalid email format.</h4>");
    }

    if ($password !== $cpassword) {
        die("<h4 style='color:red;'>Passwords do not match.</h4>");
    }

    // Hash password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    // Insert into DB using prepared statement
    $stmt = $conn->prepare("INSERT INTO admin_users (name, email, password) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $name, $email, $hashedPassword);
        if ($stmt->execute()) {
            // Success
            header("Location: /Portfolio_ahmed/backend/admin/pages-sign-in.php?msg=registered");
            exit;
        } else {
            if ($conn->errno === 1062) {
                die("<h4 style='color:red;'>Email already registered.</h4>");
            }
            die("<h4 style='color:red;'>Insert failed: " . $conn->error . "</h4>");
        }
    } else {
        die("<h4 style='color:red;'>Prepare failed: " . $conn->error . "</h4>");
    }
} else {
    die("<h4 style='color:red;'>Invalid request method.</h4>");
}
?>
