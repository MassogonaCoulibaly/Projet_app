<?php
// Connexion à la base de données
$servername = 'localhost';
$username = 'root';
$dbname = 'scolarite';

$connexion = new mysqli($servername, $username, $dbname );

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Récupérer la liste des étudiants
$requete = $connexion->query("SELECT * FROM etudiants");
$etudiants = $requete->fetch_all(MYSQLI_ASSOC);

// Afficher la liste des étudiants
foreach ($etudiants as $etudiant) {
    echo "Nom: " . $etudiant['nom'] . "<br>";
    echo "Prénom: " . $etudiant['prenom'] . "<br>";
    echo "Date de naissance: " . $etudiant['date_naissance'] . "<br>";
    echo "Genre: " . $etudiant['genre'] . "<br>";
    echo "Date d'entrée à l'UFR SDS: " . $etudiant['date_entree'] . "<br>";
    echo "Contact en cas de besoin: " . $etudiant['contact_personne'] . "<br>";
    echo "<br>";
}

// Fermer la connexion à la base de données
$connexion->close();
?>


