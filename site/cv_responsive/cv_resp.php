<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mon CV</title>
  <link rel="stylesheet" href="../../css/btnRetour.css" />
  <link rel="stylesheet" href="./cv_resp.css" />
  <link rel="stylesheet" href="./info_compl.css" />
</head>

<body>
  <?php include("../../html/btnRetour.php"); ?>
  <!-- bouton retour -->
  <a class="retour" href="./CV_BONANSEA.pdf" target="_blank">Version papier</a><!-- PDF-->

  <main>
    <h1>DÉVELOPPEUR WEB ET WEB MOBILE</h1>
    <section>
      <aside class="profil">
        <h2>PROFIL</h2>
        <div class="blokk">
          <img src="./img/profil.png" alt="Nom">
          <span>Thomas Bonansea</span>
        </div>
        <div class="blokk">
          <img src="./img/anniv.png" alt="Naissance">
          <span>19 Novembre 1990</span>
        </div>
        <div class="blokk">
          <img src="./img/localisation.png" alt="Adresse">
          <address>279 rue Saint-Pierre 13005 MARSEILLE</address>
        </div>
        <div class="blokk">
          <img src="./img/phone.png" alt="Téléphone">
          <a href="tel:+3378220679">07 82 20 46 79</a>
        </div>
        <div class="blokk">
          <img src="./img/mail.png" alt="E-mail">
          <a href="mailto:bonanseat@laposte.net">bonanseat@laposte.net</a>
        </div>
        <div class="blokk">
          <img src="./img/git.png" alt="Réalisations">
          <a href="http://dev-workshop.alwaysdata.net/portail">Portfolio</a> / <a href="https://github.com/BoTom51/">Github</a>
        </div>
        <div class="bottomBorder"></div>
      </aside>
      <div class="info">
        <div class="relative">
          <h2>EXPÉRIENCES PROFESSIONNELLES</h2>
          <label class="btn" for="check1">▼</label>
          <input class="checkBurger" id="check1" type="checkbox" />
          <div class="contenu zero">
            <div class="exp">
              <strong class="date">2015 - 2016</strong>
              <strong class="nom">Espaces verts</strong>
              <span class="lieu">Aubagne - Marseille</span>
            </div>
            <div class="exp">
              <strong class="date">2010</strong>
              <span class="nom"><strong>Développeur web</strong>, stagiaire, FunMedias</span>
              <span class="lieu">13010 Marseille</span>
            </div>
          </div>
        </div>
        <div class="relative">
          <h2>FORMATIONS</h2>
          <label class="btn" for="check2">▼</label>
          <input class="checkBurger" id="check2" type="checkbox" />
          <div class="contenu un">
            <div class="form">
              <strong class="date">2019</strong>
              <strong class="nom">AFPA Saint-Jérôme</strong>
              <span class="lieu">Formation ACTION BOOST (découverte des métiers du
                numérique)</span>
            </div>
            <div class="form">
              <strong class="date">2010 - 2012</strong>
              <strong class="nom">Lycée Jean Perrin</strong>
              <span class="lieu">BTS Informatique et Réseaux pour l'industrie et les Services
                techniques</span>
            </div>
            <div class="form">
              <strong class="date">2008 - 2009</strong>
              <strong class="nom">Lycée Jean Perrin</strong>
              <span class="lieu">Bac Sciences et Technologies Industrielles</span>
            </div>
          </div>
        </div>
        <div class="relative">
          <h2>COMPÉTENCES</h2>
          <label class="btn" for="check3">▼</label>
          <input class="checkBurger" id="check3" type="checkbox" />
          <div class="contenu deux">
            <ul class="dessus">
              <li><strong>Conceptualiser</strong> les besoins du client.</li>
              <li><strong>Développer</strong> les fonctionnalités.</li>
              <li>
                <strong>Testes</strong> fonctionnels des programmes et
                applications.
              </li>
              <li>
                Analyser <strong>les solutions</strong> aux problèmes et
                proposer des correctifs.
              </li>
              <li>
                <strong>Documenter</strong> la réalisation à destination des
                développeurs, des services informatiques et des utilisateurs.
              </li>
              <li>
                Créer un lien avec une <strong>base de données</strong>.
              </li>
            </ul>
            <div class="iconLanguage">
              <!-- SVG langages -->
              <?php include("./langage_svg.php"); ?>
            </div>
          </div>
        </div>
        <div class="relative">
          <h2>INFORMATIONS COMPLÉMENTAIRES</h2>
          <label class="btn" for="check4">▼</label>
          <input class="checkBurger" id="check4" type="checkbox" />
          <div class="contenu trois flex-center">
            <div class="conteneur" style="left:-50px;">
              <div class="conteneur-flotant0">
                <div class="panneau categorie droite">Loisirs &rarr;<span class="nom-categorie">cliquez</span></div>
                <div class="panneau droite-un"><img src="./img/cyclisme.jpg" alt="cyclisme" /><span class="nomC">Cyclisme</span></div>
                <div class="panneau droite-deux"><img src="./img/vtt.jpg" alt="vtt" /><span class="nomC">VTT</span></div>
                <div class="panneau droite-trois"><img src="./img/randonnee.jpg" alt="rando" /><span class="nomC">Randonnée</span></div>
              </div>
            </div>
            <div class="conteneur" style="top: 100px; left:50px;">
              <div class="conteneur-flotant1">
                <div class="panneau categorie gauche">&larr; Langues<span class="nom-categorie">cliquez</span></div>
                <div class="panneau  gauche-un"><img src="./img/uk.jpg" alt="uk" /><span class="nomC">Notion</span></div>
                <div class="panneau  gauche-deux"><img src="./img/uk.jpg" alt="uk" /><span class="nomC">Doc.Technique</span></div>
              </div>
            </div>
            <div class="conteneur" style="top: 200px; left:-50px;">
              <div class="conteneur-flotant0">
                <div class="panneau categorie droite">Intérêts &rarr;<span class="nom-categorie">cliquez</span></div>
                <div class="panneau droite-un"><img src="./img/nature.jpg" alt="nature" /><span class="nomC">Nature</span></div>
                <div class="panneau droite-deux"><img src="./img/physique.jpg" alt="physique" /><span class="nomC">Physique</span></div>
                <div class="panneau droite-trois"><img src="./img/technologie.jpg" alt="techno" /><span class="nomC">Technologies</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- JAVA SCRIPT -->
  <script src="../../lib_fonction.js"></script>
</body>

</html>