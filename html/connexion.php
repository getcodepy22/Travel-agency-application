<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Connexion</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container my-5">

    <div class="card shadow-lg p-4 mx-auto" style="max-width:500px;">

        <h2 class="text-center mb-4">Connexion</h2>

        <p class="text-center text-muted">
            Accédez à votre compte Voyage Facile
        </p>

        <form action="../php/connexion.php" method="post">

            <div class="mb-3">
                <label class="form-label">Adresse E-mail</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Mot de passe</label>
                <input type="password" name="pwd" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Se connecter</button>

            <div class="text-center mt-3">
                <a href="inscription.html">Créer un compte</a><br>
                <a href="#">Mot de passe oublié ?</a>
            </div>

        </form>

    </div>

</div>

</body>
</html>