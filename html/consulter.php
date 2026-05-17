<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Consulter réservation</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
    color: white;
}

.card{
    border-radius: 20px;
}
</style>

</head>

<body>

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card shadow-lg p-4 bg-white text-dark">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="m-0">🔍 Consulter ma réservation</h3>
                    <a href="../index.php" class="btn btn-sm btn-outline-secondary">⬅</a>
                </div>

                <form action="../php/consulter.php" method="post">

                    <!-- EMAIL -->
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" placeholder="ex: client@mail.com" required>
                    </div>

                    <!-- REF -->
                    <div class="mb-3">
                        <label class="form-label">Référence de réservation</label>
                        <input type="text" name="reference" class="form-control" placeholder="Ex: VF-AB12CD34" required>
                    </div>

                    <!-- BUTTONS -->
                    <div class="d-flex justify-content-between mt-4">
                        <button type="reset" class="btn btn-secondary">Annuler</button>
                        <button type="submit" class="btn btn-primary">Continuer</button>
                    </div>

                </form>

            </div>

        </div>

    </div>

</div>

</body>
</html>