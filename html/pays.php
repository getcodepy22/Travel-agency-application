<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Pays disponibles</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* HERO */
.hero{
    background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 80px 20px;
    text-align: center;
}

/* CARD */
.destination-card{
    transition: 0.3s;
    border-radius: 15px;
}

.destination-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

</style>

</head>

<body class="bg-light">

<!-- HERO -->
<div class="hero">
    <h1>🌍 Destinations disponibles</h1>
    <p>Trouvez votre prochain voyage facilement</p>

    <input type="text" id="searchInput" class="form-control w-50 mx-auto mt-3" placeholder="Rechercher une destination...">
</div>

<!-- CONTENT -->
<div class="container my-5">

    <div class="row g-4">

        <!-- PARIS -->
        
          <div class="col-md-4 destination" data-name="paris">
            <div class="card destination-card shadow" >
                <img src="../img/paris.jfif" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-primary">Paris</h5>
                    <p>📅 25/04 - 01/05 - 30/05</p>
                    <p>⏰ 10h30 - 13h00 - 16h00</p>
                    
                    <a href="valider.php?pays=Paris&date=25/04/2021&heure=10:30" class="btn btn-primary w-100">Réserver</a>
                </div>
            </div>
          </div>


        <!-- MAROC -->

          <div class="col-md-4 destination" data-name="marroc">
            <div class="card destination-card shadow">
                <img src="../img/maroc.jfif" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-primary">Maroc</h5>
                    <p>📅 10/06 - 20/06 - 01/07</p>
                    <p>⏰ 09h30 - 12h00 - 17h00</p>
                    <a href="valider.php?pays=Marroc&date=10/06/2021&heure=09:30" class="btn btn-primary w-100">Réserver</a>
                </div>
            </div>
        </div>


        <!-- TUNISIE -->
        
        <div class="col-md-4 destination" data-name="tunisie">
            <div class="card destination-card shadow">
                <img src="../img/tunisie.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-primary">Tunisie</h5>
                    <p>📅 10/07 - 20/07 - 01/08</p>
                    <p>⏰ 08h30 - 11h30 - 14h30</p>
                    <a href="valider.php?pays=Tunisie&date=10/07/2021&heure=08:30" class="btn btn-primary w-100">Réserver</a>
                </div>
            </div>
        </div>
      

        <!-- TURQUIE -->

          <div class="col-md-4 destination" data-name="turquie">
            <div class="card destination-card shadow">
                <img src="../img/turc.jfif" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-primary">Turquie</h5>
                    <p>📅 10/08 - 20/09 - 01/10</p>
                    <p>⏰ 10h20 - 13h30 - 16h30</p>
                    <a href="valider.php?pays=Turquie&date=10/08/2021&heure=10:20" class="btn btn-primary w-100">Réserver</a>
                </div>
            </div>
            </div>


        <!-- ITALIE -->

          <div class="col-md-4 destination" data-name="Italie">
            <div class="card destination-card shadow">
                <img src="../img/Itlay.jpg" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title text-primary">Italie</h5>
                    <p>📅 10/10 - 20/11 - 01/02</p>
                    <p>⏰ 07h30 - 15h30 - 23h00</p>
                    <a href="valider.php?pays=Italie&date=10/10/2021&heure=07:30" class="btn btn-primary w-100">Réserver</a>
                </div>
            </div>


    </div>

</div>
<script>
const searchInput = document.getElementById("searchInput");
const cards = document.querySelectorAll(".destination");

searchInput.addEventListener("keyup", function() {
    let value = this.value.toLowerCase();

    cards.forEach(card => {
        let name = card.getAttribute("data-name");

        if(name.includes(value)){
            card.style.display = "block";
        } else {
            card.style.display = "none";
        }
    });
});
</script>
</body>
</html>