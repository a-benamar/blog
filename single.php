<?php  
	include_once("header.php");

	// var_dump($_GET);
// stockage de l'id dans la variable ID
		if ($_GET) {
			// fonction qui supprime les balises PHP et HTML( pas de vide,pas de html ,etc)
			$id = strip_tags($_GET["id"]);
		}


// Connexion à la base de données.
$connexion = mysqli_connect(SERVER, USER, PASS, BDD);


//Définr la requete pour recuper les données d'un seul article.

$requete = "SELECT * FROM " . TABLE ." WHERE id = '$id' LIMIT 1"; // limit 1 = seul resultat

// Récupère les resultats.
$resultats = mysqli_query($connexion, $requete);

//Ferme la connexion à la base de données.
mysqli_close($connexion);

// var_dump($resultats);



?>

<div class="container mt-4 -1">

		<div class="row">
			
			<div class="col">	

			<?php if( $resultats != false ): ?>
				<?php while( $article = mysqli_fetch_assoc( $resultats) ): ?>
				
						<h1 class="mb-4 p-1"><?= $article["titre"];?></h1>

						<div class="mb-1 text-muted p-1">
							 Publié le <?= date("d/m/Y à H:i", strtotime($article["date"]));?>
						</div>

                        <hr>
						<p class="card-text mb-auto p-1"><?= $article["contenu"]; ?></p>

						<?php endwhile; ?>

			<?php else: ?>

			<p>Désolé, mais il n'y a aucun article dans la base de données.</p>

			<?php endif; ?>
			
	        

    	</div>
	
	</div>

</div>	
	
	
	


<?php  include_once "footer.php";  ?>