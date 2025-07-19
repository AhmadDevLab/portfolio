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

if (!isset($schemas[$table])) {
    echo "<h3 style='color: red;'>Invalid table selected.</h3>";
    exit;
}

$fields = $schemas[$table];

// Fetch all data
$query = "SELECT * FROM `$table` ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Show <?= ucfirst(str_replace('_', ' ', $table)) ?> | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
    <link href="../assets/plugins/waves/waves.min.css" rel="stylesheet">
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
        <?php include '../includes/sidebar.php'; ?>
    </div>

    <div class="page-content">
        <div class="container-fluid">
            <div class="row mb-3">
                <div class="col-12">
                    <h2 class="page-title">Manage: <strong><?= ucfirst(str_replace('_', ' ', $table)) ?></strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Entries Table</h5>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead class="text-white" style="background-color: #674aee;">
                                        <tr>
                                            <th>ID</th>
                                            <?php foreach ($fields as $field => $meta): ?>
                                                <th><?= $meta['label'] ?></th>
                                            <?php endforeach; ?>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (mysqli_num_rows($result) > 0): ?>
                                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                                <tr>
                                                    <td><?= $row['id'] ?></td>
                                                    <?php foreach ($fields as $field => $meta): ?>
                                                        <td>
                                                            <?php if ($meta['type'] === 'file' && !empty($row[$field])): ?>
                                                                <a href="../uploads/<?= $table ?>/<?= $row[$field] ?>" target="_blank">View</a>
                                                            <?php else: ?>
                                                                <?= nl2br(htmlspecialchars($row[$field])) ?>
                                                            <?php endif; ?>
                                                        </td>
                                                    <?php endforeach; ?>
                                                    <td>
                                                        <?php if ($table !== 'contact_messages'): ?>
                                                            <a href="edit.php?table=<?= $table ?>&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                                                        <?php endif; ?>
                                                        <a href="delete.php?table=<?= $table ?>&id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this record?');">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php endwhile; ?>
                                        <?php else: ?>
                                            <tr>
                                                <td colspan="<?= count($fields) + 2 ?>" class="text-center text-muted">No records found.</td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div> <!-- .table-responsive -->
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script src="../assets/plugins/jquery/jquery-3.4.1.min.js"></script>
<script src="../assets/plugins/bootstrap/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/waves/waves.min.js"></script>
<script src="../assets/js/alpha.min.js"></script>

</body>
</html>
