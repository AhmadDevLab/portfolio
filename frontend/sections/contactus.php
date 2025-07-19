<section class="py-5" id="contact" style="background-color: #1e1e1e;">
  <div class="text-center mb-4 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
  <h3 class="fw-semibold text-uppercase mb-2" style="letter-spacing: 1px; color: #fff;">
    Contact Us
  </h3>
  <div class="mx-auto mb-2" style="width: 60px; height: 3px; background: #ffc107;"></div>
  <p class="text-secondary mx-auto" style="max-width: 600px;">
    Feel free to reach out for collaborations or questions.
  </p>
</div>
  <div class="container">
  <!-- Contact Section Heading -->



    <div class="row align-items-center text-white">
      <!-- Left Column -->
      <div class="col-md-6 mb-4 mb-md-0">
  <h5 class="text-warning fw-bold mb-3">Get In Touch</h5>
<h1 class="fw-bold mb-4" style="font-size: 32px;">
  Let's bring your ideas<br>to life together
</h1>


  <div class="d-flex gap-3">
  <a href="#" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="#" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
    <i class="fab fa-twitter"></i>
  </a>
  <a href="#" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
    <i class="fab fa-dribbble"></i>
  </a>
  <a href="#" class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center" style="width: 42px; height: 42px;">
    <i class="fab fa-google"></i>
  </a>
</div>

      </div>

      <!-- Right Column (Form) -->
      <div class="col-md-6">
        <form action="/Portfolio_ahmed/backend/crud/add.php?table=contact_messages" method="POST">
          <div class="row py-3">
            <div class="col-md-6 mb-3">
              <input type="text" name="name" class="form-control border-0 border-bottom bg-transparent text-white contact-input" placeholder="First Name" required>
            </div>
            <div class="col-md-6 mb-3">
              <input type="text" name="lastname" class="form-control border-0 border-bottom bg-transparent text-white contact-input" placeholder="Last Name" required>
            </div>
          </div>

          <div class="row py-3">
            <div class="col-md-6 mb-3">
              <input type="email" name="email" class="form-control border-0 border-bottom bg-transparent text-white contact-input" placeholder="Email Address" required>
            </div>
            <div class="col-md-6 mb-3">
              <input type="tel" name="phone" class="form-control border-0 border-bottom bg-transparent text-white contact-input" placeholder="Phone Number" required>
            </div>
          </div>

          <div class="mb-3 py-3">
            <textarea name="message" rows="4" class="form-control border-0 border-bottom bg-transparent text-white contact-input" placeholder="Message" required></textarea>
          </div>

  <div class="text-end">
  <button type="submit" class="btn px-4 py-2 rounded text-white fw-bold green-gradient-btn">
    Send Message
  </button>
</div>

        </form>
      </div>
    </div>
  </div>
</section>
