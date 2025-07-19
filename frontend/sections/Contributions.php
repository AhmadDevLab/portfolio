<?php
include __DIR__ . '/../../backend/config/config.php';

$contributions = [];
$query = mysqli_query($conn, "SELECT * FROM github_contribution ORDER BY id DESC");
while ($row = mysqli_fetch_assoc($query)) {
    $contributions[] = $row;
}
?>

<section id="contributions" class="text-white py-5" style="background-color: #262626;">
  <div class="container">

<!-- GitHub Contributions Section -->
<div class="text-center mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
  <h3 class="fw-semibold text-uppercase mb-2" style="letter-spacing: 1px; color: #fff;">
    GitHub Contributions
  </h3>
  <div class="mx-auto mb-2" style="width: 60px; height: 3px; background: #ffc107;"></div>
  <p class="text-secondary mx-auto" style="max-width: 600px;">
    Explore my coding journey through GitHub — showcasing active contributions, open-source collaborations
  </p>
</div>



    <!-- Contributions Grid -->
    <div class="row gy-4 gx-lg-5 justify-content-center" id="contributionContainer">
      <?php
      $delay = 0.2;
      foreach ($contributions as $index => $contribution):
          $title = htmlspecialchars($contribution['title']);
          $description = htmlspecialchars($contribution['description']);
          $link = htmlspecialchars($contribution['github_link']);
          $imageName = htmlspecialchars($contribution['main_image']);
          $imagePath = '/Portfolio_ahmed/backend/uploads/github_contribution/' . $imageName;

          // Hide all cards beyond the first 4
          $hiddenClass = ($index >= 4) ? 'd-none more-card' : '';
      ?>
    <div class="col-12 col-sm-6 col-xl-5 <?= $hiddenClass ?> wow animate__animated animate__fadeInUp"
     data-wow-delay="<?= number_format($delay, 1) ?>s">
  <div class="card github-card p-4 pt-5 pb-3 rounded-4 shadow border-0 h-100 text-white"
       style="background-color: #000000;">

    <!-- Image & Title -->
    <div class="d-flex align-items-center mb-3">
      <img src="<?= $imagePath ?>" alt="Contribution Icon" class="rounded-circle me-3"
           style="width: 48px; height: 48px; object-fit: cover;">
      <h5 class="fw-bold mb-0"><?= $title ?></h5>
    </div>

    <!-- Description & Link -->
    <div>
      <p class="small text-white-50 mb-3"><?= $description ?></p>
      <a href="<?= $link ?>" target="_blank" class="text-warning text-decoration-none">
        View on GitHub <i class="bi bi-box-arrow-up-right ms-1"></i>
      </a>
    </div>

  </div>
</div>

      <?php
        $delay += 0.2;
      endforeach;
      ?>
    </div>

    <!-- Show More Button -->
    <?php if (count($contributions) > 4): ?>
      <div class="text-center mt-4">
        <button id="showMoreBtn" class="btn btn-outline-light px-4 py-2">
          Show More
        </button>
      </div>
    <?php endif; ?>

  </div>
</section>

<!-- Show More Script -->
<script>
  document.getElementById("showMoreBtn")?.addEventListener("click", function () {
    document.querySelectorAll(".more-card").forEach(card => card.classList.remove("d-none"));
    this.style.display = 'none'; // Hide button after click
  });
</script>
