<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Turquie - Découverte</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

  <style>
    body{
      font-family: Arial, sans-serif;
      background: #f8f9fa;
      overflow-x: hidden;
    }

    /* HERO */
    .hero{
      height: 100vh;
      background:
      linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
      url('../img/turc_back.jfif');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: white;
    }

    .hero h1{
      font-size: 5rem;
      font-weight: bold;
      animation: zoomIn 2s ease;
    }

    .hero p{
      font-size: 1.4rem;
      margin-top: 15px;
      animation: fadeUp 2s ease;
    }

    .btn-france{
      background: linear-gradient(45deg,#0055A4,#ffffff,#EF4135);
      color: black;
      font-weight: bold;
      border: none;
      padding: 12px 30px;
      border-radius: 50px;
      transition: .4s;
    }

    .btn-france:hover{
      transform: scale(1.08);
    }

    /* SECTION */
    section{
      padding: 90px 0;
    }

    .section-title{
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 50px;
      text-align: center;
      color: #0d6efd;
    }

    /* CARDS */
    .country-card{
      border: none;
      border-radius: 20px;
      overflow: hidden;
      transition: .4s;
      box-shadow: 0 10px 25px rgba(0,0,0,.1);
    }

    .country-card:hover{
      transform: translateY(-10px);
    }

    .country-card img{
      height: 250px;
      object-fit: cover;
    }

    /* FLAG */
    .flag{
      width: 100%;
      height: 220px;
      display: flex;
    }

    .blue{
      background: #0055A4;
      flex: 1;
    }

    .white{
      background: white;
      flex: 1;
    }

    .red{
      background: #EF4135;
      flex: 1;
    }

    /* FOOTER */
    footer{
      background: #111;
      color: white;
      text-align: center;
      padding: 30px;
    }

    /* ANIMATIONS */
    @keyframes zoomIn{
      from{
        opacity:0;
        transform: scale(.5);
      }
      to{
        opacity:1;
        transform: scale(1);
      }
    }

    @keyframes fadeUp{
      from{
        opacity:0;
        transform: translateY(50px);
      }
      to{
        opacity:1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">
      🇹🇷 TURQUIE
    </a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="#about">À propos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#places">Lieux</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#culture">Culture</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#histoire">Histoire</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Bienvenue en Turquie</h1>

    <p>
     Entre l’Europe et l’Asie, un pays riche en histoire et culture
    </p>

    <a href="#about" class="btn btn-france mt-4">
      Découvrir
    </a>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="container">

    <h2 class="section-title" data-aos="fade-up">
      À propos de la Turquie
    </h2>

    <div class="row align-items-center">

      <div class="col-lg-4" data-aos="fade-right">
        <div class="flag shadow rounded overflow-hidden">
          <img src="../img/turc.png" alt="" srcset="" class="w-100">
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
        <h3 class="fw-bold mb-3">
          🇫🇷 République Française
        </h3>

        <p class="lead">
          La Turquie est un pays transcontinental reliant l’Europe et l’Asie.
          Elle est connue pour Istanbul, sa cuisine et son histoire ottomane.
        </p>

         <p>
          Capitale : Ankara <br>
          Ville principale : Istanbul <br>
          Population : 85 millions <br>
          Langue : Turc
        </p>

      </div>

    </div>

  </div>
</section>


<!-- HISTOIRE -->
<section id="histoire" class="bg-white">
  <div class="container">

    <h2 class="section-title" data-aos="fade-up">Histoire de la Turquie</h2>

    <div class="row align-items-center g-5">

      <div class="col-lg-6" data-aos="fade-right">
        <img src="../img/turc_epoque.jpg"
             class="img-fluid rounded shadow">
      </div>

      <div class="col-lg-6" data-aos="fade-left">

        <h3 class="fw-bold">Un héritage puissant</h3>

        <p class="lead">
          La Turquie a été le centre de plusieurs civilisations majeures comme les Romains et les Ottomans.
        </p>

        <p>
          L’Empire ottoman a dominé pendant plus de 600 ans, influençant l’Europe, l’Asie et l’Afrique.
          En 1923, Mustafa Kemal Atatürk fonde la République moderne de Turquie. <br>
           Pour voir plus d'info sur l'histoire de Turquie<a href="https://fr.wikipedia.org/wiki/Turquie" target="_blank"> Cliquer Ici</a>
        </p>

        <div class="alert alert-danger mt-3">
          🇹🇷 Devise : Paix dans le pays, paix dans le monde
        </div>

      </div>

    </div>

    <!-- TIMELINE -->
    <div class="row mt-5 text-center">

      <div class="col-md-4" data-aos="zoom-in">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>🏺 Antiquité</h4>
          <p>Civilisations grecques et romaines.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>🕌 Empire Ottoman</h4>
          <p>Un des plus grands empires de l’histoire.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>🇹🇷 République</h4>
          <p>Modernisation avec Atatürk en 1923.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- PLACES -->
<section id="places" class="bg-light">

  <div class="container">

    <h2 class="section-title" data-aos="fade-up">Lieux célèbres</h2>

    <div class="row g-4">

      <div class="col-md-4" data-aos="fade-up">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1544989164-31dc3c645987?q=80&w=2070&auto=format&fit=crop">
          <div class="card-body">
            <h4>Istanbul</h4>
            <p>Ville entre deux continents.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1605540436563-5bca919ae766?q=80&w=2070&auto=format&fit=crop">
          <div class="card-body">
            <h4>Cappadoce</h4>
            <p>Montgolfières et paysages uniques.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?q=80&w=2070&auto=format&fit=crop">
          <div class="card-body">
            <h4>Pamukkale</h4>
            <p>Terrasses naturelles blanches.</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- CULTURE -->
<section id="culture">

  <div class="container">

    <h2 class="section-title" data-aos="fade-up">Culture</h2>

    <div class="row text-center g-4">

      <div class="col-md-4" data-aos="flip-left">
        <div class="p-4 bg-white shadow rounded">
          <i class="bi bi-cup-hot fs-1 text-danger"></i>
          <h4>Gastronomie</h4>
          <p>Kebab, baklava, thé turc.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
        <div class="p-4 bg-white shadow rounded">
          <i class="bi bi-building fs-1 text-primary"></i>
          <h4>Architecture</h4>
          <p>Mosquées et palais ottomans.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="400">
        <div class="p-4 bg-white shadow rounded">
          <i class="bi bi-airplane fs-1 text-success"></i>
          <h4>Tourisme</h4>
          <p>Destination très visitée.</p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- FOOTER -->
<footer>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init({ duration: 1200, once: true });
</script>

</body>
</html>