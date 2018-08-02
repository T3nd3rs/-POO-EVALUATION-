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
						<li><a href="inscription.php">Inscription</a></li>
						<li><a class="active" href="connexion.php">Connexion</a></li>
						
					</ul>
				</header>		

				<div>



					<form class="form" action="_session.php" method="POST">
						<h1>Connexion</h1>

	    				<label for="pseudo">Pseudo (nom de compte) ou adresse mail:</label>
	    				<input type="text" class="form_int" id="pseudo" name="pseudo" required><br>

	    				<label for="mdp">Mot de passe:</label>
	    				<input type="password" class="form_int" id="mdp" name="mdp" required><br><br>

	    				<input type="submit" value="Envoyer"><br>
	    			</form>
	    

				</div>


				<footer class="footer">

					<p><a href="forum">FORUM</a> / <a class="FAQ">FAQ</a> / <a href="contact">CONTACT</a></p>
					<br>
					<p><a href="#header">Retourner en haut</a></p>


				</footer>

	</body>


</html>