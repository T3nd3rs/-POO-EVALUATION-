<!DOCTYPE html>


<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_admin_header.php'; ?>		


				<div class="contain_">

					<h2>Liste des utilisateurs</h2>
						<table><tr><th>Id utilisateur</th>
						<th>Pseudo</th>
						<th>Nom</th>
						<th>Prénom</th>
						<th>Date de naissance</th>
						<th>E-mail</th>
						<th>Adresse</th>
						<th>Code postal</th>
						<th>Ville</th>
						<th>N° téléphone</th>
						<th>Date d'inscription</th> 
						<th></th>
						<th>Type d'utilisateur</th></tr>

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
						$reponse = $bdd->query('SELECT id_cli, pseudo, nom, prenom, date_naissance, mail, adresse, cp, ville, tel, date, mdp, class FROM utilisateur ORDER BY date DESC LIMIT 0, 20');

						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						while ($donnees = $reponse->fetch())
						{
						echo '<tr>
						<td>'. htmlspecialchars($donnees['id_cli']) . '</td>
						<td>'. htmlspecialchars($donnees['pseudo']) . '</td> 
						<td>'. htmlspecialchars($donnees['nom']) . '</td> 
						<td>'. htmlspecialchars($donnees['prenom']) . '</td> 
						<td>'. htmlspecialchars($donnees['date_naissance']) . '</td>
						<td>'. htmlspecialchars($donnees['mail']) . '</td>
						<td>'. htmlspecialchars($donnees['adresse']) . '</td>
						<td>'. htmlspecialchars($donnees['cp']) . '</td>
						<td>'. htmlspecialchars($donnees['ville']) . '</td>
						<td>'. htmlspecialchars($donnees['tel']) . '</td>
						<td>'. htmlspecialchars($donnees['date']) . '</td>
						<td>'. htmlspecialchars($donnees['mdp']) . '</td>
						<td>'. htmlspecialchars($donnees['class']) . '</td></tr>';
				
						}

						$reponse->closeCursor();

					?>

					</table>

				</div>


				<?php include 'include/_admin_footer.php'; ?>


	</body>


</html>