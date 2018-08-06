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


					<?php include 'include/component/alert.php'; ?>
					<form class="form" action="login_.php" method="POST">

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