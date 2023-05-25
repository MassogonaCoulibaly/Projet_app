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
  <img src="images/Doc.png" width=700px height=100px text-align=center>
    <div class="container">
    <h1 style="text-align: center;">Liste des étudiants</h1>
        <table class="table table-striped">
            <tr>
              <th>Nom</th>
              <th>Prénom</th>
              <th>Date de naissance</th>
              <th>Genre</th>
              <th>Date d'adhésion</th>
              <th>Personne à prévenir</th>
            </tr>


            <?php


          require'connexion.php';
          $requete = "SELECT * FROM etudiants";
          $query = mysqli_query($conn, $requete);


          while($row = mysqli_fetch_assoc($query)){
            echo "<tr>";
                  echo "<td>" . $row["nom"] . "</td>";
                  echo "<td>" . $row["prenom"] . "</td>";
                  echo "<td>" . $row["date_naissance"] . "</td>";
                  echo "<td>" . $row["genre"] . "</td>";
                  echo "<td>" . $row["date_dentree"] . "</td>";
                  echo "<td>" . $row["personne_a_prevenir"] . "</td>";
            echo "</tr>";
          }

            ?>
        </table>
      </div>
      </div>
      <footer class="bg-dark mt-3 foo">
  <p class="text-white text-center pt-3 fooo">&copy; 2023 Maman Digitale. Tous droits réservés.</p>
</footer>
</body>
</html>