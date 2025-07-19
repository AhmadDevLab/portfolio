<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin/pages-sign-in.php");
    exit;
}
?>

<?php
include '../config/config.php';

$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? '';

// Basic validation
if (!$table || !$id || !is_numeric($id)) {
    echo "<h3 style='color: red;'>Invalid table or ID.</h3>";
    exit;
}

// Validate against schema
include '../schema/schema.php';
if (!isset($schemas[$table])) {
    echo "<h3 style='color: red;'>Invalid table selected.</h3>";
    exit;
}

// Use prepared statement to safely delete
$stmt = $conn->prepare("DELETE FROM `$table` WHERE id = ?");
if ($stmt) {
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        $stmt->close();
        header("Location: show.php?table=$table&msg=deleted");
        exit;
    } else {
        echo "<h3 style='color: red;'>Execution error: " . $stmt->error . "</h3>";
    }
} else {
    echo "<h3 style='color: red;'>Prepare failed: " . $conn->error . "</h3>";
}
?>
