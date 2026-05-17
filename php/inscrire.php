<?php
session_start();

// connexion DB
include "config.php";

if ($conn->connect_error) {
    die("Erreur connexion: " . $conn->connect_error);
}

// récupérer données
$langue = $_POST['lang'] ?? '';
$civil = $_POST['cvl'] ?? '';
$nom = $_POST['nom'] ?? '';
$prenom = $_POST['prenom'] ?? '';
$dateN = $_POST['dateN'] ?? '';
$genre = $_POST['sexe'] ?? '';
$sf = $_POST['cvl2'] ?? '';
$nationalite = $_POST['nationalite'] ?? '';
$email = $_POST['email'] ?? '';
$tele = $_POST['tele'] ?? '';
$indic = $_POST['indic'] ?? '';
$num = $_POST['numero'] ?? '';
$addr = $_POST['adress'] ?? '';
$ville = $_POST['ville'] ?? '';
$mp = $_POST['motp'] ?? '';
$cmp = $_POST['confirm'] ?? '';

// ✅ VALIDATION
if (empty($nom) || empty($prenom) || empty($email) || empty($mp)) {
    die("Champs obligatoires manquants");
}

// ✅ vérifier mot de passe
if ($mp !== $cmp) {
    die("Les mots de passe ne correspondent pas");
}

// ✅ hash mot de passe
$hashedPassword = password_hash($mp, PASSWORD_DEFAULT);

// ✅ requête sécurisée
$stmt = $conn->prepare("
INSERT INTO client 
(nom, prenom, email, sexe, n_tele, date_naiss, adress, mot_passe, ville, indice) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssssssssss",
    $nom,
    $prenom,
    $email,
    $genre,
    $num,
    $dateN,
    $addr,
    $hashedPassword,
    $ville,
    $indic
);

// exécution
if ($stmt->execute()) {

    $_SESSION["nom"] = $nom;
    $_SESSION["prenom"] = $prenom;

    header("Location: ../html/connexion.php?success=1");
    exit();

} else {
    echo "Erreur: " . $stmt->error;
}

$conn->close();
?>