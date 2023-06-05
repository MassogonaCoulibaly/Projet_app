<?php
require 'connexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Effectuez la requête SQL pour récupérer les détails de l'étudiant en utilisant l'ID
    $query = "SELECT * FROM etudiants WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    // Vérifiez si des résultats ont été obtenus
    if ($stmt->rowCount() > 0) {
        // Parcourez les résultats et affichez les détails de l'étudiant
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Affichez les détails de l'étudiant dans une fenêtre modale
        echo "<script>
                function showModal() {
                    var modal = document.getElementById('myModal');
                    modal.style.display = 'block';
                }

                function closeModal() {
                    var modal = document.getElementById('myModal');
                    modal.style.display = 'none';
                }

                window.onload = showModal;
            </script>";

        echo "<div id='myModal' class='modal'>
                <div class='modal-content'>
                    <span class='close' onclick='closeModal()'>&times;</span>
                    <h1>Détails de l'étudiant</h1>
                    <p>ID: " . $row['id'] . "</p>
                    <p>Nom: " . $row['nom'] . "</p>
                    <p>Prénom: " . $row['prenom'] . "</p>
                    <p>Date de naissance: " . $row['date_naissance'] . "</p>
                    <p>Genre: " . $row['genre'] . "</p>
                    <p>Date d'adhésion: " . $row['date_dentree'] . "</p>
                    <p>Personne à prévenir: " . $row['personne_a_prevenir'] . "</p>
                    <button onclick='closeModal()' class='btn btn-primary'>Retour à la liste</button>
                </div>
            </div>";
    } else {
        echo "Aucun étudiant trouvé avec cet ID.";
    }
} else {
    echo "ID d'étudiant non spécifié.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Détails de l'étudiant</title>
    <style>
        .modal {
            display: block;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
    <a href="tableau.php" class="btn btn-primary">Afficher la liste complète</a>
</head>
<body>
</body>
</html>


