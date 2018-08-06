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


	$req = $bdd->prepare('INSERT INTO Produit (nom, description, image, prix, qte) VALUES (:nom, :description, :image, :prix, :qte)');
	$req->execute(array(

		'nom' => $_POST['nom'], 
		'description' => $_POST['description'],
		'image' => $_POST['image'],
		'prix' => $_POST['prix'],
		'qte' => $_POST['qte'],
		
		));
	// Redirection du visiteur vers la page de la liste
	header('Location: index.php');


?>