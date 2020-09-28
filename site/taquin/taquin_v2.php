<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <title>Taquin v2</title>
   <!-- CSS -->
   <link rel="stylesheet" href="taquin.css" />
   <link rel="stylesheet" href="../../css/btnRetour.css" />
</head>

<body>
   <!-- HTML -->
   <?php include("../../html/btnRetour.php"); ?><!-- bouton retour -->

   <!-- informations image -->
   <h1>Caméléon panthère, Furcifer pardalis</h1>
   <div class="text">
      <p class="descrip">
         <span>Habitat :</span>
         Les espèces de ce genre se rencontrent à Madagascar et aux Comores. Il
         a été introduit à La Réunion au 17ème siècle. Ces caméléons malgache
         arboricoles aiment les forets humides. Diurnes, ils sont facilement
         observables dans leur milieu narturel.
      </p>
      <p class="descrip">
         <span>Description :</span>
         C'est un caméléons d'assez grande taille pour un caméléons, il mesure
         de 40 à 50 cm avec la queue, il est l’un des plus beaux, avec de
         nombreuses variétés chromatiques . Se nourrissant principalement
         d'insectes et parfois de petits reptiles.
      </p>
   </div>
   <!-- informations image -->

   <div class="conteneur">
      <!-- interface -->
      <div class="interface">
         <select id="choixImg" class="choixImg">
            <option value="chameleon0">Caméléon 1</option>
            <option value="chameleon1">Caméléon 2</option>
            <option value="chameleon2">Caméléon 3</option>
            <option value="chameleon4">Caméléon 5</option>
            <option value="chameleon5">Caméléon 6</option>
            <option value="lezard0">Lézard 1</option>
            <!--<option value="grenouille0">Grenouille 1</option>-->
         </select>
         <button id="btnRelancer" class="btnRelancer">Recommencer</button>
         <span id="compteur" class="compteur">Mouvements : <span>0</span></span>
         <fieldset class="info">
            <legend>Info ?</legend>
            <p id="zoneText" class="zoneText"></p>
         </fieldset>
         <button id="btnIndice" class="btnIndice">Indice</button>
         <button id="btnDuFaible" class="btnDuFaible">Tricher(wip)</button>
      </div>
      <!-- taquin -->
      <div id="taquin" class="taquin"></div>
   </div>

   <!-- JAVA SCRIPT -->
   <script src="../../lib_fonction.js"></script>
   <script src="./taquin_v2.js"></script>
</body>

</html>