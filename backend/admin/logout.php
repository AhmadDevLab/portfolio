<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin/pages-sign-in.php");
    exit;
}
?>
<?php
session_start(); // Start the session

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Optional: Add a logout message via GET param
header("Location:../admin/pages-sign-in.php?msg=logged_out");
exit;
?>
