<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin/pages-sign-in.php");
    exit;
}
?>
<?php
include '../schema/schema.php';
include '../config/config.php';


$table = $_GET['table'] ?? '';
$id = $_GET['id'] ?? '';

if (!isset($schemas[$table]) || !$id || !is_numeric($id)) {
    echo "<h3 class='text-danger p-3'>Invalid table or ID.</h3>";
    exit;
}

$fields = $schemas[$table];

// Fetch existing data
$stmt = $conn->prepare("SELECT * FROM `$table` WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if (!$data) {
    echo "<h3 class='text-danger p-3'>Record not found.</h3>";
    exit;
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $updates = [];
    $uploadDir = "../uploads/$table/";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    foreach ($fields as $field => $meta) {
        if ($meta['type'] === 'file') {
            if (!empty($_FILES[$field]['name'])) {
                $originalName = basename($_FILES[$field]['name']);
                $safeName = time() . '_' . preg_replace('/\s+/', '_', $originalName);
                $targetPath = $uploadDir . $safeName;

                if (move_uploaded_file($_FILES[$field]['tmp_name'], $targetPath)) {
                    $updates[] = "`$field` = '" . mysqli_real_escape_string($conn, $safeName) . "'";
                }
            }
        } else {
            $value = $_POST[$field] ?? '';
            $updates[] = "`$field` = '" . mysqli_real_escape_string($conn, $value) . "'";
        }
    }

    if (!empty($updates)) {
        $sql = "UPDATE `$table` SET " . implode(', ', $updates) . " WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            header("Location: show.php?table=$table&msg=updated");
            exit;
        } else {
            echo "<div class='alert alert-danger'>Error updating: " . mysqli_error($conn) . "</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit <?= ucfirst(str_replace('_', ' ', $table)) ?> | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="../assets/plugins/waves/waves.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="../assets/css/alpha.min.css" rel="stylesheet">
        <link href="../assets/css/custom.css" rel="stylesheet">
</head>
<body>

<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>

<div class="alpha-app">
        <div class="page-header">
<?php  include '../includes/sidebar.php';  ?>
    </div>
    <div class="page-content">
        <div class="container-fluid py-4">
            <div class="row mb-4">
                <div class="col-12">
                    <h2 class="page-title">Edit Entry: <strong><?= ucfirst(str_replace('_', ' ', $table)) ?></strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php foreach ($fields as $field => $meta): ?>
                                    <div class="form-group mb-3">
                                        <label for="<?= $field ?>" class="form-label fw-bold"><?= $meta['label'] ?>:</label>

                                        <?php if ($meta['type'] === 'textarea'): ?>
                                            <textarea name="<?= $field ?>" id="<?= $field ?>" class="form-control" rows="4" required><?= htmlspecialchars($data[$field]) ?></textarea>
                                        <?php elseif ($meta['type'] === 'file'): ?>
                                            <input type="file" name="<?= $field ?>" id="<?= $field ?>" class="form-control">
                                            <?php if (!empty($data[$field])): ?>
                                                <div class="mt-1 text-muted">
                                                    Current File: 
                                                    <a href="../uploads/<?= $table ?>/<?= $data[$field] ?>" target="_blank"><?= $data[$field] ?></a>
                                                </div>
                                            <?php endif; ?>
                                        <?php else: ?>
                                            <input type="<?= $meta['type'] ?>" name="<?= $field ?>" id="<?= $field ?>" class="form-control" value="<?= htmlspecialchars($data[$field]) ?>" required>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>

                                <button type="submit" class="btn btn-primary px-4">Update</button>
                                <a href="show.php?table=<?= $table ?>" class="btn btn-secondary ms-2">Cancel</a>
                            </form>
                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div>
            </div>
        </div>
    </div>
</div>
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="../assets/plugins/bootstrap/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/plugins/waves/waves.min.js"></script>
        <script src="../assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../assets/js/alpha.min.js"></script>


</body>
</html>
