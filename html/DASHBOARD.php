<?php
session_start();

if(!isset($_SESSION['nom'])){
    header("Location: connexion.php");
    exit;
}

$cnx = mysqli_connect("localhost","root","","gestion_agence");

$user_name = $_SESSION['nom'];

// récupérer réservations utilisateur
$sql = "SELECT * FROM reservations WHERE nom = '$user_name'";
$result = mysqli_query($cnx, $sql);
if(!$result){
    die("Erreur SQL : " . mysqli_error($cnx));
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <!-- PROFIL -->
    <div class="card p-4 mb-4 shadow">

        <h3>👤 Profil utilisateur</h3>

        <p><b>Nom : </b> <?= $_SESSION['nom'] ?></p>
        <p><b>Prenom :  </b> <?= $_SESSION['prenom'] ?></p>
        <p><b>Email : </b> <?= $_SESSION['email'] ?></p>
        <p><b>Sexe :</b> <?= $_SESSION['sexe'] ?></p><p><b>Nom :</b> <?= $_SESSION['nom'] ?></p>
        <p><b>Numero de Telephone :</b> 0<?= $_SESSION['numero'] ?></p><p><b>Nom :</b> <?= $_SESSION['nom'] ?></p>
        <p><b>Date de naissance :</b> <?= $_SESSION['naissance'] ?></p>
        <p><b>Adresse :</b> <?= $_SESSION['ville'] ?></p>


        <a href="../php/logout.php" class="btn btn-danger btn-sm">Déconnexion</a>
    </div>

    <!-- RESERVATIONS -->
    <div class="card p-4 shadow">

        <h3 class="mb-3">✈️ Mes réservations</h3>

        <table class="table table-bordered text-center">
            <thead class="table-dark">
                <tr>
                    <th>Réf</th>
                    <th>Départ</th>
                    <th>Destination</th>
                    <th>Date</th>
                    <th>Heure</th>
                    <th>Ticket</th>
                </tr>
            </thead>

            <tbody>

            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['reference'] ?></td>
                    <td><?= $row['depart'] ?></td>
                    <td><?= $row['arrive'] ?></td>
                    <td><?= $row['date_depart'] ?></td>
                    <td><?= $row['heure_depart'] ?></td>

                    <td>
                        <a href="ticket.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm">
                            Voir
                        </a>
                    </td>
                </tr>
            <?php endwhile; ?>

            </tbody>
        </table>

    </div>

</div>

</body>
</html>