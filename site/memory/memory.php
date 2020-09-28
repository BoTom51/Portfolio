<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Memory</title>

      <link rel="stylesheet" href="./memory.css" />
      <link rel="stylesheet" href="../../css/btnRetour.css" />
   </head>
   <body>
      <?php include("../../html/btnRetour.php"); ?><!-- bouton retour -->

      <h1>Memory</h1>
      <p>
         Cliquez sur une carte pour la retourner. Deux peuvent etre retourné en
         meme temps. Si elles ne forment pas une paire elles se retourneront.
         Mémorisez leurs emplacement pour réunir les paires.
      </p>
      <div id="tapis"></div>

      <!-- JAVA SCRIPT -->
      <script src="../../lib_fonction.js"></script>
      <script src="./memory.js"></script>
   </body>
</html>
