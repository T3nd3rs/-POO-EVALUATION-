<!DOCTYPE html>


<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>


				<?php
					
					if((isset($_SESSION['sessions'])) && (!empty($_SESSION['sessions'])))
					
						{include ('include/_header.php'); }
					
					else 

						{include ('include/_user_header.php'); }
				
				//include 'include/_header.php'; ?>
				
				<div class="presentation"><h1>Bienvenue dans la boutique de Cailluspupus</h1></div>

				<div class="contain_" id="boutique">


					<h2>Derniers produits ajouter</h2>

						<table><tr><th></th>
							<th>Nom</th>
							<th>Prix</th>
							<th>Catégorie</th>
							<th>Description</th></tr> 
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
						echo 
						'<tr><td class="img_prod_mag">'. htmlspecialchars($donnees['image']) . '</td>
						<td>'. htmlspecialchars($donnees['nom']) . '</td>
						<td>'. htmlspecialchars($donnees['prix']) . ' € </td>
						<td>'. htmlspecialchars($donnees['type']) . '</td>
						<td>'. htmlspecialchars($donnees['description']) . '</td></tr>';
						}

						$reponse->closeCursor();

					?>
					</table>
				</div>


				<?php include 'include/_footer.php'; ?>


				</footer>

	</body>


</html>