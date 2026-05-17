<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>France - Découverte</title>

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
      url('https://images.unsplash.com/photo-1431274172761-fca41d930114?q=80&w=2070&auto=format&fit=crop');
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
      🇫🇷 FRANCE
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
    <h1>Bienvenue en France</h1>

    <p>
      Le pays de la culture, de la gastronomie et de l’histoire
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
      À propos de la France
    </h2>

    <div class="row align-items-center">

      <div class="col-lg-6" data-aos="fade-right">
        <div class="flag shadow rounded overflow-hidden">
          <div class="blue"></div>
          <div class="white"></div>
          <div class="red"></div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">
        <h3 class="fw-bold mb-3">
          🇫🇷 République Française
        </h3>

        <p class="lead">
          La France est l’un des pays les plus visités au monde.
          Elle est célèbre pour Paris, la Tour Eiffel,
          le Louvre, la gastronomie et la mode.
        </p>

        <p>
          Capitale : Paris <br>
          Population : 68 Millions <br>
          Langue : Français <br>
          Monnaie : Euro (€)
        </p>

      </div>

    </div>

  </div>
</section>

<!-- PLACES -->
<section id="places" class="bg-light">

  <div class="container">

    <h2 class="section-title" data-aos="zoom-in">
      Lieux célèbres
    </h2>

    <div class="row g-4">

      <!-- CARD -->
      <div class="col-md-4" data-aos="fade-up">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1549144511-f099e773c147?q=80&w=1974&auto=format&fit=crop">

          <div class="card-body">
            <h4 class="fw-bold">
              Tour Eiffel
            </h4>

            <p>
              Le monument emblématique de Paris et de la France.
            </p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1569949381669-ecf31ae8e613?q=80&w=2070&auto=format&fit=crop">

          <div class="card-body">
            <h4 class="fw-bold">
              Musée du Louvre
            </h4>

            <p>
              Le plus grand musée d’art du monde.
            </p>
          </div>
        </div>
      </div>

      <!-- CARD -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?q=80&w=2073&auto=format&fit=crop">

          <div class="card-body">
            <h4 class="fw-bold">
              Paris
            </h4>

            <p>
              La ville lumière connue pour son romantisme.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- HISTOIRE -->
<section id="histoire" class="bg-white">

  <div class="container">

    <h2 class="section-title" data-aos="fade-up">
      Histoire de la France
    </h2>

    <div class="row align-items-center g-5">

      <div class="col-lg-6" data-aos="fade-right">
        <img 
          src="../img/France_epoque.jpg"
          class="img-fluid rounded shadow"
          alt="Histoire de France"
          >
      </div>

      <div class="col-lg-6" data-aos="fade-left">

        <h3 class="fw-bold mb-3">
          Une histoire riche et influente
        </h3>

        <p class="lead">
          La France possède l’une des histoires les plus riches d’Europe,
          marquée par des royaumes, des révolutions et des innovations culturelles.
        </p>

        <p>
          Au Moyen Âge, la France se construit autour des dynasties royales comme les Capétiens.  
          En 1789, la Révolution française marque un tournant majeur avec la chute de la monarchie
          et la naissance de la République.
        </p>

        <p>
          Le pays devient ensuite une grande puissance mondiale,
          participant aux grandes transformations industrielles, politiques et culturelles.<br>
          Pour voir plus d'info sur l'histoire de France<a href="https://www.histoire-france.net/" target="_blank"> Cliquer Ici</a>
        </p>

        <div class="alert alert-primary mt-3 shadow-sm">
          🇫🇷 Devise : Liberté, Égalité, Fraternité
        </div>

      </div>

    </div>

    <!-- Timeline -->
    <div class="row mt-5 text-center">

      <div class="col-md-4" data-aos="zoom-in">
        <div class="p-4 bg-light rounded shadow-sm h-100">
          <h4>⚔️ Moyen Âge</h4>
          <p>Formation du royaume et des dynasties françaises.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="p-4 bg-light rounded shadow-sm h-100">
          <h4>🏛️ Révolution 1789</h4>
          <p>Fin de la monarchie et naissance de la République.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="p-4 bg-light rounded shadow-sm h-100">
          <h4>🌍 Époque moderne</h4>
          <p>France moderne, puissance économique et culturelle.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- CULTURE -->
<section id="culture">

  <div class="container">

    <h2 class="section-title" data-aos="fade-up">
      Culture Française
    </h2>

    <div class="row text-center g-4">

      <div class="col-md-4" data-aos="flip-left">
        <div class="p-4 bg-white rounded shadow h-100">
          <i class="bi bi-cup-hot fs-1 text-danger"></i>

          <h4 class="mt-3">
            Gastronomie
          </h4>

          <p>
            Croissants, baguettes, fromage et cuisine raffinée.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
        <div class="p-4 bg-white rounded shadow h-100">
          <i class="bi bi-music-note-beamed fs-1 text-primary"></i>

          <h4 class="mt-3">
            Musique & Art
          </h4>

          <p>
            Une riche histoire artistique et musicale.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="400">
        <div class="p-4 bg-white rounded shadow h-100">
          <i class="bi bi-airplane fs-1 text-success"></i>

          <h4 class="mt-3">
            Tourisme
          </h4>

          <p>
            Des millions de visiteurs chaque année.
          </p>
        </div>
      </div>

    </div>

  </div>

</section>

<!-- FOOTER -->
<footer>
  
</footer>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init({
    duration: 1200,
    once: true
  });
</script>

</body>
</html>