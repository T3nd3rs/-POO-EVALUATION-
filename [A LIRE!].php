<!DOCTYPE html>


<html>


	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>

	<body>

				<?php include 'include/_header.php'; ?>		

				<div class="contain_">


					<h1>FAQ</h1>

				<p><b>Yop! A toi qui consultera ce code de bleu je tiens à te faire part du peu qui a été conçu à l'écrit:</b></p>

				<p>Le but etant de faire un magasin je me suis contenté comme beaucoup, de faire avec le peu que j'ai compris.

				<h2>Arborescence</h2>

				<p>Pour se situer dans ce petit bordel organisé:</p>
				
				- Un dossier "[BACKUPS]" pour y conserver d'anciennes versions du code si jamais je voulais revenir sur mes erreurs (ou juste sauvegarder)<br>
				- Chaque pages du site est à la racine<br>
				- Le CSS dans le dossier "css" (obvious...)<br>
				- Le dossier "CRUD-IT" contient les éléments nécéssaire au fonctionnement du CRUD (Oui oui!)<br>
				- Le dossier "include" contient les differants footers et headers du site, le tout aurait du s'adapter avec les sessions.<br>
					
					Il y a aussi le fichier de configuration permettant au site de communiquer avec la base de données "_config_db.php" (il est present ici car il sera inserer directement dans d'autres fichiers .php #include)<br>

				- Pour finir le dossier "session" qui rassemble les fichiers permettant de loguer son compte sur le site.</p>


				<h2>FRONT-END</h2>

				- CSS (et un peu de SCSS ?) juste pour un rendu simple et sobre
				- Les footer et header sont mis appart grâce aux "include" pour simplifier la gestion des menus et se modifier en consequence en cas d'ouverture de session (differances sur ouverture de session hélas indisponible)

				<h2>BACK-END</h2>

				- Usage de PHP (evidement) mais sans POO<br>
				- Une base de données est disponible pour gérer les utilisateurs et les produits uniquement (les photos contenu ne sont pas visible)<br>
				- Un CRUD, mais seul l'ajout et l'affichage sont disponible<br>
				- Les sessions n'etaient fonctionnel que dans le sens où n'importe qui pouvait entrer n'importe quoi pour y ouvrir une session, j'ai mis de côté ce probleme et n'est pas visible dans ce code, pour le retrouver il suffit de voir la version "[0.3]" dans le dossier "[BACKUPS]"<br>
				- Un "panel admin" est disponible et accessible : "http://localhost/[PHP%20&%20SQL]/%5bPOO%20EVALUATION%5d/panel_admin.php"<br><br><br>

				<p>Je crois que c'est tout, je tiens aussi à m'excuser du "peu" de commentaires dans mon code, je me suis trop centré sur le "fonctionnel" pour avoir le plus de resultats possible... En esperant être suffisament lisible et logique, bonne lecture!</p>



				</div>

				<?php include 'include/_footer.php'; ?>
				

	</body>


</html>