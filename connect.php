<?php
// Connexion à la base de données.
$connexion = mysqli_connect(SERVER, USER, PASS, BDD);

//Définr la requete pour recuper les données.
$requete = "SELECT * FROM ". TABLE ." ORDER BY date DESC";

// Récupère les resultats.
//$resultats = mysqli_query($connexion, $requete);

//Ferme la connexion à la base de données.
mysqli_close($connexion);

var_dump($resultats);





 ?>