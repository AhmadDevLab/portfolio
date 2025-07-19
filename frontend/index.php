<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My Portfolio</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/icons/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="../assets/css/home.css">
  <link rel="stylesheet" href="../assets/css/about.css"> 
  <link rel="stylesheet" href="../assets/css/project.css"> 
  <link rel="stylesheet" href="../assets/css/contribution.css"> 
  <link rel="stylesheet" href="../assets/css/skill.css">
  <link rel="stylesheet" href="../assets/css/contactus.css">
  <link rel="stylesheet" href="../assets/css/footer.css">

  <!-- Style Fixes -->
  <style>
    html {
      scroll-behavior: smooth;
      scroll-padding-top: 100px;
      overflow-x: hidden;
    }

    body {
      overflow-x: hidden;
      font-family: 'Poppins', sans-serif;
    }

    .wow {
      will-change: opacity, transform;
      animation-duration: 1.5s !important;
      animation-timing-function: ease-in-out !important;
      transition: all 0.8s ease-in-out;
    }

    .animate__fadeInUp,
    .animate__fadeInLeft,
    .animate__fadeInRight {
      animation-duration: 1.5s;
      animation-timing-function: ease-in-out;
    }
  </style>
</head>


  <!-- Navbar -->
  <?php include 'includes/nav.php'; ?>

  <!-- Sections (we'll build these step by step) -->
  <?php
    include 'sections/home.php';
    include 'sections/about.php';
    include 'sections/project.php';
      include 'sections/Contributions.php';

     include 'sections/Skills.php';
          include 'sections/contactus.php';
  ?>

  <!-- Footer -->
  <?php include 'includes/footer.php'; ?>

  <!-- Bootstrap Bundle JS -->
    <script src="../assets/js/index.js"></script>
     <script src="../assets/js/skill.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
  new WOW({
    mobile: false
  }).init();
</script>
 

</body>
</html>
