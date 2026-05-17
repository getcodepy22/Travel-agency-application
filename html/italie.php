<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title>Italie - Découverte</title>

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
      url('../img/italie_back.webp');
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

    .btn-italie{
      background: linear-gradient(45deg,#009246,#ffffff,#CE2B37);
      color: black;
      font-weight: bold;
      border: none;
      padding: 12px 30px;
      border-radius: 50px;
      transition: .4s;
    }

    .btn-italie:hover{
      transform: scale(1.08);
    }

    section{
      padding: 90px 0;
    }

    .section-title{
      font-size: 2.5rem;
      font-weight: bold;
      margin-bottom: 50px;
      text-align: center;
      color: #009246;
    }

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

    .green{background:#009246; flex:1;}
    .white{background:white; flex:1;}
    .red{background:#CE2B37; flex:1;}

    footer{
      background: #111;
      color: white;
      text-align: center;
      padding: 30px;
    }

    @keyframes zoomIn{
      from{opacity:0; transform:scale(.5);}
      to{opacity:1; transform:scale(1);}
    }

    @keyframes fadeUp{
      from{opacity:0; transform:translateY(50px);}
      to{opacity:1; transform:translateY(0);}
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand fw-bold" href="#">🇮🇹 ITALIE</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">À propos</a></li>
        <li class="nav-item"><a class="nav-link" href="#histoire">Histoire</a></li>
        <li class="nav-item"><a class="nav-link" href="#places">Lieux</a></li>
        <li class="nav-item"><a class="nav-link" href="#culture">Culture</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <h1>Bienvenue en Italie</h1>
    <p>Le pays de l’art, de la mode et de la gastronomie</p>
    <a href="#about" class="btn btn-italie mt-4">Découvrir</a>
  </div>
</section>

<!-- ABOUT -->
<section id="about">
  <div class="container">

    <h2 class="section-title" data-aos="fade-up">
      À propos de l’Italie
    </h2>

    <div class="row align-items-center">

      <div class="col-lg-4" data-aos="fade-right">
        <div class="flag shadow rounded overflow-hidden">
          <div class="green"></div>
          <div class="white"></div>
          <div class="red"></div>
        </div>
      </div>

      <div class="col-lg-6 mt-4 mt-lg-0" data-aos="fade-left">

        <h3 class="fw-bold mb-3">
          🇮🇹 République Italienne
        </h3>

        <p class="lead">
          L’Italie est un pays européen célèbre pour son histoire romaine,
          sa cuisine mondiale et ses monuments artistiques.
        </p>

        <p>
          Capitale : Rome <br>
          Population : 59 millions <br>
          Langue : Italien <br>
          Monnaie : Euro (€)
        </p>

      </div>

    </div>
  </div>
</section>

<!-- HISTOIRE -->
<section id="histoire" class="bg-white">
  <div class="container">

    <h2 class="section-title" data-aos="fade-up">Histoire de l’Italie</h2>

    <div class="row align-items-center g-5">

      <div class="col-lg-6" data-aos="fade-right">
        <img src="../img/italie_epoque.webp"
             class="img-fluid rounded shadow">
      </div>

      <div class="col-lg-6" data-aos="fade-left">

        <h3 class="fw-bold">Un berceau de civilisation</h3>

        <p class="lead">
          L’Italie est le centre de l’Empire romain, l’une des plus grandes civilisations de l’histoire.
        </p>

        <p>
          Après la chute de Rome, la péninsule italienne est divisée en plusieurs États
          avant de devenir un pays unifié en 1861.
          Elle a ensuite joué un rôle majeur dans l’art, la Renaissance et la culture européenne. <br>
           Pour voir plus d'info sur l'histoire d'Italie<a href="https://fr.wikipedia.org/wiki/Histoire_de_l%27Italie" target="_blank" > Cliquer Ici</a>
        </p>

        <div class="alert alert-success mt-3">
          🇮🇹 Devise : Fraternité, unité, liberté
        </div>

      </div>

    </div>

    <!-- TIMELINE -->
    <div class="row mt-5 text-center">

      <div class="col-md-4" data-aos="zoom-in">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>🏛️ Rome antique</h4>
          <p>Empire romain et civilisation antique.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>🎨 Renaissance</h4>
          <p>Grande période artistique et culturelle.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">
        <div class="p-4 bg-light rounded shadow-sm">
          <h4>🇮🇹 Unification</h4>
          <p>Création de l’Italie moderne en 1861.</p>
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
          <img src="https://images.unsplash.com/photo-1529260830199-42c24126f198?q=80&w=2070&auto=format&fit=crop">
          <div class="card-body">
            <h4>Rome</h4>
            <p>La ville éternelle.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1514890547357-a9ee288728e0?q=80&w=2070&auto=format&fit=crop">
          <div class="card-body">
            <h4>Venise</h4>
            <p>Ville des canaux et gondoles.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="card country-card">
          <img src="https://images.unsplash.com/photo-1526481280695-3c687fd5432c?q=80&w=2070&auto=format&fit=crop">
          <div class="card-body">
            <h4>Florence</h4>
            <p>Berceau de la Renaissance.</p>
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
          <p>Pâtes, pizza, café italien.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="200">
        <div class="p-4 bg-white shadow rounded">
          <i class="bi bi-brush fs-1 text-primary"></i>
          <h4>Art</h4>
          <p>Michel-Ange, Léonard de Vinci.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="flip-left" data-aos-delay="400">
        <div class="p-4 bg-white shadow rounded">
          <i class="bi bi-airplane fs-1 text-success"></i>
          <h4>Tourisme</h4>
          <p>Un des pays les plus visités.</p>
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