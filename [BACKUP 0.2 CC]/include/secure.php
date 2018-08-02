<?php 

// Traitement si j'utilise la POO
// is_file teste si le fichier donné en paramètre existe
if(is_file("session/store")){
	// Je récupère le contenue du fichier de session
	$serialize = implode("", @file("session/store"));
	// je déserialize : Crée une variable PHP à partir d'une valeur linéarisée
	$users = unserialize($serialize);

	// je créé une requete sql privilégiez les requètes préparées me permettant de trouver les Users dont le login et le MDP sont ceux rentrés par l'utilisateurs
	// Limit 1 permet d'arreter la recherche dès que la requete a trouver une correspondance.
	$sql = "SELECT * FROM `utilisateur` WHERE `pseudo` = '".$users->_login."' AND `mdp` = '".$users->_mdp."' LIMIT 1;";
	// j'envoi ma requete
	$users = $bdd->query($sql);
	// si j'ai aucun retour je renvoi vers connexion.php
	if($users->rowCount() == 0){
		header("Location: connexion.php");
		exit;
	}
	//sinon je ne fais rien

	// traitement sans le limit 1 : 
	/*
	$sql = "SELECT * FROM `Users` WHERE `Users_Login` = '".$users->_login."' AND `Users_Mdp` = '".$users->_mdp."';";

	$users = $bdd->query($sql);

	if($users->rowCount() != 1){
		header("Location: login.php");
		exit;
	}
	*/
} else {
	// si le fichier n'existe pas cela veux dire que personne n'a essayé de se connecter
	header("Location: connexion.php");
	exit;
}

/*
// traitement si j'utilise les sessions directes
// si la session n'existe pas ou si elle existe mais qu'elle est vide
if(!isset($_SESSION) || (isset($_SESSION) && empty($_SESSION)) ){
	header("Location: login.php");
	exit;
}

// si la session Users existe et qu'elle n'est pas vide
if(isset($_SESSION['Users']) && !empty($_SESSION['Users'])){
	// je créé une requete sql privilégiez les requètes préparées me permettant de trouver les Users dont le login et le MDP sont ceux rentrés par l'utilisateurs et stocké dans la session
	$sql = "SELECT * FROM `Users` WHERE `Users_Login` = '".$_SESSION['Users']['login']."' AND `Users_Mdp` = '".$_SESSION['Users']['mdp']."' LIMIT 1;";
	
	// j'envoi ma requete
	$users = $bdd->query($sql);
	// si j'ai aucun retour je renvoi vers login.php
	if($users->rowCount() == 0){
		header("Location: login.php");
		exit;
	}
} else {
	// si la session Users est vide cela veux dire que personne n'a essayé de se connecter
	header("Location: login.php");
	exit;
}*/
