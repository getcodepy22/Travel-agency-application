<?php
session_start();

// 🔐 sécurité
if (!isset($_SESSION['nom']) || $_SESSION['nom'] != "admin") {
    header("Location: ../html/connexion.php");
    exit();
}

// DB
$cnx = mysqli_connect("localhost", "root", "", "gestion_agence");

// 🔴 DELETE CLIENT
if (isset($_POST['delete_client'])) {
    $id = $_POST['id_client'];
    mysqli_query($cnx, "DELETE FROM client WHERE id='$id'");
}

// 🔴 DELETE RES
if (isset($_POST['delete_res'])) {
    $id = $_POST['id_res'];
    mysqli_query($cnx, "DELETE FROM reservations WHERE id='$id'");
}

// 🔵 COMMENTAIRES
$resCommentaires = mysqli_query($cnx, "SELECT * FROM commentaire ORDER BY date DESC");

// 🔴 DELETE COMMENTAIRE
if (isset($_POST['delete_comment'])) {
    $id = $_POST['id_comment'];
    mysqli_query($cnx, "DELETE FROM commentaire WHERE id_commentaire=$id");
}


// 📊 STATS
$totalClients = mysqli_num_rows(mysqli_query($cnx, "SELECT * FROM client"));
$totalRes = mysqli_num_rows(mysqli_query($cnx, "SELECT * FROM reservations"));
$totalPaiements = mysqli_num_rows(mysqli_query($cnx, "SELECT * FROM paiements"));

// 🔎 SEARCH
$search = isset($_GET['search']) ? $_GET['search'] : '';
$resClients = mysqli_query($cnx, "SELECT * FROM client WHERE nom LIKE '%$search%' OR email LIKE '%$search%'");

$resReservations = mysqli_query($cnx, "SELECT * FROM reservations");
$resVol = mysqli_query($cnx, "SELECT * FROM vol");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Admin PRO++</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#141e30,#243b55);
    color:white;
}
.card{
    border-radius:15px;
}
.table{
    background:white;
}
</style>
</head>

<body>

<div class="container py-5">

<!-- HEADER -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>🚀 Admin Dashboard</h2>
    
    <a href="logout.php" class="btn btn-danger">Déconnexion</a>
</div>

<!-- STATS -->
<div class="row mb-4">

    <div class="col-md-4">
        <div class="card text-center p-3 bg-primary text-white">
            <h4><?= $totalClients ?></h4>
            <p>Clients</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center p-3 bg-success text-white">
            <h4><?= $totalRes ?></h4>
            <p>Réservations</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-center p-3 bg-warning text-dark">
            <h4><?= $totalPaiements ?></h4>
            <p>Paiements</p>
        </div>
    </div>

</div>

<!-- SEARCH -->
<div class="card p-3 mb-4">
    <form method="GET" class="d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="🔎 Rechercher client..." value="<?= $search ?>">
        <button class="btn btn-dark">Rechercher</button>
    </form>
</div>

<!-- CLIENTS -->
<div class="card p-3 mb-5">
<h4>👥 Clients</h4>

<table class="table table-hover mt-3">
<tr>
<th>ID</th>
<th>Nom</th>
<th>Email</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($resClients)) { ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['nom'] ?> <?= $row['prenom'] ?></td>
<td><?= $row['email'] ?></td>

<td>
<form method="post">
<input type="hidden" name="id_client" value="<?= $row['id'] ?>">
<button name="delete_client" class="btn btn-danger btn-sm">Supprimer</button>
</form>
</td>

</tr>
<?php } ?>

</table>
</div>

<!-- RESERVATIONS -->
<div class="card p-3 mb-4">
<h4>✈️ Réservations</h4>

<table class="table table-striped">
<tr>
<th>Ref</th>
<th>Trajet</th>
<th>Date</th>
<th>Email</th>
<th>Ticket</th>
<th>Action</th>
</tr>

<?php
$res = $cnx->query("SELECT * FROM reservations");

