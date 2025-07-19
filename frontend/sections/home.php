<?php
include __DIR__ . '/../../backend/config/config.php';

// Fetch latest record
$query = mysqli_query($conn, "SELECT * FROM hero_areas ORDER BY id DESC LIMIT 1");
$hero = mysqli_fetch_assoc($query);

// Extract and split multiline highlights
$highlights = !empty($hero['description2']) ? array_filter(array_map('trim', explode("\n", $hero['description2']))) : [];
?>

<body class="bg-dark text-white">
  <div id="home" class="container-fluid hero-section d-flex align-items-center min-vh-100">
    <div class="container-fluid py-4 px-2 px-sm-3 px-md-4">
      <div class="row align-items-center justify-content-between">

        <!-- Left Column -->
        <div class="col-12 col-lg-6 mb-4 mb-lg-0 text-center text-lg-start">
          <h1 class="display-4 fw-bold text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
  <?= htmlspecialchars($hero['title'] ?? "Hi, I'm") ?>
</h1>
<p class="lead text-primary-custom fw-semibold text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
  <?= htmlspecialchars($hero['title2'] ?? '') ?>
</p>

          <p class="lead mt-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
            <?= htmlspecialchars($hero['description'] ?? '') ?>
          </p>

          <!-- Buttons -->
          <div class="d-flex justify-content-center mt-4 flex-wrap button-group wow animate__animated animate__fadeInUp" data-wow-delay="0.7s">
            <a href="#" target="_blank" class="btn btn-success btn-lg me-3 mb-2" style="border-radius: 10px;">
              <i class="bi bi-github me-2"></i> GitHub
            </a>
            <a href="#" target="_blank" class="btn btn-outline-warning btn-lg mb-2"
               style="border-radius: 10px; color: #ffc107; border-color: #ffc107;">
              <i class="bi bi-linkedin me-2"></i> LinkedIn
            </a>
          </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-6">
          <div class="card p-4 h-100 highlight-card rounded-4 shadow-lg">
            <ul class="list-unstyled mb-0">
              <?php
              $delay = 0.3;
              if (!empty($highlights)):
                foreach ($highlights as $line):
              ?>
                <li class="d-flex align-items-start mb-3 wow animate__animated animate__fadeInRight" data-wow-delay="<?= $delay ?>s">
                  <i class="bi bi-dot text-primary-custom me-3 mt-1 highlight-icon"></i>
                  <span><?= htmlspecialchars($line) ?></span>
                </li>
              <?php
                  $delay += 0.1;
                endforeach;
              else:
                echo '<li><span class="text-muted">No highlights available.</span></li>';
              endif;
              ?>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</body>
