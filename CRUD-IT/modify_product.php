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
 
  $id  = $_POST["id_prod"] ;

  $req = $bdd->prepare("UPDATE Produit (nom, description, image, prix, qte) SET (:nom, :description, :image, :prix, :qte) WHERE id_prod= '$id'");
  $req->execute(array(

    'nom' => $_POST['nom'], 
    'description' => $_POST['description'],
    'image' => $_POST['image'],
    'prix' => $_POST['prix'],
    'qte' => $_POST['qte'],
    
    ));

    // Redirection du visiteur vers la page de la liste
     header('Location: ../gestion_prod.php');

?>