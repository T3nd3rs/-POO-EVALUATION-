<!DOCTYPE html>

<?php

require 'app/Autoloader.php';
Autoloader::register();

?>


<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<header class="header"> 
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="list_client.php">Liste des clients</a></li>
						<li><a href="ajouterproduit.php">Ajouter un produit</a></li>
						<li><a href="panel_admin.php">Panel Admin</a></li>
						
					</ul>
				</header>	

				<div>

					<h1>Ajout d'un produit</h1>

					<form class="form" action="add_product.php" method="POST">

						<label for="nom">Nom:</label>
						<input type="text" id="nom" name="nom" required><br>

	    				<label for="prix">Prix:</label>
	    				<input type="text" id="prix" name="prix" required><br>

	    				<label for="quantite">Quantité:
	    				<input type="text" id="quantite" name="qte" required><br>

						<label for="description">Description:</label>
	    				<input type="text" id="description" name="description" required><br>

	    				<label for="image">Image:</label>
	    				<input type="file" id="image" name="image" required><br><br>

	    				<input type="submit" value="Envoyer" ><br>
	    			</form>
	    

				</div>


				<footer class="footer">

					<p><a href="forum">FORUM</a> / <a class="FAQ">FAQ</a> / <a href="contact">CONTACT</a></p>
					<br>
					<p><a href="#header">Retourner en haut</a></p>


				</footer>

	</body>


</html>