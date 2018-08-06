<?php
// Connexion à la base de données
/*  try
  {

    include "include/_config_db.php";

  }
  catch(Exception $e)
  {
      die('Erreur : '.$e->getMessage());
  }
 */

    //récupération de la variable d'URL,
    //qui va nous permettre de savoir quel enregistrement modifier
    $id  = $_GET["id_prod"] ;
 
    //requête SQL:
    $sql = "SELECT * FROM produit WHERE id_prod = ".$id ;
 
    //exécution de la requête:
    $requete = mysql_query( $sql, $cnx ) ;
 
    //affichage des données:
    if( $result = mysql_fetch_object( $requete ) )
     {
     

?>
