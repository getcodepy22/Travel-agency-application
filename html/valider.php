<?php


session_start();
?>




<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Réservation</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container my-5">

    <div class="card shadow-lg p-4">

        <h2 class="text-center mb-4">✈️ Réservation</h2>

        <form action="../php/trait.php" method="post">

            <div class="row g-3">
                <div class="col-md-6">
                    <?php if(isset($_SESSION['nom'])): ?>
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Saisir votre Nom"  value="<?php echo $_SESSION['nom'] ?>" require>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Saisir votre prénom " value="<?php echo$_SESSION['prenom'] ?>" required>
                </div>
                <?php else: ?>
                    <label class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" placeholder="Saisir votre Nom" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Prénom</label>
                    <input type="text" name="prenom" class="form-control" placeholder="Saisir votre prénom "  required>
                </div>
                
                <?php endif; ?>
                <!-- PASSPORT -->
                <div class="col-md-6">
                    <label class="form-label">N° Passport</label>
                    <input type="number" name="passport" class="form-control" placeholder="Saisir votre numéro">
                </div>

                <!-- EMAIL -->
                <div class="col-md-6">
                    <label class="form-label">Email *</label>
                    <input type="email" name="email" class="form-control" placeholder="Saisir votre email" required >
                </div>

                <!-- DEPART -->
                <div class="col-md-6">
                    <label class="form-label">Aéroport de départ</label>
                    <input list="depart" name="aadepart" class="form-control" placeholder="De">
                    <datalist id="depart">
                        <option value="Alger (ALG)">
                        <option value="Béjaïa (BJA)">
                        <option value="Oran (ORN)">
                        <option value="Adrar (AZR)">
                        <option value="Annaba (AAE)">
                    </datalist>
                </div>

                <!-- ARRIVEE -->
                <div class="col-md-6">
                    <label class="form-label">Aéroport d'arrivée</label>
                    <input list="arrive" id="aarrive" name="aarrive" class="form-control" placeholder="Vers">
                    <datalist id="arrive">
                        <option value="Paris (CDG)">
                        <option value="Tunis (TUN)">
                        <option value="Ankara (ESB)">
                        <option value="Rome (FCO)">
                        <option value="Casablanca (CMN)">
                    </datalist>
                </div>

                <!-- DATE -->
                <div class="col-md-6">
                    <label class="form-label">Date de départ</label>
                    <input type="date" name="dated" class="form-control">
                </div>

                <!-- HEURE -->
                <div class="col-md-6">
                    <label class="form-label">Heure de départ</label>
                    <input type="time" name="heurp" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">CLASSE</label>
                    <select id="type" type ="text" name="type" class="form-select">
                        <option value="">-- Sélectionner --</option>
                        <option value="economie">Economie</option>
                        <option value="business">Business</option>
                </select>
                </div>

            </div>

            <!-- BUTTONS -->
            <div class="mt-4 d-flex justify-content-between">

                <button type="reset" class="btn btn-secondary">Annuler</button>
                <button type="submit" class="btn btn-primary">Réserver</button>

            </div>

        </form>

    </div>

</div>

</body>


<script>
const params = new URLSearchParams(window.location.search);

const pays = params.get("pays");
const date = params.get("date");
const heure = params.get("heure");

if(pays){
    document.querySelector('[name="aarrive"]').value = pays;
}

if(date){
    // convertir en format yyyy-mm-dd
    const parts = date.split("/");
    const formatted = parts[2] + "-" + parts[1] + "-" + parts[0];
    document.querySelector('[name="dated"]').value = formatted;
}

if(heure){
    document.querySelector('[name="heurp"]').value = heure;
}
</script>
</html>