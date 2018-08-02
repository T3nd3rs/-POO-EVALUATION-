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
	// je créé un nom de fichier unique que je garde en mémoire
	$_SESSION["sessions"] = sha1(time());
	$fp = fopen("session/".$_SESSION["sessions"],"w");
	// j'écris dedans le contenus de mon objet
	fwrite($fp, $serialize);
	// je ferme mon fichier
	fclose($fp);

	// ATTENTION privilégiez UNE SEULE méthode entre POO et sessions directe : Si vous faîtes de la POO restez en POO!

	// si on utilise les sessions directements
	// en 2 lignes
	//$_SESSION['utilisateur']['pseudo'] = $_POST["pseudo"];
	//$_SESSION['utilisateur']['mdp'] = $_POST["mdp"];
	// en 1 ligne
	//$_SESSION["utilisateur"] = ["login" => $_POST["pseudo"] , "mdp" => $_POST["mdp"] ];


	// dans tous les cas je redirige vers la page qui m'intéresse 
	header("Location: index.php");
	exit;
}

?>