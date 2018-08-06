<?php 

$user = "root"; // identifiant de connexion 
$pass = ""; // mdp de connexion
$host = "localhost"; // serveur de bdd
$dbname = "boutique_pupuce"; // nom de la base
$msgKO = "";
$msgOK = "";

// connexion à la bdd
$bdd = new PDO("mysql:host=".$host.";dbname=".$dbname.";charset=utf8", $user, $pass);

 ?>