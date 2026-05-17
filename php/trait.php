<?php
include "config.php";

// récupérer données
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

$email = $_POST['email'];
$depart = $_POST['aadepart'];
$arrive = $_POST['aarrive'];
$date = $_POST['dated'];
$heure = $_POST['heurp'];
$passport = $_POST['passport'];
$class = $_POST['type'];

// générer référence unique
$reference = "VF-" . strtoupper(substr(md5(time()),0,8));

// insertion
$sql = "INSERT INTO reservations 
(reference, nom,prenom,email, depart, arrive, date_depart, heure_depart,Num_passport,class)
VALUES ('$reference','$nom','$prenom','$email','$depart','$arrive','$date','$heure','$passport','$class')";

if ($conn->query($sql) === TRUE) {

    header("Location: ../html/paiement.php?ref=$reference&aadepart=$depart&aarrive=$arrive&dated=$date&heurp=$heure&nom=$nom&prenom=$prenom");

} else {
    echo "Erreur: " . $conn->error;
}
?>