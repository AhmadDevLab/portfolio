<section id="projects" class="text-white py-5" style="background-color: #000000;">
  <div class="container">

    <!-- Section Heading -->
    <div class="text-center mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
      <h3 class="fw-semibold text-uppercase mb-2" style="letter-spacing: 1px; color: #fff;">Projects</h3>
      <div class="mx-auto mb-2" style="width: 60px; height: 3px; background: #ffc107;"></div>
      <p class="text-secondary mx-auto" style="max-width: 600px;">
        A selection of the work I've done, ranging from web applications to dynamic user interfaces.
      </p>
    </div>

    <?php
    include __DIR__ . '/../../backend/config/config.php';

    // Fetch all projects
    $projects = [];
    $result = mysqli_query($conn, "SELECT * FROM projects ORDER BY id DESC");
    while ($row = mysqli_fetch_assoc($result)) {
        $projects[] = $row;
    }
    ?>

    <div class="row g-4 justify-content-center" id="projectCards">
      <?php 
      $delay = 0.4;
      $count = 0;
      foreach ($projects as $project): 
        $imageFile = htmlspecialchars($project['main_image']);
        $imagePath = '/Portfolio_ahmed/backend/uploads/projects/' . $imageFile;
        $title = htmlspecialchars($project['title']);
        $description = htmlspecialchars($project['description']);
        $androidLink = htmlspecialchars($project['android_link'] ?? '');
        $iosLink = htmlspecialchars($project['ios_link'] ?? '');
        $fileLink = htmlspecialchars($project['upload_file'] ?? '');
        $hiddenClass = ($count >= 4) ? 'd-none extra-project' : ''; // hide after 4
      ?>
      <div class="col-12 col-md-10 col-lg-6 col-xl-5 wow animate__animated animate__fadeInUp <?= $hiddenClass ?>" data-wow-delay="<?= $delay ?>s">
        <div class="card shadow border-0 rounded-4 p-4 bg-dark text-white h-100">

          <!-- Top Row: Image + Title -->
          <div class="d-flex align-items-center mb-3">
            <img src="<?= $imagePath ?>" alt="<?= $title ?>" class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
            <h5 class="fw-bold mb-0 text-uppercase"><?= $title ?></h5>
          </div>

          <div class="mt-3">
            <p class="text-white-50 fs-6 mb-3"><?= $description ?></p>

            <div class="d-flex flex-wrap gap-2 mb-3">
              <span class="badge bg-success px-3 py-2">React Native</span>
              <span class="badge bg-warning text-dark px-3 py-2">Fintech</span>
            </div>

            <div class="d-flex justify-content-between border-top pt-3 flex-wrap gap-2">
              <?php if (!empty($iosLink)): ?>
                <a href="<?= $iosLink ?>" target="_blank" class="btn btn-outline-light btn-sm rounded-pill">iOS App</a>
              <?php endif; ?>

              <?php if (!empty($androidLink)): ?>
                <a href="<?= $androidLink ?>" target="_blank" class="btn btn-outline-light btn-sm rounded-pill">Android App</a>
              <?php endif; ?>

              <?php if (!empty($fileLink)): ?>
                <a href="/Portfolio_ahmed/backend/<?= $fileLink ?>" target="_blank" class="btn btn-outline-warning btn-sm rounded-pill">
                  Download File
                </a>
              <?php endif; ?>
            </div>
          </div>

        </div>
      </div>
      <?php 
        $delay += 0.2; 
        $count++;
      endforeach; 
      ?>
    </div>

    <!-- Read More Button -->
    <?php if (count($projects) > 4): ?>
    <div class="text-center mt-4">
      <button id="showMoreBtn" class="btn btn-outline-light rounded-pill px-4 py-2">
        Show More
      </button>
    </div>
    <?php endif; ?>

  </div>
</section>

<!-- JavaScript to toggle visibility -->
<script>
  document.getElementById('showMoreBtn')?.addEventListener('click', function () {
    document.querySelectorAll('.extra-project').forEach(card => card.classList.remove('d-none'));
    this.style.display = 'none';
  });
</script>
