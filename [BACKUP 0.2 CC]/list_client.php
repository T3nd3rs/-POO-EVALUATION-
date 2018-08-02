<!DOCTYPE html>

<?php

require 'include/Autoloader.php';
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

					<h2>Liste des utilisateurs</h2>
						
					<?php

						//Récupération des 10 derniers Jeux ajoutés
						try
						{

							include "include/_config_db.php";

						}
						catch(Exception $e)
						{
			        		die('Erreur : '.$e->getMessage());
						}

						// Récupération des 20 derniers messages
						$reponse = $bdd->query('SELECT pseudo, nom, prenom, date_naissance, mail, adresse, cp, ville, tel, date, mdp, class FROM utilisateur ORDER BY date DESC LIMIT 0, 20');

						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						while ($donnees = $reponse->fetch())
						{
						echo '<p>'
						. htmlspecialchars($donnees['pseudo']) . '<br>' 
						. htmlspecialchars($donnees['nom']) . '<br> ' 
						. htmlspecialchars($donnees['prenom']) . '<br>' 
						. htmlspecialchars($donnees['date_naissance']) . '<br>'
						. htmlspecialchars($donnees['mail']) . '<br>'
						. htmlspecialchars($donnees['adresse']) . '<br>'
						. htmlspecialchars($donnees['cp']) . '<br>'
						. htmlspecialchars($donnees['ville']) . '<br>'
						. htmlspecialchars($donnees['tel']) . '<br>'
						. htmlspecialchars($donnees['date']) . '<br>'
						. htmlspecialchars($donnees['mdp']) . '<br>'
						. htmlspecialchars($donnees['class']) . '</p>';
				
						}

						$reponse->closeCursor();

					?>

				</div>


				<?php include 'include/_admin_footer.php'; ?>


	</body>


</html>