  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" role="status"></div>
  </div>
  <!-- Spinner End -->

  <!-- Topbar Start -->
  <div class="container-fluid bg-light p-0">
      <div class="row gx-0 d-none d-lg-flex">
          <div class="col-lg-7 px-5 text-start">
              <div class="h-100 d-inline-flex align-items-center border-start border-end px-3">
                  <small class="fa fa-phone-alt me-2"></small>
                  <small> (+221) 77 468 29 29 </small>
              </div>
              <div class="h-100 d-inline-flex align-items-center border-end px-3">
                  <small class="far fa-envelope-open me-2"></small>
                  <small>contact@minanetransport.com</small>
              </div>
              <div class="h-100 d-inline-flex align-items-center border-end px-3">
                  <small class="far fa-clock me-2"></small>
                  <small>Lun - Sam : 09H - 18H</small>
              </div>
          </div>
          <div class="col-lg-5 px-5 text-end">
              <div class="h-100 d-inline-flex align-items-center">
                  <a class="btn btn-square border-end border-start" href=""><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square border-end" href=""><i class="fab fa-instagram"></i></a>
                  <a class="btn btn-square border-end" href=""><i class="fab fa-whatsapp"></i></a>
              </div>
          </div>
      </div>
  </div>
  <!-- Topbar End -->

  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
      <a href="/" class="navbar-brand d-flex align-items-center">
          <img src="/img/logo-mtn-small.png" class="m-2" width="100%" alt="Logo Minamne Transport et Services(MTN)">
      </a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-3 py-lg-0">
              <a href="/" class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/' ? 'active' : '' ?>">Accueil</a>
              <a href="location.php" class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/location.php' ? 'active' : '' ?>">Locations</a>
              <a href="vente.php" class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/vente.php' ? 'active' : '' ?>">Ventes</a>
              <a href="about.php" class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/about.php' ? 'active' : '' ?>">A propos</a>
              <a href="contact.php" class="nav-item nav-link <?php echo $_SERVER['REQUEST_URI'] == '/contact.php' ? 'active' : '' ?>">Contact</a>
          </div>
      </div>
  </nav>
  <!-- Navbar End -->