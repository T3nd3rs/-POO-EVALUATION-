<!DOCTYPE html>



<html>


	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_header.php'; ?>		

				<div class="contain_">


					<form class="form" action="session/login_.php" method="POST">

						<h2>Connexion</h2>

						<fieldset>
						<legend>Compte</legend><br>

	    				<label for="pseudo">Nom de compte:</label>
	    				<input type="text" class="form_int" id="pseudo" name="pseudo"  required autofocus autocomplete="off"><br><br>

	    				<label for="mdp">Mot de passe:</label>
	    				<input type="password" class="form_int" id="mdp" name="mdp"  required autocomplete="off"><br>
	    				</fieldset><br>

	    				<input type="submit" value="Valider"><br>

	    			</form>
	    

				</div>

				<?php include 'include/_footer.php'; ?>
				

	</body>


</html>