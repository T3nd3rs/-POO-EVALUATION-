<?php
// Connexion à la base de données
	try
	{
		
		include "include/_config_db.php";

	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}


	$req = $bdd->prepare('INSERT INTO utilisateur (nom, prenom, date_naissance, mail, adresse, cp, ville, tel, pseudo, mdp) VALUES (:nom, :prenom, :date_naissance, :mail, :adresse, :cp, :ville, :tel, :pseudo, :mdp)');
	$req->execute(array(

		'nom' => $_POST['nom'], 
		'prenom' => $_POST['prenom'],
		'date_naissance' => $_POST['date_naissance'],
		'tel' => $_POST['tel'],
		'mail' => $_POST['mail'],
		'adresse' => $_POST['adresse'],
		'cp' => $_POST['cp'], 
		'ville' => $_POST['ville'],
		'pseudo' => $_POST['pseudo'],
		'mdp' => $_POST['mdp']
		));
	// Redirection du visiteur vers la page de la liste
	header('Location: index.php');


?>