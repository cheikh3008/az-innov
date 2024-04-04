<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>Contact | Az Innov</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="keywords" />
  <meta content="" name="description" />

  <!-- Favicon -->
  <link href="/img/favicon-mtn.webp" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="/lib/animate/animate.min.css" rel="stylesheet" />
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Navbar Start -->
  <?php
  include 'pages/navbar.php';
  ?>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
      <h1 class="display-4 text-white animated slideInDown mb-4">
        Contacter
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item">
            <a class="text-white" href="/">Accueil</a>
          </li>
          <li class="breadcrumb-item">
            <a class="text-white" href="#">Pages</a>
          </li>
          <li class="breadcrumb-item text-primary active" aria-current="page">
            Nous contacter
          </li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- Page Header End -->
  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end mb-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="border-start border-5 border-primary ps-4">
            <h6 class="text-body text-uppercase mb-2">Contact</h6>
            <h1 class="display-6 mb-0">
              Si vous avez des questions, veuillez nous contacter
            </h1>
          </div>
        </div>
      </div>
      <div class="row g-4">
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative blur">
            <div class="card">
              <div class="icon-contact">
                <i class="fa fa-home me-3"></i>
              </div>
              <h4>Adresse</h4>
              <p>Dougar Route de Mbour - Sénégal </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative blur">
            <div class="card">
              <div class="icon-contact">
                <i class="fa fa-phone-alt me-3"></i>
              </div>
              <h4>Téléphone</h4>
              <p> (+221) 77 468 29 29 </p>
              <p> (+221) 33 940 99 08 </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item position-relative blur">
            <div class="card">
              <div class="icon-contact">
                <i class="fa fa-envelope me-3"></i>
              </div>
              <h4>Email</h4>
              <p>contact@minametransport.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px">
          <div class="position-relative h-100">
            <iframe class="position-relative w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d15435.3451688071!2d-17.435502421880084!3d14.721845835604247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d14.7203409!2d-17.4203784!4m5!1s0xec173cd32eb7717%3A0xeda2f749b5e367a8!2sawa%20informatique%2C%20Boulangerie%20CAPA%2C%20Yarakh%20Capa%20Mosqu%C3%A9e%20Yarakh%20Capa%2C%208%20Rte%20de%20Rufisque%2C%20Dakar%2011500!3m2!1d14.718029!2d-17.4325616!5e0!3m2!1sfr!2ssn!4v1690807545973!5m2!1sfr!2ssn" style="min-height: 450px; border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="border-start border-5 border-primary ps-4 mb-5">
            <h6 class="text-body text-uppercase mb-2">Nous contacter</h6>
            <h1 class="display-6 mb-0">
              Laissez nous un message !
            </h1>
          </div>
          <form id="contactForm" name="sentMessage" class="pt-5" novalidate="novalidate" method="post" action="traitementMessage.php">
            <div class="res-form text-center" id="contact"></div>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control border-0 bg-light" id="name" name="nomComplet" placeholder="Prénom et nom" />
                  <label for="name">Prénom et nom</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input type="email" class="form-control border-0 bg-light" id="email" name="email" placeholder="Adresse email" />
                  <label for="email">Adresse email</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control border-0 bg-light" id="telephone" name="telephone" placeholder="Numéro de téléphone" />
                  <label for="telephone">Numéro de téléphone</label>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-floating">
                  <input type="text" class="form-control border-0 bg-light" id="subject" name="sujet" placeholder="Sujet" />
                  <label for="subject">Sujet</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea class="form-control border-0 bg-light" name="message" placeholder="Votre message ici..." id="message" style="height: 150px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">
                  Envoyer
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->

  <!-- footer Start -->
  <?php
  include 'pages/footer.php';
  ?>
  <!-- footer End -->

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/waypoints/waypoints.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="/js/main.js"></script>
  <script src="/js/contact.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>