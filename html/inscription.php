<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Inscription</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container my-5">

    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4">INSCRIPTION</h2>

        <p class="text-center text-muted">
            Inscrivez-vous gratuitement et profitez des avantages de Voyage Facile
        </p>

        <form action="../php/inscrire.php" method="POST">

            <!-- INFORMATIONS -->
            <h4 class="mt-4 mb-3 text-primary">Informations personnelles</h4>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Langue *</label>
                    <select class="form-select" name="lang" required>
                        <option></option>
                        <option>Français</option>
                        <option>Anglais</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Civilité *</label>
                    <select class="form-select" name="cvl" required>
                        <option></option>
                        <option>Madame</option>
                        <option>Mademoiselle</option>
                        <option>Monsieur</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Nom *</label>
                    <input type="text" class="form-control" name="nom" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Prénom *</label>
                    <input type="text" class="form-control" name="prenom" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Date de naissance *</label>
                    <input type="date" class="form-control" name="dateN" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Sexe *</label>
                    <select class="form-select" name="sexe" required>
                        <option></option>
                        <option>Femme</option>
                        <option>Homme</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Situation familiale</label>
                    <select class="form-select" name="cvl2">
                        <option></option>
                        <option>Marié</option>
                        <option>Célibataire</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Nationalité *</label>
                    <select class="form-select" name="nationalite" required>
                        <option></option>
                        <option>Algérienne</option>
                        <option>Tunisienne</option>
                        <option>Autre</option>
                    </select>
                </div>

            </div>

            <!-- CONTACT -->
            <h4 class="mt-5 mb-3 text-primary">Coordonnées</h4>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Email *</label>
                    <input type="email" class="form-control" name="email" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Confirmer Email *</label>
                    <input type="email" class="form-control" required>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Indicatif *</label>
                    <select class="form-select" name="indic">
                        <option>+213</option>
                        <option>+33</option>
                        <option>+216</option>
                    </select>
                </div>

                <div class="col-md-8">
                    <label class="form-label">Téléphone *</label>
                    <input type="tel" class="form-control" name="numero" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Ville *</label>
                    <select class="form-select" name="ville">
                        <option>Alger</option>
                        <option>Tizi Ouzou</option>
                        <option>Oran</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Adresse *</label>
                    <input type="text" class="form-control" name="adress" required>
                </div>

            </div>

            <!-- COMPTE -->
            <h4 class="mt-5 mb-3 text-primary">Accès au compte</h4>

            <div class="row g-3">

                <div class="col-md-6">
                    <label class="form-label">Mot de passe *</label>
                    <input type="password" class="form-control" name="motp" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Confirmer mot de passe *</label>
                    <input type="password" class="form-control" required>
                </div>

            </div>

            <!-- CHECKBOX -->
            <div class="mt-4">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Recevoir SMS</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Recevoir Email</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" required>
                    <label class="form-check-label">
                        J'accepte les conditions *
                    </label>
                </div>

            </div>

            <!-- BUTTONS -->
            <div class="mt-4 d-flex justify-content-between">

                <a href="index.html" class="btn btn-secondary">Annuler</a>
                <button type="submit" class="btn btn-primary">S'inscrire</button>

            </div>

        </form>
    </div>

</div>

</body>
</html>