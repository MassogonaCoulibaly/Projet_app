<?php
$host = 'localhost'; // Adresse du serveur de base de données
$dbname = 'scolarite'; // Nom de la base de données
$user = 'root'; // Nom d'utilisateur pour la base de données
$password = ''; // Mot de passe pour la base de données

try {
    // Création de l'objet PDO pour établir la connexion
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    
    // Configuration des attributs PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérifier si l'ID de l'étudiant est passé en tant que paramètre
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Récupérer les informations de l'étudiant à modifier
        $query = "SELECT * FROM etudiants WHERE id = :id";
        $result = $conn->prepare($query);
        $result->bindParam(':id', $id);
        $result->execute();

        if ($result->rowCount() > 0) {
            $row = $result->fetch(PDO::FETCH_ASSOC);

            // Afficher le formulaire de modification avec les valeurs pré-remplies
            echo "<div class='modal'>";
            echo "<div class='modal-content'>";
            echo "<span class='close'>&times;</span>";
            echo "<form action='modifier.php' method='POST'>";
            echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
            echo "<div class='form-group'>
                    <label for='nom'>Nom:</label>
                    <input type='text' name='nom' value='" . $row['nom'] . "' class='form-control'>
                </div>";
            echo "<div class='form-group'>
                    <label for='prenom'>Prénom:</label>
                    <input type='text' name='prenom' value='" . $row['prenom'] . "' class='form-control'>
                </div>";
            echo "<div class='form-group'>
                    <label for='genre'>Genre:</label>
                    <input type='text' name='genre' value='" . $row['genre'] . "' class='form-control'>
                </div>";
            echo "<div class='form-group'>
                    <label for='date_naissance'>Date de naissance:</label>
                    <input type='date' name='date_naissance' value='" . $row['date_naissance'] . "' class='form-control'>
                </div>";
            echo "<div class='form-group'>
                    <label for='date_dentree'>Date d'entrée:</label>
                    <input type='date' name='date_dentree' value='" . $row['date_dentree'] . "' class='form-control'>
                </div>";
            echo "<div class='form-group'>
                    <label for='personne_a_prevenir'>Personne à prévenir:</label>
                    <input type='text' name='personne_a_prevenir' value='" . $row['personne_a_prevenir'] . "' class='form-control'>
                </div>";
            // Ajoutez ici les autres champs que vous souhaitez modifier
            echo "<button type='submit' class='btn btn-primary'>Modifier</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }
    }  
    // Vérifier si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer les données du formulaire
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $genre = $_POST['genre'];
        $date_naissance = $_POST['date_naissance'];
        $date_dentree = $_POST['date_dentree'];
        $personne_a_prevenir = $_POST['personne_a_prevenir'];

        // Préparer la requête SQL pour mettre à jour les informations de l'étudiant
        $query = "UPDATE etudiants SET nom = :nom, prenom = :prenom, genre = :genre, date_naissance = :date_naissance, date_dentree = :date_dentree, personne_a_prevenir = :personne_a_prevenir WHERE id = :id";

        $result = $conn->prepare($query);
        $result->bindParam(':nom', $nom);
        $result->bindParam(':prenom', $prenom);
        $result->bindParam(':genre', $genre);
        $result->bindParam(':date_naissance', $date_naissance);
        $result->bindParam(':date_dentree', $date_dentree);
        $result->bindParam(':personne_a_prevenir', $personne_a_prevenir);
        $result->bindParam(':id', $id);

        // Exécuter la requête SQL
        $result->execute();

        // Rediriger vers la page principale après la mise à jour
        header("Location: tableau.php");
        exit();
    }

    $conn = null;
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
