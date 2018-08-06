<?php 
	
// Connexion à la base de données
 try
  {

    include "../include/_config_db.php";

  }
  catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }


	session_start();


	$_SESSION['pseudo'] = '';
	$_SESSION['mdp'] = '';

	if (isset($_POST['login']))
	{
		// bouton submit pressé, je traite le formulaire
		$login = (isset($_POST['pseudo'])) ? $_POST['pseudo'] : '';
		$pass =  (isset($_POST['mdp']))  ? $_POST['mdp']  : '';

		if (($login == "Matthieu") && ($pass == "NewsletTux"))
		{
			$_SESSION['login'] = "Matthieu";
			$_SESSION['password'] = "NewsletTux";
			echo '<a href="accueil.php" title="Accueil de la section membre">Accueil</a>';
		}
		else
		{
			// une erreur de saisie ...?
			echo '<p style="color:#FF0000; font-weight:bold;">Erreur de connexion.</p>';
		}
	}; // fin if (isset($_POST['submit']))


?>