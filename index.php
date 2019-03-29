<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>BES - Bordeaux Esports</title>

  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" media="screen" />

  <!--FONT-->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

</head>

<body>
  <nav id="nav" class="hide">
    <ul>
      <li>
        <a href="index.php" class="active">Accueil</a>
        <div class="active"></div>
      </li>
      <li>
        <a href="article.php">Articles</a>
        <div></div>
      </li>
      <!-- <li>
        <a href="about.html">A propos</a>
        <div></div>
      </li>
      <li>
        <a href="contact.html">Contact</a>
        <div></div>
      </li> -->
    </ul>
  </nav>
  <img style="display: none;" id="logo_min" src="images/logo.png" alt="logo" />


  <img class="hide" id="bg_logo" src="images/logo.png" alt="logo" />

  <header id=logo_center>
    <div class="startInfo">
      <div>Cliquez pour<br>découvrir l'actu</div>
      <img src="images/arrow.png" />
    </div>
    <div id="start">

      <img class="center" id="logo_opacity" src="images/logo.png" alt="logo" />
      <a href="#">
        <img class="center" id="logo" src="images/logo.png" alt="" />
      </a>
    </div>
  </header>

  <div class="hide" id="container">
    <?php
        try
      {
      $bdd = new PDO('mysql:host=localhost;dbname=blogart;charset=utf8', 'root', '');
      }
      catch(Exception $e)
      {
      die('Erreur : '.$e->getMessage());
      }

      $queryText = 'SELECT * FROM article';

      $result = $bdd->query($queryText);




      if($result){

        while ($row=$result->fetch()) {
      $NumArt = $row['NumArt'];
      $DtCreA = $row['DtCreA'];
      $LibTitrA = $row['LibTitrA'];
      $LibChapoA = $row['LibChapoA'];
      $Parag1A = $row['Parag1A'];
      $LibSsTitr1 =$row ['LibSsTitr1'];
      $Parag2A = $row['Parag2A'];
      $LibSsTitr2 = $row['LibSsTitr2'];
      $Parag3A = $row['Parag3A'];
      $LibConclA = $row['LibConclA'];
      $UrlPhotA = $row['UrlPhotA'];

    ?>

      <article>
        <a class="article_a" href="article.php">

        <img src="<?= $UrlPhotA ?>" alt="" />
        <div>
          <h2><?= $LibTitrA ?></h2>
          <div></div>
          <span><?= $LibChapoA ?></span>

        </div>

      </a>
      </article>
      <?php
      }
      }
      ?>
<!--

      <article>
        <a class="article_a" href="#">

        <img src="images/logobgf.png" alt="" />
        <div>
          <h2>L'événement e-sport à ne pas manquer</h2>
          <div></div>
          <span>Bordeaux Geek Festival</span>
        </div>
      </a>

      </article>

      <article>
        <a class="article_a" href="#">

        <img src="images/logo.png" alt="" />
        <div>
          <h2>L'événement e-sport à ne pas manquer</h2>
          <div></div>
          <span>Bordeaux Geek Festival</span>
        </div>
      </a>

      </article> -->

      <footer>
        <a href="writeArticle.php">Ecrire un article</a>
        -
        <a href="modif.php">Modifier un article</a>
        -
        <a href="cgu.html">Cgu</a>

      </footer>

  </div>

  <script src="js/anim.js" charset="utf-8"></script>
</body>

</html>
