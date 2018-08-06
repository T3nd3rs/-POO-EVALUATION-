<?php
// Connexion à la base de données
	try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=boutique_pupuce;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	        die('Erreur : '.$e->getMessage());
	}


	$req = $bdd->prepare('INSERT INTO client (nom, prenom, date_naissance, mail, adresse, cp, ville, pseudo, mdp) VALUES (:nom, :prenom, :date_naissance, :mail, :adresse, :cp, :ville, :pseudo, :mdp)');
	$req->execute(array(

		'nom' => $_POST['nom'], 
		'prenom' => $_POST['prenom'],
		'date_naissance' => $_POST['date_naissance'],
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