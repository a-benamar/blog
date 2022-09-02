<?php
// information de connexion à la BDD

// nom de la base de données.    
    define("BDD", "blog");

// Nom se serveur.
    define("SERVER", "localhost");

// Nom d'utilisateur (login).
    define("USER", "root");

// Mot de passe.
    define("PASS", "");

// Nom de la table stockant les articles.
    define("TABLE", "articles"); 

   
		

    // // la fonction qui deduire le texte de contenu à 20 mots dans les cartes.

    // function tronquer($contenu){
				
	// 	$texte_tronque = "";			
    //     $chaine_explode = explode(" ", $contenu);
        

    //     for($i = 0; $i < 20; $i++){
    //     $texte_tronque .= $chaine_explode[$i] . " ";
    //     }

    //     return $texte_tronque . "(...)";

	// }

    //ou

	// function tronquer($texte, $nbr_mots = 20){
				
					
    //     $texte_tronque = explode(" ", $texte);
    //     $txt = "";

    //     for($i = 0; $i < $nbr_mots; $i++){
    //     $txt .= $texte_tronque[$i] . " ";
    //     }

    //     return $txt . "...";

	// }   ou



    
    
?>