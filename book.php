
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
  <h1 class="fw-bold">Book a Trip</h1>
  <p class="text-muted mb-0">Fill in your travel details to reserve a seat.</p>
</section>

<section class="container my-4">
  <div class="card card-rounded shadow-sm">
    <div class="card-body">
      <form method="post" action="process_booking.php" class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Origin</label>
          <input type="text" class="form-control" name="origin" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Destination</label>
          <input type="text" class="form-control" name="destination" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Travel Date</label>
          <input type="date" class="form-control" name="date" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Departure Time</label>
          <input type="time" class="form-control" name="time" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Passengers</label>
          <input type="number" min="1" value="1" class="form-control" name="passengers" required>
        </div>
        <div class="col-md-4">
          <label class="form-label">Seat Preference</label>
          <select class="form-select" name="seat_pref">
            <option value="Any">Any</option>
            <option value="Window">Window</option>
            <option value="Aisle">Aisle</option>
          </select>
        </div>
        <div class="col-12 d-flex justify-content-end gap-2">
          <button type="reset" class="btn btn-outline-secondary">Clear</button>
          <button type="submit" class="btn brand-btn">Reserve Seat</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
