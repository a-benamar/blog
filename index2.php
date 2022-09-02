<?php
session_start();
include_once("header.php");


// Connexion à la base de données.
$connexion = mysqli_connect(SERVER, USER, PASS, BDD);

//Définr la requete pour recuper les données.
$requete = "SELECT * FROM ". TABLE ." ORDER BY date DESC";

// Récupère les resultats.
$resultats = mysqli_query($connexion, $requete);

//Ferme la connexion à la base de données.
mysqli_close($connexion);

//  var_dump($resultats);


// la fonction qui deduire le texte de contenu à 20 mots dans les cartes.

function tronquer($contenu){
				
	$texte_tronque = "";			
	$chaine_explode = explode(" ", $contenu);
	

	for($i = 0; $i < 20; $i++){
	$texte_tronque .= $chaine_explode[$i] . " ";
	}

	return $texte_tronque . "(...)";

};

?>

<?php  
		if(isset($_SESSION["message"])):?>

		<p class="alert alert-success">
		
			<?= $_SESSION["message"]; ?>
		</p>

<?php endif;

   // destruction de la session.
   session_unset();
   session_destroy();
?>

		

	<div class="container mt-4 p-1">

		<div class="row">
			<?php if( $resultats != false ): ?>
				<?php while( $article = mysqli_fetch_assoc( $resultats ) ): ?>
					
		<!--pour afficher la  date et l'heur -->
		<?php
			  $timestamp = strtotime($article["date"]) ;
			  $date_time = date("d/m/Y à H:i", $timestamp);

		?>


			<div class="col-4 mb-4 p-1">
				<div class="card">
					<div class="card-body">
						<h3 class="mb-4 p-1"><?= $article["titre"];?></h3>

						<p class="mb-4 p-1"> Publié le <?=  $date_time ; ?> </p>
						
						<div class="mb-1 text-muted p-1"></div>
						<p class="card-text mb-auto p-1"><?= tronquer($article["contenu"]); ?></p>

						<p class="pt-4 p-1"><a href="single.php?id=<?= $article["id"]; ?>" class="btn btn-outline-secondary">Lire l'article</a></p>
					</div>
				</div>

	        </div>


					<?php endwhile; ?>

					<?php else: ?>

					<p>Désolé, mais il n'y a aucun article dans la base de données.</p>

					<?php endif; ?>
	        

    	</div>
	
	</div>
	
	
	
	
	
	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<!-- footer -->
<?php include_once("footer.php");  ?>