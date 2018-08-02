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

				<header class="header"> 
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="list_client.php">Liste des clients</a></li>
						<li><a href="ajouterproduit.php">Ajouter un article</a></li>
						<li><a href="panel_admin.php">Panel Admin</a></li>
						
					</ul>
				</header>		

				<div>
						
					<?php

					//Récupération des 10 derniers Jeux ajoutés
					try
					{

					$bdd = new PDO('mysql:host=localhost;dbname=pole_emploi;charset=utf8','root','');
					}
					catch(Exception $e)
					{
			        die('Erreur : '.$e->getMessage());
					}

					// Récupération des 20 derniers messages
					$reponse = $bdd->query('SELECT pseudo, nom, prenom, date_naissance, mail, adresse, cp, ville, date, mdp FROM client ORDER BY date DESC LIMIT 0, 20');

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
					. htmlspecialchars($donnees['date']) . '<br>'
					. htmlspecialchars($donnees['mdp']) . '</p>';
		}

		$reponse->closeCursor();

	?>

				</div>


				<footer class="footer">

					<p><a href="forum">FORUM</a> / <a class="FAQ">FAQ</a> / <a href="contact">CONTACT</a></p>
					<br>
					<p><a href="#header">Retourner en haut</a></p>


				</footer>

	</body>


</html>