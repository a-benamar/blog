<?php
include_once("header.php");
include_once("config.php");
session_start();
// use Dompdf\Dompdf;
// use Dompdf\options;

// Connexion à la base de données.
$connexion = mysqli_connect(SERVER, USER, PASS, BDD);

//Définr la requete pour recuper les données.
$requete = "SELECT * FROM ". TABLE ." ORDER BY date DESC";

// Récupère les resultats.
$resultats = mysqli_query($connexion, $requete);

//Ferme la connexion à la base de données.
mysqli_close($connexion);

 var_dump($resultats);
 die;

$requete = "SELECT * FROM `articles`";
$query = $db->query($requete);
$articles = $query->fetchAll();
var_dump($articles);
die;

require_once 'dompdf/autoload.inc.php';

$options = new Options();

$options->set('defaultFont' , 'courier')
$dompdf = new Dompdf($options);

$dompdf->loadHtml('blabla');

$dompdf->setPaper('A4' , 'portrait')

$dompdf ->render();

$fichier = 'mon-pdf.pdf';

$dompdf->stream($fichier);







?>

	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


	<!-- footer -->
<?php include_once("footer.php");  ?>