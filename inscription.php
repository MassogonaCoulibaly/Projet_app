<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/monitoring and management.png" type="images/monitoring and management.png" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Inscrire</title>
    
</head>
<body>
    
        <form method="POST" action="enregistrement.php">
        <div><img src="images/monitoring and management.png" alt=""></div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
      
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
      
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>
        
        <label for="genre">Genre :</label>
        <input type="text" id="genre" name="genre" required><br><br>

        <label for="date_dentree">Date d'adhésion :</label>
        <input type="date" id="date_dentree" name="date_dentree" required><br><br>

        <label for="personne_a_prevenir">Personne à prévenir :</label>
        <input type="text" id="personne_a_prevenir" name="personne_a_prevenir" required><br><br>

        <input type="submit" value="Enregistrer">
        <hr style="text-align: center;">
        <p style="text-aligne: center;">&copy; 2023 Maman Digitale. Tous droits réservés.</p>
    </footer>
      </form>
</body>
</html>

