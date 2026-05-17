<?php
$b_host = "localhost";
$b_user = "root";
$b_pass = "";
$b_base = "gestion_agence";

$cnx = mysqli_connect($b_host, $b_user, $b_pass, $b_base);

if (!$cnx) {
    die("Erreur connexion : " . mysqli_connect_error());
}

$recherche = isset($_POST['recherche']) ? trim($_POST['recherche']) : '';

$sql = "SELECT * FROM vol 
        WHERE ville_dest LIKE '%$recherche%' 
        OR ville_depart LIKE '%$recherche%' 
        LIMIT 100";

$req = mysqli_query($cnx, $sql);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Résultat de Recherche</title>

<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- AOS Animation -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>

body{
    background:
    linear-gradient(rgba(0,0,0,.6),rgba(0,0,0,.6)),
    url('../img/fond.jpg');

    background-size: cover;
    background-position: center;
    background-attachment: fixed;

    min-height: 100vh;
    font-family: Arial, sans-serif;
}

.overlay{
    padding: 60px 0;
}

.title{
    text-align: center;
    color: white;
    margin-bottom: 50px;
}

.title h1{
    font-size: 3rem;
    font-weight: bold;
}

.search-text{
    color: #ffc107;
}

.flight-card{
    background: rgba(255,255,255,0.95);
    border-radius: 20px;
    overflow: hidden;
    transition: .4s;
    box-shadow: 0 10px 30px rgba(0,0,0,.3);
}

.flight-card:hover{
    transform: translateY(-8px);
}

.card-header-custom{
    background: linear-gradient(45deg,#0d6efd,#6610f2);
    color: white;
    padding: 20px;
}

.route{
    font-size: 1.5rem;
    font-weight: bold;
}

.info-box{
    padding: 15px;
    border-radius: 15px;
    background: #f8f9fa;
    text-align: center;
    height: 100%;
}

.info-box i{
    font-size: 2rem;
    margin-bottom: 10px;
    color: #0d6efd;
}

.btn-home{
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: bold;
}

.no-result{
    background: rgba(255,255,255,.95);
    padding: 40px;
    border-radius: 20px;
    text-align: center;
}

</style>

</head>

<body>

<div class="container overlay">

    <!-- TITRE -->
    <div class="title" data-aos="fade-down">

        <h1>
            <i class="bi bi-airplane-fill"></i>
            Résultats de Recherche
        </h1>

        <p class="fs-5">
            Recherche pour :
            <span class="search-text">
                "<?php echo htmlspecialchars($recherche); ?>"
            </span>
        </p>

    </div>

<?php
if(mysqli_num_rows($req) > 0){

    while($obj = mysqli_fetch_object($req)){
?>

    <!-- CARD -->
    <div class="card flight-card mb-5" data-aos="zoom-in">

        <!-- HEADER -->
        <div class="card-header-custom">

            <div class="d-flex justify-content-between align-items-center flex-wrap">

                <div>
                    <h3 class="route">
                        <?php echo $obj->ville_depart; ?>
                        <i class="bi bi-arrow-right"></i>
                        <?php echo $obj->ville_dest; ?>
                    </h3>

                    <p class="mb-0">
                        Vol N° :
                        <strong><?php echo $obj->id_vol; ?></strong>
                    </p>
                </div>

                <div class="fs-1">
                    ✈️
                </div>

            </div>

        </div>

        <!-- BODY -->
        <div class="card-body p-4">

            <div class="row g-4">

                <!-- DEPART -->
                <div class="col-md-4">

                    <div class="info-box">

                        <i class="bi bi-geo-alt-fill"></i>

                        <h5>Ville Départ</h5>

                        <p class="mb-0 fw-bold">
                            <?php echo $obj->ville_depart; ?>
                        </p>

                    </div>

                </div>

                <!-- DESTINATION -->
                <div class="col-md-4">

                    <div class="info-box">

                        <i class="bi bi-flag-fill"></i>

                        <h5>Destination</h5>

                        <p class="mb-0 fw-bold">
                            <?php echo $obj->ville_dest; ?>
                        </p>

                    </div>

                </div>

                <!-- DATE -->
                <div class="col-md-4">

                    <div class="info-box">

                        <i class="bi bi-calendar-event-fill"></i>

                        <h5>Date Départ</h5>

                        <p class="mb-0 fw-bold">
                            <?php echo $obj->date_depart; ?>
                        </p>

                    </div>

                </div>

                <!-- HEURE -->
                <div class="col-md-12">

                    <div class="info-box">

                        <i class="bi bi-clock-fill"></i>

                        <h5>Heure Départ</h5>

                        <p class="mb-0 fw-bold fs-4">
                            <?php echo $obj->heure_depart; ?>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

<?php
    }

}else{
?>

    <!-- AUCUN RESULTAT -->
    <div class="no-result" data-aos="fade-up">

        <h2 class="text-danger">
            <i class="bi bi-exclamation-circle-fill"></i>
            Aucun résultat trouvé
        </h2>

        <p class="mt-3">
            Essayez une autre ville ou vérifiez votre recherche.
        </p>

    </div>

<?php
}
?>

    <!-- BUTTON -->
    <div class="text-center mt-5" data-aos="fade-up">

        <a href="../index.php"
           class="btn btn-warning btn-home">

            <i class="bi bi-house-door-fill"></i>
            Retour à l'accueil

        </a>

    </div>

</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
AOS.init({
    duration: 1200,
    once: true
});
</script>

</body>
</html>

<?php
mysqli_free_result($req);
mysqli_close($cnx);
?>