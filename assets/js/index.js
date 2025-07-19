document.addEventListener('DOMContentLoaded', () => {
  const menuToggle = document.getElementById('menuToggle');
  const menu = document.getElementById('mainNavbar');

  if (menuToggle && menu) {
    const icon = menuToggle.querySelector('i');

    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('show'); // Slide the menu in/out
      if (icon) {
        icon.classList.toggle('bi-chevron-right');
        icon.classList.toggle('bi-chevron-left');
      }
    });
  }
});



  document.querySelectorAll('.nav-link[href^="#"]').forEach(link => {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        const offset = 60; // reduce from 80 to 60 or even 50 if needed
        const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - offset;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });
      }
    });
  });

  