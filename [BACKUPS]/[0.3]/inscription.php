<!DOCTYPE html>



<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_header.php'; ?>		


				<div class="contain_">


					<form class="form" action="add_users.php" method="POST">

						<h2>Inscription</h2>
						
						<fieldset>
						<legend>Vos coordonnées:</legend><br>

						<label for="nom">Nom:</label> 
						<input type="text" id="nom" name="nom" required><br>

						<label for="prenom">Prenom:</label>
	    				<input type="text" id="prenom" name="prenom" required><br>

	    				<label for="date_naissance">Date de naissance:</label>
	    				<input type="Date" id="date_naissance" name="date_naissance" required><br>

	    				<label for="mail">Mail:</label>
	    				<input type="Mail" id="mail" name="mail" required><br>

	    				<label for="mail">Numéro de téléphone:</label>
	    				<input type="text" id="tel" name="tel" maxlength="14" required><br><br>

	    				<label for="adresse">Adresse:</label>
	    				<input type="text" id="adresse" name="adresse" required><br>

	    				<label for="code_postal">Code postal:</label>
	    				<input type="text" id="code_postal" name="cp" required><br>

						<label for="ville">Ville:</label>
	    				<input type="text" id="ville" name="ville" required><br>
	    				</fieldset><br>

						<fieldset>
						<legend>Votre compte:</legend><br>

	    				<label for="pseudo">Pseudo (nom de compte):</label>
	    				<input type="text" id="pseudo" name="pseudo" required><br><br>

	    				<label for="mdp">Mot de passe:</label>
	    				<input type="password" id="mdp" name="mdp" minlength="4" required><br>

	    				</fieldset>


	    				<!-- Confirmer le mot de passe:
	    				<input type="password" id="mdp_confirm" name="mdp_password" required><br> --><br>

	    				<input type="submit" value="Envoyer" ><br>

	    			</form>
	    

				</div>


				<?php

				include 'include/_footer.php';

				?>

	</body>


</html>