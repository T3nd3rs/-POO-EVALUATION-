<!DOCTYPE html>



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

						<table><tr><th>Id produit</th>
							<th>image</th>
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
						$reponse = $bdd->query('SELECT id_prod, nom, type, image, prix, description FROM Produit ORDER BY date DESC LIMIT 0, 20');

						   //récupération de la variable d'URL,
    					 //qui va nous permettre de savoir quel enregistrement modifier
    					$id  = $_GET["id_prod"] ;
 
   						 //requête SQL:
  						 $sql = "SELECT * FROM produit WHERE id_prod = ".$id ;
						
						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						while ($donnees = $reponse->fetch())
						{
						echo '<tr><td>' . htmlspecialchars($donnees['id_prod']) . '</td>
						<td class="img_prod">'. htmlspecialchars($donnees['image']) . '</td> 
						<td>'. htmlspecialchars($donnees['nom']) . '</td> 
						<td>'. htmlspecialchars($donnees['type']) . '</td>
						<td>'. htmlspecialchars($donnees['prix']) . ' € </td> 
						<td>'. htmlspecialchars($donnees['description']) . '</td>
						<td><input type="button" href="modifer_produit.php?idprod=.$id."></input></td></tr>';
						}

					$reponse->closeCursor();

					?>

					</table>

				</div>


				<?php include 'include/_admin_footer.php'; ?>


				</footer>

	</body>


</html>