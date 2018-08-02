<!DOCTYPE html>

<?php

require 'include/Autoloader.php';
Autoloader::register();

include 'include/AppTop.php';
include 'include/secure.php';

?>


<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_header.php'; ?>
				

				<div class="contain_" id="boutique">

					<h2>Derniers produits ajouter</h2>


					<?php

						
						try
						{

							include "include/_config_db.php";

						}
						catch(Exception $e)
						{
		        			die('Erreur : '.$e->getMessage());
						}

						// Récupération des 20 derniers articles
						$reponse = $bdd->query('SELECT nom, type, image, prix, description FROM Produit ORDER BY date DESC LIMIT 0, 20');

						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						while ($donnees = $reponse->fetch())
						{
						echo '<p>' . htmlspecialchars($donnees['nom']) . ' <br><br> ' 
						. htmlspecialchars($donnees['type']) . '<br><br>'
						. htmlspecialchars($donnees['image']) . '<br><br>' 
						. htmlspecialchars($donnees['prix']) . ' € <br><br>' 
						. htmlspecialchars($donnees['description']) . '<br><br><br></p>';
						}

					$reponse->closeCursor();

					?>

				</div>


				<?php include 'include/_footer.php'; ?>


				</footer>

	</body>


</html>