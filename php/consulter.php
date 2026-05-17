<?php
include "config.php";

$email = $_POST['email'];
$ref = $_POST['reference'];

$sql = "SELECT * FROM reservations WHERE email='$email' AND reference='$ref'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Résultat réservation</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
}

.ticket{
    max-width: 600px;
    margin: auto;
    background: white;
    border-radius: 20px;
    padding: 25px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

.route{
    font-size: 24px;
    font-weight: bold;
}

.label{
    color: gray;
    font-size: 12px;
}

.value{
    font-weight: bold;
}
</style>

</head>

<body>

<div class="container py-5">

<?php if ($result->num_rows > 0): 
    $row = $result->fetch_assoc();
?>

    <div class="ticket text-center">

        <h4 class="text-primary">✈️ Voyage Facile</h4>
        <p class="text-muted">Billet trouvé ✔</p>

        <div class="route my-3">
            <?php echo $row['depart']; ?> → <?php echo $row['arrive']; ?>
        </div>

        <div class="row text-start mt-4">

            <div class="col-6">
                <div class="label">DATE</div>
                <div class="value"><?php echo $row['date_depart']; ?></div>
            </div>

            <div class="col-6">
                <div class="label">HEURE</div>
                <div class="value"><?php echo $row['heure_depart']; ?></div>
            </div>

            <div class="col-6 mt-3">
                <div class="label">EMAIL</div>
                <div class="value"><?php echo $row['email']; ?></div>
            </div>

            <div class="col-6 mt-3">
                <div class="label">RÉFÉRENCE</div>
                <div class="value text-success"><?php echo $row['reference']; ?></div>
            </div>

        </div>

        <a href="../index.php" class="btn btn-primary mt-4">Accueil</a>

    </div>

<?php else: ?>

    <div class="alert alert-danger text-center">
        ❌ Aucune réservation trouvée
    </div>

<?php endif; ?>

</div>

</body>
</html>