<!DOCTYPE html>

<?php

require 'app/Autoloader.php';
Autoloader::register();

?>


<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_admin_header.php'; ?>
				

				<div class="contain_">

					<h2>Liste des produits</h2>


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
						$reponse = $bdd->query('SELECT id_prod, nom, type, image, prix, description FROM Produit ORDER BY date DESC LIMIT 0, 20');

						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						while ($donnees = $reponse->fetch())
						{
						echo '<p>' . htmlspecialchars($donnees['id_prod']) . '<br>' 

						. htmlspecialchars($donnees['nom']) . '<br>' 
						. htmlspecialchars($donnees['type']) . '<br>'
						. htmlspecialchars($donnees['image']) . '<br>' 
						. htmlspecialchars($donnees['prix']) . ' € <br>' 
						. htmlspecialchars($donnees['description']) . '<br><br></p>';
						}

					$reponse->closeCursor();

					?>

				</div>


				<?php include 'include/_admin_footer.php'; ?>


				</footer>

	</body>


</html>