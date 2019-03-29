<?php
?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">


<head>
  <meta charset="utf-8">
  <title>Article</title>

  <link rel="stylesheet" href="css/stylesheet.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/article.css" type="text/css" media="screen" />


  <!--FONT-->
  <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">


</head>

<body>

  <nav>
    <ul>
      <li>
        <a href="index.php" >Accueil</a>
        <div ></div>
      </li>
      <li>
        <a class="active" href="article.php">Articles</a>
        <div class="active" ></div>
      </li>
      <!-- <li>
        <a href="about.html">A propos</a>
        <div></div>
      </li>
      <li>
        <a href="contact.html">Mentions Légales</a>
        <div></div>
      </li> -->
    </ul>
  </nav>

  <img id="logo_min" src="images/logo.png" alt="logo" />


  <img id="bg_logo" src="images/logo.png" alt="logo" />

  <div id="container_article">
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
        <div>
          <h2><?= $LibTitrA ?></h2>
          <div class="anim_title">
          <div></div>
          <span><?= $LibChapoA ?></span>
        </div>
        </div>
        <img src="<?= $UrlPhotA ?>" alt="" />
        <div class="article_bloc">
        <div class="article_bloc_div">
        <p><?= $Parag1A ?></p>
        <h3><?= $LibSsTitr1 ?></h3>
        <p><?= $Parag2A ?></p>
        <h3><?= $LibSsTitr2 ?></h3>
        <p><?= $Parag3A ?></p>
        <p><?= $LibConclA ?></p>
      </div>
      </div>


      </article>
      <?php
            }
          }
        ?>
        <img class="show" src="images/logo.png" alt="logo" />

      <footer>
        <a href="writeArticle.php">Ecrire un article</a>
        -
        <a href="modif.php">Modifier un article</a>
        -
        <a href="cgu.html">Cgu</a>
      </footer>

</div>
  <script src="js/article.js" charset="utf-8"></script>
</body>

</html>
