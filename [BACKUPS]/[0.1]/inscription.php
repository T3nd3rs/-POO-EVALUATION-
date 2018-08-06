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
						<li><a class="active" href="inscription.php">Inscription</a></li>
						<li><a href="connexion.php">Connexion</a></li>
						
					</ul>
				</header>		

				<div>

					<h1>Inscription</h1>

					<form class="form" action="add_client.php" method="POST">

						<label for="nom">Nom:</label> 
						<input type="text" id="nom" name="nom" required><br>

						<label for="prenom">Prenom:</label>
	    				<input type="text" id="prenom" name="prenom" required><br>

	    				<label for="date_naissance">Date de naissance:</label>
	    				<input type="Date" id="date_naissance" name="date_naissance" required><br>

	    				<label for="mail">Mail:</label>
	    				<input type="Mail" id="mail" name="mail" required><br>

	    				<label for="adresse">Adresse:</label>
	    				<input type="text" id="adresse" name="adresse" required><br>

	    				<label for="code_postal">Code postal:</label>
	    				<input type="text" id="code_postal" name="cp" required><br>

						<label for="ville">Ville:</label>
	    				<input type="text" id="ville" name="ville" required><br><br>

	    				<label for="pseudo">Pseudo (nom de compte):</label>
	    				<input type="text" id="pseudo" name="pseudo" required><br>

	    				<label for="pseudo">Mot de passe:</label>
	    				<input type="password" id="mdp" name="mdp" required><br>

	    				<!-- Confirmer le mot de passe:
	    				<input type="password" id="mdp_confirm" name="mdp_password" required><br> --><br>

	    				<input type="submit" value="Envoyer" ><br>
	    			</form>
	    

				</div>


				<footer class="footer">

					<p><a href="forum">FORUM</a> / <a class="FAQ">FAQ</a> / <a href="contact">CONTACT</a></p>
					<br>
					<p><a href="#header">Retourner en haut</a></p>


				</footer>

	</body>


</html>