<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/monitoring and management.png" type="images/monitoring and management.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Inscrire</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="enregistrement.php" class="form">
            <div class="logo" style="text-align:center;"><img src="images/monitoring and management.png" alt=""></div>
            <h1 class="h1">Inscrire un nouvel élève</h1>

            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required class="form-control">
            </div>

            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" required class="form-control">
            </div>

            <div class="form-group">
                <label for="date_naissance">Date de naissance :</label>
                <input type="date" id="date_naissance" name="date_naissance" required class="form-control">
            </div>

            <div class="form-group">
                <label for="genre">Genre :</label>
                <select name="genre" id="genre" class="form-control">
                    <option value="femme">Femme</option>
                    <option value="homme">Homme</option>
                </select>
            </div>

            <div class="form-group">
                <label for="date_dentree">Date d'adhésion :</label>
                <input type="date" id="date_dentree" name="date_dentree" required class="form-control">
            </div>

            <div class="form-group">
                <label for="personne_a_prevenir">Personne à prévenir :</label>
                <input type="text" id="personne_a_prevenir" name="personne_a_prevenir" required class="form-control">
            </div>

            <div class="form-group">
                <input type="submit" value="Enregistrer" class="btn btn-primary">
                <a href="index1.php" class="btn btn-secondary">Retour</a>
            </div>
        </form>
    </div>

    <footer class="bg-dark mt-3 foo">
        <p class="text-white text-center pt-3 fooo">&copy; 2023 Maman Digitale. Tous droits réservés.</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>


