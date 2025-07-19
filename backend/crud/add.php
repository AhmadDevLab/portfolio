<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin/pages-sign-in.php");
    exit;
}

include '../schema/schema.php';
include '../config/config.php';

$table = $_GET['table'] ?? '';
if (!isset($schemas[$table])) {
    die("<h3 style='color:red;'>Invalid table selected.</h3>");
}

$fields = $schemas[$table];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $columns = [];
    $values = [];

    $uploadDir = "../uploads/$table/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    foreach ($fields as $field => $meta) {
        if ($meta['type'] === 'file') {
            if (!empty($_FILES[$field]['name']) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
                $originalName = basename($_FILES[$field]['name']);
                $safeName = time() . '_' . preg_replace('/[^A-Za-z0-9.\-_]/', '_', $originalName);
                $targetPath = $uploadDir . $safeName;

                if (move_uploaded_file($_FILES[$field]['tmp_name'], $targetPath)) {
                    $columns[] = "`$field`";
                    $values[] = "'" . mysqli_real_escape_string($conn, $safeName) . "'";
                } else {
                    die("❌ File upload failed for: $field");
                }
            } else {
                $columns[] = "`$field`";
                $values[] = "''";
            }
        } else {
            $value = $_POST[$field] ?? '';
            $columns[] = "`$field`";
            $values[] = "'" . mysqli_real_escape_string($conn, $value) . "'";
        }
    }

    $columnString = implode(', ', $columns);
    $valueString = implode(', ', $values);
    $sql = "INSERT INTO `$table` ($columnString) VALUES ($valueString)";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        if ($table === 'contact_messages') {
            header("Location: ../../frontend/index.php?msg=sent");
        } else {
            header("Location: show.php?table=$table&msg=inserted");
        }
        exit;
    } else {
        echo "<h4 style='color:red;'>Insert error: " . mysqli_error($conn) . "</h4>";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add <?= ucfirst(str_replace('_', ' ', $table)) ?> | Admin Panel</title>
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
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-12">
                    <h2 class="page-title">Add Entry to: <strong><?= ucfirst(str_replace('_', ' ', $table)) ?></strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form action="" method="POST" enctype="multipart/form-data">
                                <?php foreach ($fields as $field => $meta): ?>
                                    <div class="form-group mb-3">
                                        <label for="<?= $field ?>" class="form-label"><?= $meta['label'] ?>:</label>

                                        <?php if ($meta['type'] === 'textarea'): ?>
                                            <textarea name="<?= $field ?>" id="<?= $field ?>" class="form-control" rows="4" required></textarea>
                                        <?php elseif ($meta['type'] === 'file'): ?>
                                            <input type="file" name="<?= $field ?>" id="<?= $field ?>" class="form-control" required>
                                        <?php else: ?>
                                            <input type="<?= $meta['type'] ?>" name="<?= $field ?>" id="<?= $field ?>" class="form-control" required>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>

                                <button type="submit" class="btn btn-dark px-4">Submit</button>
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