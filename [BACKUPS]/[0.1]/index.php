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
						<li><a class="active" href="#index">Home</a></li>
						<li><a href="inscription.php">Inscription</a></li>
						<li><a href="connexion.php">Connexion</a></li>
						<li><a href="#footer">Bas de la page</a></li>
					</ul>
				</header>
				
				<div class="boutique" id="boutique">

					<?php

						
						try
						{

							$bdd = new PDO('mysql:host=localhost;dbname=boutique_pupuce;charset=utf8','root','');
						}
						catch(Exception $e)
						{
		        			die('Erreur : '.$e->getMessage());
						}

						// Récupération des 20 derniers articles
						$reponse = $bdd->query('SELECT nom, image, prix, description FROM Produit ORDER BY date DESC LIMIT 0, 20');

						// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
						while ($donnees = $reponse->fetch())
						{
						echo '<p>' . htmlspecialchars($donnees['nom']) . ' <br><br> ' 
						. htmlspecialchars($donnees['image']) . '<br><br>' 
						. htmlspecialchars($donnees['prix']) . ' € <br><br>' 
						. htmlspecialchars($donnees['description']) . '<br><br><br></p>';
						}

					$reponse->closeCursor();

					?>Z0n3t35t

				</div>


				<footer class="footer">

					<p><a href="forum">FORUM</a> / <a href="#FAQ">FAQ</a> / <a href="contact">CONTACT</a> / <a href="panel_admin.php">Panel admin</a></p>
					<br>
					<p><a href="#header">Retourner en haut</a></p>


				</footer>

	</body>














</html>