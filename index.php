
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Dimple Star Transport</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="images/icon.ico" type="image/x-icon">
  <style>
    :root{
      --brand:#22c55e; /* green */
      --bg:#0b0f0e;    /* near-black */
      --text:#e5e7eb;  /* light gray */
    }
    body{ background-color:var(--bg); }
    .navbar-brand img{ height:48px; }
    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link.active{ color:var(--brand); }
    .hero{ background:linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)), url('slide/images/b1.png') center/cover no-repeat; color:#fff; padding:100px 20px; text-align:center; }
    .page-header{ padding:64px 0 24px; color:var(--text); border-bottom:1px solid rgba(34,197,94,.2); }
    .brand-btn{ background:var(--brand); border-color:var(--brand); color:#0b0f0e; }
    .brand-btn:hover{ filter:brightness(.95); color:#0b0f0e; }
    footer{ background:#0d1117; color:#e5e7eb; margin-top:56px; }
    footer a{ color:#9ca3af; text-decoration:none; }
    .card-rounded{ border-radius:1rem; }
    .table thead th{ background:rgba(34,197,94,.08); color:#0f172a; }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include 'navbar.php'; ?>

<header class="hero">
  <h1 class="display-5 fw-bold">Safe. Reliable. Comfortable.</h1>
  <p class="lead mb-3">Travel across the Philippines with confidence.</p>
  <?php if(!isset($_SESSION['email'])): ?>
    <a href="signlog.php" class="btn brand-btn btn-lg">Sign Up / Login</a>
  <?php else: ?>
    <a href="book.php" class="btn brand-btn btn-lg">Book a Trip</a>
  <?php endif; ?>
</header>

<section class="container my-5">
  <div class="row g-4">
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Modern Fleet</h5>
          <p class="card-text">Air‑conditioned buses with monitored maintenance for a smooth ride.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Nationwide Routes</h5>
          <p class="card-text">Convenient terminals and routes that connect key cities and provinces.</p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card card-rounded h-100 shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Easy Booking</h5>
          <p class="card-text">Reserve seats online and manage your trips with a few clicks.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="mainCarousel" class="carousel slide container shadow-lg rounded" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active"><img src="slide/images/b1.png" class="d-block w-100 rounded" alt="Bus 1"></div>
    <div class="carousel-item"><img src="slide/images/b2.png" class="d-block w-100 rounded" alt="Bus 2"></div>
    <div class="carousel-item"><img src="slide/images/b3.png" class="d-block w-100 rounded" alt="Bus 3"></div>
    <div class="carousel-item"><img src="slide/images/b4.png" class="d-block w-100 rounded" alt="Bus 4"></div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
