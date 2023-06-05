<?php
// Définir les identifiants de l'administrateur
$adminCredentials = [
    'email' => 'admin@example.com',
    'password' => 'password'
];

// Vérifier si le formulaire est soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérifier les identifiants de l'administrateur
    if ($email === $adminCredentials['email'] && $password === $adminCredentials['password']) {
        // Authentification réussie, rediriger vers la page d'accueil de l'administrateur
        header('Location: admin.php');
        exit;
    } else {
        // Authentification échouée, afficher un message d'erreur
        $errorMessage = "Identifiants invalides. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/monitoring and management.png" type="images/monitoring and management.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title>Authentification</title>
</head>
<body>
    <form method="POST" action="login.php" class="form">
        <div class="logo" style="text-align:center; margin-top: -10px;"><img src="images/monitoring and management (1).png" alt=""></div>
        <h1 style="text-align: center;margin-top: -20px;" class="h1">Intelli</h1>
        <h3 style="text-align: center;">Authentification de l'Administrateur</h3> <br><br>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>
    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-secondary">Retour à l'accueil</a>
    </div>
    <footer class="bg-dark mt-3 foo">
        <p class="text-white text-center pt-3 fooo">&copy; 2023 Maman Digitale. Tous droits réservés.</p>
    </footer>
</body>
</html>

