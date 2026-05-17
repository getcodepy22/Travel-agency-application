<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "gestion_agence";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erreur connexion: " . $conn->connect_error);
}
?>