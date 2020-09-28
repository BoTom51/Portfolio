<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Espace nautique</title>
    <link rel="stylesheet" href="./nautique.css" />
    <link rel="stylesheet" href="../../css/btnRetour.css" />
  </head>
  <body>
    <?php include("../../html/btnRetour.php"); ?><!-- bouton retour -->

    <header>
      <div class="barre">
        <a href="https://www.golgoth.store.com" target="_blank">&Leftarrow; golgoth.store.com</a>
        <div class="sbarre">
          <span>Tel</span>
          <span>FR</span>
          <span>EN</span>
          <span>IT</span>
        </div>
      </div>

      <nav>
        <img class="fondMenu1" src="./img/N1.png" alt="" />
        <img class="fondMenu2" src="./img/N1_des_remorques.png" alt="" />
        <div class="interface">
          <div class="ligne1">
            <h1 class="titre">ESPACE <strong>NAUTIQUE</strong></h1>
            <a class="profile" href="#"
              ><img src="./img/user-solid.svg" alt="profile"
            /></a>
            <a class="pannier" href="#"
              ><img src="./img/shopping-basket-solid.svg" alt="Pannier"
            /></a>
            <span>0</span>
          </div>
          <div class="ligne2">
            <a href="#">PORTES-BATEAUX</a>
            <a href="#">QUICKFLEX</a>
            <a href="#">LOCATION / SERVICE</a>
            <a href="#">ENTRETIEN</a>
            <a href="#">QUI SOMMES-NOUS ?</a>
            <img src="./img/search-solid.svg" alt="Recherche" />
          </div>
        </div>
      </nav>
    </header>
    <main>
      <section>
        <h2>LES PORTES-BATEAUX</h2>
        <div class="porteBateaux">
          <p class="p1">
            <strong
              >Nous transportons vos bateaux depuis bientôt 50 ans sous les
              marques Satellite, Océane, Rocca et Nautilus.</strong
            >
          </p>
          <p class="p2">
            Nos marques s'inscrivent dans cette tradition historique à l'écoute
            des professionnels et confortent au quotidien leur image de leaders
            techniques. Dotées d'un design élégant, d'une construction de grande
            qualité, nos remorques intègrent les solutions techniques les plus
            abouties pour faciliter le transport et la manutention de votre
            bateau en toute sécurité.
          </p>
          <a class="btnRouge produits" href="#"
            >D&Eacute;COUVREZ NOS PRODUITS</a
          >
          <!-- CAROUSEL -->
          <div class="carousel">
            <a class="flecheGauche" href="#">&larr;</a>
            <img src="./img/remorque0.png" alt="" />
            <div class="prix">
              <span class="prixSold">499<strong>&euro;</strong></span>
              <span class="prixOrigin">699<strong>&euro;</strong></span>
            </div>
            <span>Remorque Nautilus</span>
            <a class="flecheDroite" href="#">&rarr;</a>
          </div>
        </div>
      </section>
      <section class="location">
        <h2>LOCATION</h2>
        <a class="produitsLocation" href="#"
          >VOIR TOUTES NOS LOCATIONS <strong>&rarr;</strong></a
        >
        <div class="rubrique">
          <div class="articles">
            <img src="./img/remorque1.png" alt="" /><span class="nom"
              >Jet Satellite</span
            >
            <span>Charge utile : 1880kg</span><span>PTC : 2500kg</span
            ><span>Nb essieu : 2</span> <span>Dimension utile : 4m10x2m00</span
            ><span>Roues : 195/55R10C</span> <span>Frein : oui</span>
            <a class="btnRouge btnArticle" href="#">LOUER</a>
          </div>
          <div class="articles">
            <img src="./img/remorque2.png" alt="" /><span class="nom"
              >Motorboat Satellite</span
            >
            <span>Charge utile : 1880kg</span><span>PTC : 2500kg</span
            ><span>Nb essieu : 2</span> <span>Dimension utile : 4m10x2m00</span
            ><span>Roues : 195/55R10C</span> <span>Frein : oui</span>
            <a class="btnRouge btnArticle" href="#">LOUER</a>
          </div>
          <div class="articles">
            <img src="./img/remorque3.png" alt="" /><span class="nom"
              >Sailing and keel boat</span
            >
            <span>Charge utile : 1880kg</span><span>PTC : 2500kg</span
            ><span>Nb essieu : 2</span> <span>Dimension utile : 4m10x2m00</span
            ><span>Roues : 195/55R10C</span> <span>Frein : oui</span>
            <a class="btnRouge btnArticle" href="#">LOUER</a>
          </div>
        </div>
      </section>
    </main>
    <!--/////////////// FOOTER ///////////////-->
    <footer>
      <h3 class="titreFooter">ESPACE <strong>NAUTIQUE</strong></h3>
      <form action="">
        <input type="text" placeholder=" Votre email" />
        <img src="./img/search-solid.svg" alt="">
      </form>
      <div class="col">
        <strong>Porte-bateaux</strong>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
      </div>
      <div class="col">
        <strong>Quickflex</strong>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
      </div>
      <div class="col">
        <strong>Location / Service</strong>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
      </div>
      <div class="col">
        <strong>Entretien</strong>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
      </div>
      <div class="col">
        <strong>Qui sommes-nous</strong>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
        <a href="">Lorem ipsum</a>
      </div>
      <div class="pied">
        <a href="">Plan du site</a>
        <a class="separateur" href="">Mentions légales</a>
        <a href="">Contact</a>
      </div>
    </footer>

    <!-- JAVA SCRIPT -->
    <script src="../../lib_fonction.js"></script>
  </body>
</html>
