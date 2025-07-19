<?php
include __DIR__ . '/../../backend/config/config.php';

// Fetch all skills
$skillsQuery = mysqli_query($conn, "SELECT * FROM skills ORDER BY id ASC");
$skills = [];
while ($row = mysqli_fetch_assoc($skillsQuery)) {
    $skills[] = $row;
}

// Color rotation helper
function getColorClass($index) {
    $colors = ['info', 'success', 'warning', 'danger', 'primary'];
    return $colors[$index % count($colors)];
}
?>
<section id="skills" class="py-5" style="background-color: #171717;">
  <div class="container">
<!-- Section Heading -->
<div class="text-center mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
  <h3 class="fw-semibold text-uppercase mb-2" style="letter-spacing: 1px; color: #fff;">
    My Skills
  </h3>
  <div class="mx-auto mb-2" style="width: 60px; height: 3px; background: #ffc107;"></div>
  <p class="text-secondary mx-auto" style="max-width: 600px;">
    A showcase of my expertise and the tools I use to build impactful, high-quality projects across web development 
  </p>
</div>



    <!-- Centered Row -->
    <div class="row justify-content-center mt-5">
      <!-- Left Column -->
      <div class="col-md-4 mx-md-auto">
        <?php
        $delay = 0.2;
        $index = 0;
        $half = ceil(count($skills) / 2);
        foreach ($skills as $i => $skill):
          if ($i == $half) break;
          $colorClass = getColorClass($index);
          $percent = intval($skill['percentage']);
          $imageURL = '/Portfolio_ahmed/backend/uploads/skills/' . htmlspecialchars($skill['main_image']);
        ?>
        <div class="wow animate__animated animate__fadeInUp mb-4" data-wow-delay="<?= $delay ?>s">
          <div class="bg-transparent text-white p-2 rounded-3">
            <div class="d-flex align-items-center mb-2">
              <img src="<?= $imageURL ?>" alt="Skill Icon" class="rounded-circle border border-light me-3" style="width: 38px; height: 38px; object-fit: cover;">
              <h6 class="mb-0 fw-semibold fs-6"><?= htmlspecialchars($skill['title']) ?></h6>
            </div>
            <div class="progress rounded-pill" style="height: 8px; background-color: #2c2c2c;">
              <div class="progress-bar bg-<?= $colorClass ?> rounded-pill" role="progressbar" style="width: <?= $percent ?>%;" aria-valuenow="<?= $percent ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-end mt-1">
              <small class="text-<?= $colorClass ?> fw-bold"><?= $percent ?>%</small>
            </div>
          </div>
        </div>
        <?php 
          $delay += 0.1;
          $index++;
        endforeach; ?>
      </div>

      <!-- Right Column -->
      <div class="col-md-4 mx-md-auto">
        <?php
        foreach (array_slice($skills, $half) as $skill):
          $colorClass = getColorClass($index);
          $percent = intval($skill['percentage']);
          $imageURL = '/Portfolio_ahmed/backend/uploads/skills/' . htmlspecialchars($skill['main_image']);
        ?>
        <div class="wow animate__animated animate__fadeInUp mb-4" data-wow-delay="<?= $delay ?>s">
          <div class="bg-transparent text-white p-2 rounded-3">
            <div class="d-flex align-items-center mb-2">
              <img src="<?= $imageURL ?>" alt="Skill Icon" class="rounded-circle border border-light me-3" style="width: 38px; height: 38px; object-fit: cover;">
              <h6 class="mb-0 fw-semibold fs-6"><?= htmlspecialchars($skill['title']) ?></h6>
            </div>
            <div class="progress rounded-pill" style="height: 8px; background-color: #2c2c2c;">
              <div class="progress-bar bg-<?= $colorClass ?> rounded-pill" role="progressbar" style="width: <?= $percent ?>%;" aria-valuenow="<?= $percent ?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="text-end mt-1">
              <small class="text-<?= $colorClass ?> fw-bold"><?= $percent ?>%</small>
            </div>
          </div>
        </div>
        <?php 
          $delay += 0.1;
          $index++;
        endforeach; ?>
      </div>
    </div>

  </div>
</section>
