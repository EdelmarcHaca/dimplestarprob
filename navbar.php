<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-sm border-bottom border-success">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2" href="index.php">
      <img src="images/logo.png" alt="Dimple Star">
      <span class="fw-semibold">Dimple Star Transport</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainnav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainnav">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="terminal.php">Terminals</a></li>
        <li class="nav-item"><a class="nav-link" href="routeschedule.php">Routes & Schedules</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        <li class="nav-item ms-lg-2 mb-2 mb-lg-0">
          <a class="btn btn-sm brand-btn" href="book.php">Book Now</a>
        </li>
        <li class="nav-item dropdown ms-lg-2">
          <a class="nav-link dropdown-toggle" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : 'Account'; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
            <?php if(isset($_SESSION['email'])): ?>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            <?php else: ?>
              <li><a class="dropdown-item" href="signlog.php">Sign Up / Login</a></li>
            <?php endif; ?>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>