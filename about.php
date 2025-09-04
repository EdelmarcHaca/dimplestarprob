
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
      --brand:#22c55e;
      --bg:#0b0f0e;
      --text:#e5e7eb;
    }
    body{ background-color:var(--bg); }
    .navbar-brand img{ height:48px; }
    .navbar-dark .navbar-nav .nav-link:hover,
    .navbar-dark .navbar-nav .nav-link:focus,
    .navbar-dark .navbar-nav .nav-link.active{ color:var(--brand); }
    .page-header{ padding:64px 0 24px; color:var(--text); border-bottom:1px solid rgba(34,197,94,.2); }
    .brand-btn{ background:var(--brand); border-color:var(--brand); color:#0b0f0e; }
    .brand-btn:hover{ filter:brightness(.95); color:#0b0f0e; }
    footer{ background:#0d1117; color:#e5e7eb; margin-top:90px; }
    footer a{ color:#9ca3af; text-decoration:none;}
    .card-rounded{ border-radius:1rem; }
    .table thead th{ background:rgba(34,197,94,.08); color:#0f172a; }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include 'navbar.php'; ?>

<section class="container page-header">
  <h1 class="fw-bold">About Us</h1>
  <p class="text-muted mb-0">Our story and commitment to safe travel.</p>
</section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm">
    <div class="card-body p-4">
      <p>Dimple Star Transport has served commuters across the Philippines with dependable, comfortable, and affordable bus services. Our mission is to connect communities while prioritizing passenger safety and convenience.</p>
      <p>We continuously improve our fleet, routes, and customer support to make every trip hassle‑free—from booking to arrival.</p>
      <ul class="mb-0">
        <li>Professional drivers and support staff</li>
        <li>Regular vehicle maintenance and safety checks</li>
        <li>Expanding terminals and route coverage</li>
      </ul>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
