				<header class="header"> 
					<ul>
						<li><a class="active" href="index.php">Home</a></li>
						<li><a href="inscription.php">Inscription</a></li>
						<li><a href="connexion.php">Connexion</a></li>
						
					<?php

						// j'inclue ici mon fichier commun à toutes mes pages afin de centraliser/factoriser les infos dans un soucis de maintenabilité
						include 'include/AppTop.php';
						// Si je n'inclue pas ce fichier dans AppTop.php c'est parce que je ne veux pas que ma page login soit sécurisée (car sinon on rentre dans une boucle infinie de redirection jusqu'à la mort du PC)
						//include 'include/secure.php';
					?>

					</ul>
				</header>