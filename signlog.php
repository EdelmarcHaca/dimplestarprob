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
    footer{ background:#0d1117; color:#e5e7eb; margin-top:56px; }
    footer a{ color:#9ca3af; text-decoration:none; }
    .card-rounded{ border-radius:1rem; }
    .table thead th{ background:rgba(34,197,94,.08); color:#0f172a; }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">
<?php include 'navbar.php'; ?>

<section class="container page-header">
  <h1 class="fw-bold">Account</h1>
  <p class="text-muted mb-0">Login or create an account to manage your bookings.</p>
</section>

<section class="container my-4">
  <div class="row g-4">
    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">Login</h5>
          <form method="post" action="login.php" class="row g-3">
            <div class="col-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-12">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn brand-btn">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="card card-rounded shadow-sm h-100">
        <div class="card-body">
          <h5 class="fw-semibold mb-3">Sign Up</h5>
          <form method="post" action="register.php" class="row g-3">
            <div class="col-md-6">
              <label class="form-label">First Name</label>
              <input type="text" class="form-control" name="first_name" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Last Name</label>
              <input type="text" class="form-control" name="last_name" required>
            </div>
            <div class="col-12">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" name="password" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Confirm Password</label>
              <input type="password" class="form-control" name="confirm_password" required>
            </div>
            <div class="col-12 form-check">
              <input class="form-check-input" type="checkbox" id="terms" required>
              <label class="form-check-label" for="terms">
                I agree to the Terms & Privacy Policy
              </label>
            </div>
            <div class="col-12 d-flex justify-content-end">
              <button type="submit" class="btn brand-btn">Create Account</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
