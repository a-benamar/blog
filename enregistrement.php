<?php 

/* fichier enregistrement.php
==
ce fichier sert à traiter les données au formulaires 
ainsi que l'enregistrement des données dans la BDD
*/
session_start();
// var_dump($_POST);
// die;

if(isset($_POST["titre"]) && isset($_POST["contenu"])){

    // verifier que la methode utulisé est bien POST
    //verifier que les champs ne sont pas vides

    //filtrer les attaques XSS
    $titre = strip_tags( $_POST["titre"] );
    $contenu = strip_tags( $_POST["contenu" ], "<a><b><p><i><em><strong><br>" ); // balise à conserver.


    //filtrer les injections SQL
    if ( get_magic_quotes_gpc() == false ){
        
        $titre = addslashes( $titre );
        $contenu = addslashes( $contenu );
    }

    //Integration du fichier config qui contient mes constantes de connexion à la BDD
    include("config.php");

    //Creation date d'enregistrement
    $date = date("Y-m-d H:i:s");

    //Connection à la BDD
    $connexion = mysqli_connect(SERVER, USER, PASS, BDD);

    //Stockage de la requete d'enregistrement
    $requete = "INSERT INTO " . TABLE . " (titre, contenu, date) VALUES ('$titre', '$contenu','$date')";

    // Exécution de la requete SQL  .  
    $enregistrement = mysqli_query($connexion, $requete);
    // var_dump($enregistrement);

    if ( $enregistrement ){

             // die("Enregistrement effectué avec succès.");

             $_SESSION["message"] = ["Enregistrement efféctué avec succès."];
             header("Location: index.php");
             exit;

    }else{
            // Sinon message d'erreur.
        // die("Erreur dans l'execution de la requéte.");

        $_SESSION["message"] = ["Echec de l'enregistrement des données."];
        header("Location: new.php");
        exit;

    }


}else{
        die( "Erreur de transmission des données depuis le formulaire." );
}






?>