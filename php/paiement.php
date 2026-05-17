<?php
include "config.php";

// récupérer données
$reference = $_POST['reference'];
$depart = $_POST['aadepart'];
$arrive = $_POST['aarrive'];
$date = $_POST['dated'];
$heure = $_POST['heurp'];

// simulation montant
$montant = 50000; // DA

// 🔎 récupérer passager
$sql1 = "SELECT nom, prenom FROM reservations WHERE reference='$reference'";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nom = $row['nom'];
    $prenom = $row['prenom'];
} else {
    $nom = "Client";
    $prenom = "";
}

// 💳 enregistrer paiement
$sql = "INSERT INTO paiements (reference, montant, statut)
VALUES ('$reference', '$montant', 'PAYE')";

if ($conn->query($sql) === TRUE) {

    // 🚀 envoyer vers ticket AVEC NOM
    header("Location: ../html/ticket.php?aadepart=$depart&aarrive=$arrive&dated=$date&heurp=$heure&ref=$reference&nom=$nom&prenom=$prenom");

} else {
    echo "Erreur paiement: " . $conn->error;
}
?>