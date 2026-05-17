<?php

include "config.php";

session_start();



$email = $_POST['email'];
$pass = $_POST['pwd'];

// requête sécurisée (important)
$req = "SELECT * FROM client WHERE email='$email' AND mot_passe='$pass'";
$result = $conn->query($req);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    // SESSION
    $_SESSION['id'] = $row['id'];
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['prenom'] = $row['prenom'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['sexe'] = $row['sexe'];
    $_SESSION['numero'] = $row['n_tele'];
    $_SESSION['naissance'] = $row['date_naiss'];
    $_SESSION['ville'] = $row['ville'];

    // ADMIN
    if ($row['nom'] == "admin") {
        header("Location: admin.php");
    } else {
        // ✅ REDIRECTION PAGE ACCUEIL
        header("Location: ../index.php");
    }

    exit();

} else {
    // ❌ erreur login
    header("Location: ../html/connexion.php?error=1");
    exit();
}
?>