while($row = $res->fetch_assoc()){
echo "
<tr>
<td>{$row['reference']}</td>
<td>{$row['depart']} → {$row['arrive']}</td>
<td>{$row['date_depart']}</td>
<td>{$row['email']}</td>

<td>
<a href='../html/ticket.php?ref={$row['reference']}&aadepart={$row['depart']}&aarrive={$row['arrive']}&dated={$row['date_depart']}&heurp={$row['heure_depart']}' class='btn btn-primary btn-sm'>🎫 Voir</a>
</td>

<td>
<a href='?del_res={$row['id']}' class='btn btn-danger btn-sm'>Supprimer</a>
</td>

</tr>";
}
?>
</table>
</div>

<!-- PAIEMENTS -->
<div class="card p-3 mb-4">
<h4>💳 Paiements</h4>

<table class="table table-hover">
<tr>
<th>Référence</th>
<th>Montant</th>
<th>Statut</th>
<th>Changer</th>
</tr>

<?php
$res = $cnx->query("SELECT * FROM paiements");

while($row = $res->fetch_assoc()){
$color = $row['statut']=="PAYE" ? "success" : "warning";

echo "
<tr>
<td>{$row['reference']}</td>
<td>{$row['montant']} DA</td>

<td><span class='badge bg-$color'>{$row['statut']}</span></td>

<td>
<a href='?ref={$row['reference']}&statut=PAYE' class='btn btn-success btn-sm'>✔</a>
<a href='?ref={$row['reference']}&statut=EN_ATTENTE' class='btn btn-warning btn-sm'>⏳</a>
</td>
</tr>";
}
?>
</table>
</div>



<!-- Vol -->
<div class="card p-3 mb-4">
<h4>✈️ Vols</h4>
<a href="../html/vol.php" class="btn btn-info " style="color: white; font-size:16px;">Ajouter vol</a>

<table class="table table-hover">
<tr>
<th>Référence</th>
<th>Vol</th>
<th>Prix</th>
<th>Statut</th>
<th>Changer</th>
</tr>

<?php
$res = $cnx->query("SELECT * FROM vol");

while($row = $res->fetch_assoc()){
$color = $row['statut']=="Disponible" ? "success" : "warning";

echo "
<tr>
<td>{$row['reference']}</td>
<td>{$row['ville_depart']} → {$row['ville_dest']}</td>
<td><b>{$row['prix'] } DA</b></td>

<td><span class='badge bg-$color'>{$row['statut']}</span></td>

<td>
<a href='?ref={$row['reference']}&statut=PAYE' class='btn btn-success btn-sm'>✔</a>
<a href='?ref={$row['reference']}&statut=EN_ATTENTE' class='btn btn-warning btn-sm'>⏳</a>
</td>
</tr>";
}
?>
</table>
</div>


<!-- COMMENTAIRES -->
<div class="card p-3 mb-4">
<h4>💬 Commentaires clients</h4>

<table class="table table-hover">
<tr>
<th>ID</th>
<th>Email</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php while($row = mysqli_fetch_assoc($resCommentaires)) { ?>
<tr>

<td><?= $row['id_commentaire'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['messages'] ?></td>
<td><?= $row['date'] ?></td>

<td>
<form method="post">
<input type="hidden" name="id_comment" value="<?= $row['id_commentaire'] ?>">
<button name="delete_comment" class="btn btn-danger btn-sm">
🗑 Supprimer
</button>
</form>
</td>

</tr>
<?php } ?>

</table>
</div>

<!-- EMAIL -->
<div class="card p-3">
<h4>📧 Envoyer Email</h4>

<form method="post">
<input type="email" name="email" class="form-control mb-2" placeholder="Email client" required>

<textarea name="message" class="form-control mb-2" placeholder="Message..." required></textarea>

<button name="sendMail" class="btn btn-primary">Envoyer</button>
</form>

</div>

</div>

</body>
</html>