<?php
require'connexion.php';

$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$DATE_NAISSANCE=$_POST['date_naissance'];
$GENRE=$_POST['genre'];
$DATE_DENTREE=$_POST['date_dentree'];
$PERSONNE_A_PREVENIR=$_POST['personne_a_prevenir'];

$req="INSERT INTO etudiants (nom,prenom,date_naissance,genre,date_dentree,personne_a_prevenir) values ('$NOM','$PRENOM','$DATE_NAISSANCE','$GENRE','$DATE_DENTREE','$PERSONNE_A_PREVENIR')";
$res=mysqli_query($conn,$req);

if(isset($res)){
    echo"Reussi!";
}
else{
    echo"error"; 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    
<div style="text-align:center" bg-dark>
    <a href="tableau.php"><button type="button">Afficher la liste.</button></a>
    <a href="inscription.php"><button type="button">Retour.</button></a>
    </div>
</body>
</html>