
<?php $pageTitle = "Contact | Supercomputing India"; ?>


<head><!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Bootstrap JS (with Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="https://sci25.supercomputingindia.org/">
     <div class="logo-wrapper me-2">
  <div class="logo-spin">
    <img src="images/SCI_Logo.png" alt="SCI2025 Logo Front" class="front img-fluid" style="width:60px; height:auto;">
  </div>
</div>
<img src="images/SCI2025_text_white.png" alt="SCI2025 Text" class="brand-text-img img-fluid" style="height:40px; width:auto;">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#navbarNav" aria-controls="navbarNav" 
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="index.php#SCI">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
<img src="img\SCI-webbanner.jpg" alt="SCI2025 Logo Front" class="front img-fluid" style="width:100%; height:60%;">

<!-- Hero Section -->
<section class="hero hero-bg text-center text-white d-flex align-items-center justify-content-center" style="margin-bottom:-190px;">
  <div class="container py-5">
    <h1 class="display-5 fw-bold">Contact Us</h1>
  </div>
</section>


<!-- Main Contact Section -->
<main class="flex-grow-1">
  <section class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card border-warning shadow">
          <div class="card-body">
            <h5 class="card-title mb-3 text-center">General Enquiries</h5>
            <p class="mb-2 text-center">
              For any questions or information regarding the conference, feel free to reach out:
            </p>
            <p class="text-center">
              <i class="bi bi-envelope-fill me-1"></i>
              <strong>Email:</strong>
              <a href="mailto:sci@cdac.in" class="text-warning"><b>sci@cdac.in</b></a>
            </p>
          </div>
        </div>
      </div>
    </div>

    
  <!-- Social Media Section -->
  <section class="container text-center mb-5">
    <h4 class="mb-4">Connect With Us</h4>
    <div class="d-flex justify-content-center gap-4 social-icons">
      <!-- Facebook -->
      <a href="https://www.facebook.com/cdacbangalore/" target="_blank" rel="noopener">
        <i class="bi bi-facebook fs-2"></i>
      </a>

      <!-- X (Twitter) -->
      <a href="https://x.com/C-DACBengaluru" target="_blank" rel="noopener">
        <i class="bi bi-twitter fs-2"></i>
      </a>

      <!-- Website -->
      <a href="https://cdac.in/" target="_blank" rel="noopener">
        <i class="bi bi-globe fs-2"></i>
      </a>

      <!-- YouTube -->
      <a href="https://www.youtube.com/channel/UCh-fxwvQbIeAxgE7sallBvg" target="_blank" rel="noopener">
        <i class="bi bi-youtube fs-2"></i>
      </a>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>