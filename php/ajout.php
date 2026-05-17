<?php
$cnx = new mysqli("localhost", "root", "", "gestion_agence");

if ($cnx->connect_error) {
    die("Erreur connexion : " . $cnx->connect_error);
}

// sécurisation
$depart = htmlspecialchars($_POST['aadepart']);
$arrive = htmlspecialchars($_POST['aarrive']);
$date   = $_POST['dated'];
$heure  = $_POST['heurp'];
$statut  = $_POST['statue'];
$prix  = $_POST['prix'];

$reference = "VFL-" . strtoupper(substr(md5(time()),0,8));
// vérification
if(empty($depart) || empty($arrive) || empty($date) || empty($heure)){
    header("Location: ../html/vol.php?error=champs_vides");
    exit();
}

// requête sécurisée
$stmt = $cnx->prepare("INSERT INTO vol (reference,ville_dest, ville_depart, date_depart, heure_depart,statut,prix) VALUES (?, ?, ?, ?,?,?,?)");
$stmt->bind_param("sssssss", $reference,$arrive, $depart, $date, $heure,$statut,$prix);

if($stmt->execute()){
    header("Location: ../html/vol.php?success=1");
    exit();
}else{
    header("Location: ../html/vol.php?error=sql");
    exit();
}
?>