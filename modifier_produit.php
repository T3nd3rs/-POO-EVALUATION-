<!DOCTYPE html>


<html>

  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>

  <body>

        <?php include 'include/_admin_header.php'; ?>

        <div class="contain_">

        <?php include 'recept_.php'; // début if ?>

          <h2>Ajout d'un produit</h2>

          <form class="form" action="CRUD-IT/modify_product.php" method="POST">
          <input type="hidden" name="id" value="<?php echo($id) ;?>">

            <fieldset>
            <legend>Produit</legend><br>

            <label for="nom">Nom:</label><br>
            <input type="text" id="nom" name="nom" value="<?php echo($result->nom) ;?>" required><br>

            <label for="type">Catégorie:</label><br>
            <input type="text" id="type" name="type" value="<?php echo($result->type) ;?>" required><br>

              <label for="prix">Prix:</label><br>
              <input type="text" id="prix" name="prix" value="<?php echo($result->prix) ;?>" required><br>

              <label for="qte">Quantité:
              <input type="text" id="quantite" name="qte" value="<?php echo($result->qte) ;?>" required><br><br>

            <label for="description">Description:</label><br>
            <textarea id="description" name="description" cols="50" rows="8" value="<?php echo($result->description) ;?>" required>
              </textarea><br><br>
              <!--<input type="text" id="description" name="description" required><br>-->
              <label for="image">Image:</label>
              <input type="file" id="image" name="image" value="<?php echo($result->img) ;?>" required><br><br>

              </fieldset><br>

              <input type="submit" value="Ajouter" ><br>


            </form>
      

        </div>


        <?php

        include 'include/_admin_footer.php';

        ?>
        
        <?php }//fin if ?>

  </body>


</html>