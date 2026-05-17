<?php


session_start();
?>




<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Voyage Facile</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Custom CSS -->
<link rel="stylesheet" href=" css/style.css">

</head>
<body>

<!-- TOP BAR -->
<div class="bg-dark text-white py-2">
  <div class="container d-flex justify-content-between">
    <div>
      <i class="fab fa-facebook me-2"></i>
      <i class="fab fa-twitter me-2"></i>
      <i class="fab fa-instagram"></i>
    </div>
    <div>
      <?php if(isset($_SESSION['nom'])): ?>

<div class="dropdown">

  <a class="btn btn-outline-light btn-sm dropdown-toggle d-flex align-items-center gap-2"
     data-bs-toggle="dropdown"
     style="border-radius: 30px;">

    <!-- avatar -->
    <div style="
        width:32px;
        height:32px;
        background:#0dcaf0;
        color:#000;
        border-radius:50%;
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:bold;
        text-transform:uppercase;
    ">
      <?= strtoupper(substr($_SESSION['nom'],0,1)) ?>
    </div>

    <!-- nom -->
    <span class="fw-semibold">
      <?= $_SESSION['nom'] ?>
    </span>

  </a>

  <ul class="dropdown-menu dropdown-menu-end shadow">

    <li>
      <a class="dropdown-item" href="html/DASHBOARD.php">
        ✈️ Mes réservations
      </a>
    </li>

    <li><hr class="dropdown-divider"></li>

    <li>
      <a class="dropdown-item text-danger" href="php/logout.php">
        🚪 Déconnexion
      </a>
    </li>

  </ul>

</div>

<?php else: ?>

<a href="html/inscription.php" class="btn btn-outline-light btn-sm me-2">
  Inscription
</a>

<a href="html/connexion.php" class="btn btn-info btn-sm">
  Connexion
</a>

<?php endif; ?>
    </div>
  </div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">VOYAGE FACILE</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item"><a class="nav-link" href="html/pays.php">Réservation</a></li>
        <li class="nav-item"><a class="nav-link" href="html/consulter.php">Consultation</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pays</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="html/paris.php">France</a></li>
            <li><a class="dropdown-item" href="html/italie.php">Italie</a></li>
            <li><a class="dropdown-item" href="html/turquie.php">Turquie</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Hotels</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item">Le petit merveille</a></li>
            <li><a class="dropdown-item">Hotel d'Or</a></li>
            <li><a class="dropdown-item">Hotel Premium</a></li>
          </ul>
        </li>
      </ul>


      <form class="d-flex" method="post" action=" php/search.php">
        <input class="form-control me-2" placeholder="Rechercher" name="recherche">
        <button class="btn btn-info"><i class="fa fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero text-center text-white d-flex align-items-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Explorez le monde</h1>
    <p class="lead">Trouvez les meilleurs vols au meilleur prix</p>
    <a class="btn btn-info btn-lg" href="#offre">Commencer</a>
  </div>
</section>

<!-- COMMENT ÇA MARCHE -->
<section class="py-5 text-center">
  <div class="container">
    <h2 class="mb-5 p">Comment ça marche</h2>

    <div class="row p" >
      <div class="col-md-3">
        <i class="fa fa-search fa-2x mb-3"></i>
        <h5>Chercher</h5>
        <p>Trouvez votre vol</p>
      </div>

      <div class="col-md-3">
        <i class="fa fa-exchange fa-2x mb-3"></i>
        <h5>Comparer</h5>
        <p>Comparez les prix</p>
      </div>

      <div class="col-md-3">
        <i class="fa fa-plane fa-2x mb-3"></i>
        <h5>Voyager</h5>
        <p>Réservez facilement</p>
      </div>

      <div class="col-md-3">
        <i class="fa-solid fa-money-bill fa-2x mb-3"></i>
        <h5>Économiser</h5>
        <p>Meilleurs prix garantis</p>
      </div>
    </div>
  </div>
</section>

<!-- OFFRES -->
<section class="bg-light py-5">
  <div class="container">
    <h2 class="text-center mb-5" id="offre">Offres spéciales</h2>

    <div class="row">

      <div class="col-md-4">
        <div class="card shadow">
          <a href="html/paris.php"><img src=" img/paris.jpg" class="card-img-top"></a>
          <div class="card-body text-center">
            <h5>Paris</h5>
            <p>60000 DA</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <a href="html/turquie.php"><img src=" img/turc.jpg" class="card-img-top"></a>
          <div class="card-body text-center">
            <h5>Turquie</h5>
            <p>55000 DA</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <a href="html/italie.php"><img src=" img/Itlay.jpg" class="card-img-top"></a>
          <div class="card-body text-center">
            <h5>Italie</h5>
            <p>50000 DA</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- HOTELS -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-5">Hôtels recommandés</h2>

    <div class="row">

      <div class="col-md-4">
        <div class="card shadow">
          <img src=" img/hotel.jpg" class="card-img-top">
          <div class="card-body text-center">
            <h5>Le petit merveille</h5>
            <p>★★★★★</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <img src=" img/hotel2.webp" class="card-img-top">
          <div class="card-body text-center">
            <h5>Hotel d'Or</h5>
            <p>★★★★☆</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card shadow">
          <img src=" img/azalai-grand-hotel-pool-standard.webp" class="card-img-top">
          <div class="card-body text-center">
            <h5>Hotel Premium</h5>
            <p>★★★★★</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- FOOTER -->
<footer class="bg-dark text-white pt-5 pb-3">
  <div class="container">
    <div class="row">

      <!-- ABOUT -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">About us</h5>
        <p>
          Voyage Facile satisfait ses clients en alliant sécurité et rapidité.
        </p>

        <div>
          <a href="#" class="text-white me-3">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#" class="text-white">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>

      <!-- ADDRESS -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Adresse</h5>

        <p>
          <i class="fas fa-map-marker-alt me-2"></i>
          Tizi Ouzou, Algérie
        </p>

        <p>
          <i class="fas fa-phone-alt me-2"></i>
          +213 555 555
        </p>
      </div>

      <!-- CONTACT -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold">Contactez-nous</h5>

        <form action=" php/commentaire.php" method="POST">
          <div class="mb-3">
            <input type="email" class="form-control" placeholder="Votre email" name="email" required>
          </div>

          <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="Votre message" name="text" required></textarea>
          </div>

          <button class="btn btn-info w-100">Envoyer</button>
        </form>
      </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="text-center mt-4 border-top pt-3">
      <p class="mb-0">© 2026 Voyage Facile - Tous droits réservés</p>
    </div>

  </div>
</footer>

<!-- Bootstrap JS -->
<script src=" js/bootstrap.bundle.min.js"></script>

</body>
</html>