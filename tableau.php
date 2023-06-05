<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
  <div class="form">
    <div class="container">
        <h1 style="text-align: center;">Liste des étudiants</h1>
        
        <form method="GET" action="tableau.php" class="mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher un apprenant" name="search">
                <button class="btn btn-primary" type="submit">Rechercher</button>
            </div>
        </form>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Date de naissance</th>
                    <th>Genre</th>
                    <th>Date d'adhésion</th>
                    <th>Personne à prévenir</th>
                    <th colspan="3">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
            require 'connexion.php';

            $search = isset($_GET['search']) ? $_GET['search'] : '';

            $requete = "SELECT * FROM etudiants WHERE nom LIKE :search OR prenom LIKE :search ORDER BY nom";
            $stmt = $conn->prepare($requete);
            $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $id = $row['id'];
                // Afficher les données de l'apprenant ici
                echo "<tr>";
                echo "<td>" . $row["nom"] . "</td>";
                echo "<td>" . $row["prenom"] . "</td>";
                echo "<td>" . $row["date_naissance"] . "</td>";
                echo "<td>" . $row["genre"] . "</td>";
                echo "<td>" . $row["date_dentree"] . "</td>";
                echo "<td>" . $row["personne_a_prevenir"] . "</td>";
                echo "<td><a href='details.php?id=" . $row['id'] . "' class='btn btn-primary' '>Détails</a></td>"; // Lien pour les détails
                echo "<td><a href='modifier.php?id=" . $row['id'] . "' class='btn btn-warning' '>Modifier</a></td>"; // Lien pour la modification
                echo "<td><a href='supprimer.php?id=" . $row["id"] . "' class='btn btn-danger' onclick='return confirm(\"Voulez-vous vraiment supprimer cet apprenant ?\")'>Supprimer</a></td>"; // Lien pour la suppression
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
        
        <div class="text-center">
            <a href="tableau.php" class="btn btn-primary">Afficher la liste complète</a>
            <a href="index.php" class="btn btn-secondary">Retour à la page d'accueil</a>
        </div>
    </div>
  </div>
  
  <footer class="bg-dark mt-3 foo">
    <p class="text-white text-center pt-3 fooo">&copy; 2023 Maman Digitale. Tous droits réservés.</p>
  </footer>
</body>
</html>
