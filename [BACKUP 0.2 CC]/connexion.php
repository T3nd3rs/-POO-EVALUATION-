<!DOCTYPE html>

<?php

require 'include/Autoloader.php';
Autoloader::register();

?>


<html>

<?php 
// j'inclue ici mon fichier commun à toutes mes pages afin de centraliser/factoriser les infos dans un soucis de maintenabilité
include 'include/AppTop.php';


// traitement du formulaire
if(isset($_POST) && !empty($_POST)){

	// si on utilise la POO 
	// je créé un nouveau Users avec les données rentrées dans le formulaire
	$users = new Users($_POST["pseudo"], $_POST["mdp"]);
	// je serialize mon objet : je génère une représentation stockable d'une valeur
	// C'est une technique pratique pour stocker ou passer des valeurs PHP entre scripts, sans perdre leur structure ni leur type. 
	$serialize = serialize($users);

	// je stocke dans un fichier le contenue de $serialize
	// Attention le dossier session que j'utilise (vous pouvez stocker le fichier où vous voulez) doit être accessible en écriture pour tout le monde (chmod 777)
	// Attention le nom du fichier doit être unique de manière certaine
	// Si le nom de fichier est commun a toutes les instances des objets comme c'est le cas ici cela veux dire que tous le monde peux se connecter et donc adieu la sécurité
	
	// j'ouvre un fichier en écriture
	$fp = fopen("session/store","w");
	// j'écris dedans le contenus de mon objet
	fwrite($fp, $serialize);
	// je ferme mon fichier
	fclose($fp);

	// ATTENTION privilégiez UNE SEULE méthode entre POO et sessions directe : SI vous faîtes de la POO restez en POO!

	// si on utilise les sessions directements
	// en 2 lignes
	//$_SESSION['Users']['login'] = $_POST["Login"];
	//$_SESSION['Users']['mdp'] = $_POST["mdp"];
	// en 1 ligne
	//$_SESSION["Users"] = ["login" => $_POST["Login"] , "mdp" => $_POST["mdp"] ];


	// dans tous les cas je redirige vers la page qui m'intéresse 
	header("Location: index.php");
	exit;
}

?>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_header.php'; ?>		

				<div class="contain_">



					<form class="form" action="_session.php" method="POST">

						<h2>Connexion</h2>

						<fieldset>
						<legend>Compte</legend><br>

	    				<label for="pseudo">Nom de compte:</label>
	    				<input type="text" class="form_int" id="pseudo" name="pseudo" required><br><br>

	    				<label for="mdp">Mot de passe:</label>
	    				<input type="password" class="form_int" id="mdp" name="mdp" required><br>
	    				</fieldset><br>

	    				<input type="submit" value="Valider"><br>

	    			</form>
	    

				</div>

				<?php include 'include/_footer.php'; ?>
				

	</body>


</html>