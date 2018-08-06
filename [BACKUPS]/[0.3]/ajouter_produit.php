<!DOCTYPE html>


<html>

	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="js/design.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_admin_header.php'; ?>

				<div class="contain_">

					<h2>Ajout d'un produit</h2>

					<form class="form" action="add_product.php" method="POST">

						<fieldset>
						<legend>Produit</legend><br>

						<label for="nom">Nom:</label><br>
						<input type="text" id="nom" name="nom" required><br>

						<label for="type">Catégorie:</label><br>
						<input type="text" id="type" name="type" required><br>

	    				<label for="prix">Prix:</label><br>
	    				<input type="text" id="prix" name="prix" required><br>

	    				<label for="qte">Quantité:
	    				<input type="text" id="quantite" name="qte" required><br><br>

						<label for="description">Description:</label><br>
						<textarea id="description" name="description" cols="50" rows="8" required>
   						</textarea><br><br>
	    				<!--<input type="text" id="description" name="description" required><br>-->

	    				<label for="image">Image:</label>
	    				<input type="file" id="image" name="image" required><br><br>

	    				</fieldset><br>

	    				<input type="submit" value="Ajouter" ><br>


	    			</form>
	    

				</div>


				<?php

				include 'include/_admin_footer.php';

				?>

	</body>


</html>