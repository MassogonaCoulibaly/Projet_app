<?php
    require 'connexion.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Vérifier si l'étudiant existe
        $requete_check = "SELECT * FROM etudiants WHERE id = :id";
$stmt_check = $conn->prepare($requete_check);
$stmt_check->bindParam(':id', $id);
$stmt_check->execute();
$etudiant = $stmt_check->fetch(PDO::FETCH_ASSOC);

if (!$etudiant) {
    echo "Étudiant non trouvé.";
    exit;
}

        // Effectuer la suppression de l'étudiant
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        
            // Préparer la requête de suppression avec un paramètre lié
            $requete_supprimer = "DELETE FROM etudiants WHERE id = :id";
            $stmt_supprimer = $conn->prepare($requete_supprimer);
            $stmt_supprimer->bindParam(':id', $id);
        
            // Exécuter la requête de suppression
            if ($stmt_supprimer->execute()) {
                // Redirection vers la page principale après la suppression
                header('Location: index.php');
                exit;
            } else {
                echo "Une erreur s'est produite lors de la suppression.";
            }
        } else {
            echo "ID de l'étudiant non spécifié.";
            exit;
        } }
        ?>       