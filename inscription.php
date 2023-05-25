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
    
        <form method="POST" action="enregistrement.php">
        <div><h1> Inscrire un nouvel élève</h1></div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
      
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
      
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance" required><br><br>
        
        <label for="genre" class>Genre :</label>
        <select name="genre" id="genre" class="input">
        <option value="femme">Femme</option>
        <option value="homme">Homme</option></select>


        <label for="date_dentree">Date d'adhésion :</label>
        <input type="date" id="date_dentree" name="date_dentree" required><br><br>

        <label for="personne_a_prevenir">Personne à prévenir :</label>
        <input type="text" id="personne_a_prevenir" name="personne_a_prevenir" required><br><br>

        <input type="submit" value="Enregistrer">
        <a href="index.php"><button type="button" class="bg-dark">Retour.</button></a>
      </form>
      <footer class="bg-dark mt-3 foo">
  <p class="text-white text-center pt-3 fooo">&copy; 2023 Maman Digitale. Tous droits réservés.</p>
</footer>
</body>
</html>

