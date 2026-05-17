<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Paiement</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    color: white;
}
.card{
    border-radius: 20px;
}
.input-group-text{
    background: #0d6efd;
    color: white;
}
</style>

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card shadow-lg p-4 bg-white text-dark">

                <h3 class="text-center mb-3">💳 Paiement sécurisé</h3>

                <!-- RECAP -->
                <div id="recap" class="alert alert-primary small"></div>

                <form action="../php/paiement.php" method="post">

                    <!-- HIDDEN -->
                    <input type="hidden" name="reference" id="h_ref">
                    <input type="hidden" name="aadepart" id="h_depart">
                    <input type="hidden" name="aarrive" id="h_arrive">
                    <input type="hidden" name="dated" id="h_date">
                    <input type="hidden" name="heurp" id="h_heure">
                    <input type="hidden" name="nom" id="h_nom">
                    <input type="hidden" name="prenom" id="h_prenom">

                    <!-- NOM -->
                    <div class="mb-3">
                        <label class="form-label">Nom sur la carte</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>

                    <!-- CARTE -->
                    <div class="mb-3">
                        <label class="form-label">Numéro de carte</label>
                        <input type="text" name="num" class="form-control" placeholder="•••• •••• •••• ••••" required>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Expiration</label>
                            <input type="month" name="date" class="form-control" required>
                        </div>

                        <div class="col-6">
                            <label class="form-label">CVV</label>
                            <input type="number" name="CVV" class="form-control" required>
                        </div>
                    </div>

                    <button class="btn btn-success w-100 mt-4">
                        ✔ Payer maintenant
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<script>
const params = new URLSearchParams(window.location.search);

const depart = params.get("aadepart") || "Non défini";
const arrive = params.get("aarrive") || "Non défini";
const date = params.get("dated") || "Non défini";
const heure = params.get("heurp") || "Non défini";
const ref = params.get("ref") || "----";

// affichage
document.getElementById("recap").innerHTML = `
✈️ <b>${depart}</b> → <b>${arrive}</b><br>
📅 ${date} | ⏰ ${heure}<br>
🎫 Réf: <b>${ref}</b>
`;

const nom = params.get("nom");
const prenom = params.get("prenom");

document.getElementById("h_nom").value = nom;
document.getElementById("h_prenom").value = prenom;
// remplir hidden
document.getElementById("h_depart").value = depart;
document.getElementById("h_arrive").value = arrive;
document.getElementById("h_date").value = date;
document.getElementById("h_heure").value = heure;
document.getElementById("h_ref").value = ref;

// debug
console.log({depart, arrive, date, heure, ref});
</script>

</body>
</html>