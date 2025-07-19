<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: admin/pages-sign-in.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- Remove Tap Highlight on Windows Phone IE -->
        <meta name="msapplication-tap-highlight" content="no"/>
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Alpha - Material Design Admin Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/all.min.css" rel="stylesheet">
        <link href="assets/plugins/waves/waves.min.css" rel="stylesheet">
        <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">

      
        <!-- Theme Styles -->
        <link href="assets/css/alpha.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  
    </head>
    <body>
    
        <div class="loader">
            <div class="spinner-border text-primary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="alpha-app">
            <div class="page-header">
                         <?php
    include 'includes/Sidebar.php';
?>
            </div><!-- Page Header -->
            <div class="page-content">

                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="page-title">Dashboard</h2>
                        </div>
                    </div>
                  <div class="row">
  <?php
    $dashboardItems = [
      ['title' => 'Hero Area',      'icon' => 'slideshow',      'color' => 'primary', 'link' => 'hero_section.php'],
      ['title' => 'Links',          'icon' => 'link',           'color' => 'danger',  'link' => 'social_links.php'],
      ['title' => 'About',          'icon' => 'person',         'color' => 'info',    'link' => 'about_section.php'],
      ['title' => 'Skills',         'icon' => 'bar_chart',      'color' => 'success', 'link' => 'skills_section.php'],
      ['title' => 'Projects',       'icon' => 'work',           'color' => 'warning', 'link' => 'projects.php'],
      ['title' => 'Testimonials',   'icon' => 'rate_review',    'color' => 'secondary','link' => 'testimonials.php'],
      ['title' => 'Contact Info',   'icon' => 'contact_mail',   'color' => 'dark',    'link' => 'contact.php'],
    ];

    $delay = 0.1;
    foreach ($dashboardItems as $item):
  ?>
  <div class="col-lg-4 col-md-6 mb-4">
    <a href="<?= $item['link'] ?>" class="text-decoration-none">
      <div class="card info-card info-<?= $item['color'] ?> wow animate__animated animate__fadeInUp" data-wow-delay="<?= $delay ?>s">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div>
              <h5 class="card-title"><?= $item['title'] ?></h5>
              <div class="info-card-text">
                <h3>Manage</h3>
                <span class="info-card-helper">Click to Edit</span>
              </div>
            </div>
            <div class="info-card-icon">
              <i class="material-icons"><?= $item['icon'] ?></i>
            </div>
          </div>
        </div>
      </div>
    </a>
  </div>
  <?php
    $delay += 0.1;
    endforeach;
  ?>
</div>

                  
                </div>
                
            </div><!-- Page Content -->
         
            
        </div><!-- App Container -->
        
        
        <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/plugins/bootstrap/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/waves/waves.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/d3/d3.min.js"></script>
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/js/alpha.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
    </body>
</html>