<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Ajout de vol</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h3 class="text-center mb-4">✈️ Ajouter un vol</h3>

<!-- MESSAGE -->
<script>
const params = new URLSearchParams(window.location.search);

if(params.get("success")){
    alert("✅ Vol ajouté avec succès");
}

if(params.get("error")){
    alert("❌ Erreur lors de l'ajout");
}
</script>

<form method="post" action="../php/ajout.php">

<div class="row">

<div class="col-md-6">
<label>Départ</label>
<input list="depart" name="aadepart" class="form-control" required>
<datalist id="depart">
<option value="Alger (ALG)">
<option value="Oran (ORN)">
<option value="Annaba (AAE)">
</datalist>
</div>

<div class="col-md-6">
<label>Arrivée</label>
<input list="arrive" name="aarrive" class="form-control" required>
<datalist id="arrive">
<option value="Paris (CDG)">
<option value="Tunis (TUN)">
<option value="Rome (FCO)">
</datalist>
</div>

<div class="col-md-6 mt-3">
<label>Date</label>
<input type="date" name="dated" class="form-control" required>
</div>

<div class="col-md-6 mt-3">
<label>Prix</label>
<input type="number" name="prix" class="form-control" required>
</div>

<div class="col-md-6 mt-3">
<label>Heure</label>
<input type="time" name="heurp" class="form-control" required>
</div>
<div class="col-md-6 mt-3">
<label>Statut</label>
<select class="form-select" name="statue" required>
    <option></option>
    <option>Disponible</option>
    <option>Indisponible</option>
</select>

</div>

</div>

<div class="mt-4 text-center">
<button class="btn btn-primary">Ajouter</button>
<a href="../php/admin.php" class="btn btn-secondary">Retour</a>
</div>

</form>

</div>
</div>

</body>
</html>