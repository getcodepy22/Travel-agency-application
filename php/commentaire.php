<?php
include "../php/config.php";

session_start();



/* 🔐 Vérification POST */
if(isset($_POST['email'], $_POST['text'])){

    $email = $_POST['email'];
    $msg = $_POST['text'];

    /* 🔐 sécurité minimale */
    $email = mysqli_real_escape_string($conn, $email);
    $msg = mysqli_real_escape_string($conn, $msg);

    $sql = "INSERT INTO commentaire (email, messages)
            VALUES ('$email', '$msg')";

    if(mysqli_query($conn, $sql)){
        header("Location: ../index.php?success=1");
        exit;
    } else {
      
        header("Location: ../index.php?error=1");
        exit;
    }

} else {
    header("Location: ../index.php?error=empty");
    exit;
}
?>