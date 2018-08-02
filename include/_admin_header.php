				<header class="header"> 
					<ul>
						<li><a class="active" href="index.php">Home</a></li>
						<li><a href="panel_admin.php">Panel Admin</a></li>
						<li><a href="list_users.php">Liste des clients</a></li>
						<li><a href="ajouter_produit.php">Ajouter un produit</a></li>
						<li><a href="gestion_prod.php">Gestion produits</a></li>
						<li><a href="disconnect_.php">Deconnexion</a></li>

					<?php 
						// j'inclue ici mon fichier commun à toutes mes pages afin de centraliser/factoriser les infos dans un soucis de maintenabilité
						include 'include/AppTop.php';
						// Si je n'inclue pas ce fichier dans AppTop.php c'est parce que je ne veux pas que ma page login soit sécurisée (car sinon on rentre dans une boucle infinie de redirection jusqu'à la mort du PC)
						//include 'include/secure.php';
					?>						
						
					</ul>
				</header>	