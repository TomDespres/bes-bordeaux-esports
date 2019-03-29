
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
	body{
		font-family: 'Work Sans', sans-serif;

		width:100%;
		/* height:100%; */
		background-color: #1E1E1E;
		color: white;
	}
	.flexbox{
		width:100vw;
		height:100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
	}

	.flexbox a  {
		text-decoration: none;
		color:black;
		border-radius: 10px;
		padding: 10px;
		background-color: white;


	}
	footer{
	  position: fixed;
	  bottom:0;
	  height:20px;
	  width:100%;
	  background-color: black;
	  text-align: center;
	  color:white;

	}
	footer a{
	  text-decoration: none;
	  color: #FFFFFF;
	  font-size: 12px;
	}
.show{
	position:fixed;
	right:-50vw;
	bottom:-50vh;

	filter: saturate(0%);
	opacity:0.1;
	width:80%;
	display: block;
	z-index: -5;
}
	</style>
</head>
<body>

<?php

			try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=blogart;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
		die('Erreur : '.$e->getMessage());
		}

	if ((isset($_POST['NumArt'])) && (isset($_POST['DtCreA'])) && (isset($_POST['LibTitrA'])) && (isset($_POST['LibChapoA'])) && (isset($_POST['Parag1A'])) && (isset($_POST['LibSsTitr1'])) && (isset($_POST['Parag2A'])) && (isset($_POST['LibSsTitr2'])) && (isset($_POST['Parag3A'])) && (isset($_POST['LibConclA'])) && (isset($_POST['UrlPhotA'])))
	{

	if (isset($_POST['NumArt']) && !empty($_POST['NumArt'])) {
			$NumArt = $_POST['NumArt'];
		}

	if (isset($_POST['DtCreA']) && !empty($_POST['DtCreA'])) {
			$DtCreA = $_POST['DtCreA'];
		}

	if (isset($_POST['LibTitrA']) && !empty($_POST['LibTitrA'])) {
			$LibTitrA = $_POST['LibTitrA'];
		}

	if (isset($_POST['LibChapoA']) && !empty($_POST['LibChapoA'])) {
			$LibChapoA = $_POST['LibChapoA'];
		}

	if (isset($_POST['Parag1A']) && !empty($_POST['Parag1A'])) {
			$Parag1A = $_POST['Parag1A'];
		}

	if (isset($_POST['LibSsTitr1']) && !empty($_POST['LibSsTitr1'])) {
			$LibSsTitr1 = $_POST['LibSsTitr1'];
		}

	if (isset($_POST['Parag2A']) && !empty($_POST['Parag2A'])) {
			$Parag2A = $_POST['Parag2A'];
		}

	if (isset($_POST['LibSsTitr2']) && !empty($_POST['LibSsTitr2'])) {
			$LibSsTitr2 = $_POST['LibSsTitr2'];
		}

	if (isset($_POST['Parag3A']) && !empty($_POST['Parag3A'])) {
			$Parag3A = $_POST['Parag3A'];
		}

	if (isset($_POST['LibConclA']) && !empty($_POST['LibConclA'])) {
			$LibConclA = $_POST['LibConclA'];
		}

	if (isset($_POST['UrlPhotA']) && !empty($_POST['UrlPhotA'])) {
			$UrlPhotA = $_POST['UrlPhotA'];
		}

	if(isset($_POST['submit']));

	}
    $NumAngl = 'DF56K';
	$NumThem = '2ZQ4';
	$NumLang = 'FRAN01';


         // 4. Preparation de la requete
        $queryText = 'INSERT INTO article (NumArt, DtCreA, LibTitrA, LibChapoA, Parag1A, LibSsTitr1, Parag2A, LibSsTitr2, Parag3A, LibConclA, UrlPhotA, NumAngl, NumThem, NumLang) VALUES (:NumArt, :DtCreA, :LibTitrA, :LibChapoA, :Parag1A, :LibSsTitr1, :Parag2A, :LibSsTitr2, :Parag3A, :LibConclA, :UrlPhotA, :NumAngl, :NumThem, :NumLang);';
        $query = $bdd->prepare($queryText);


       try {
			// 5. Lancement de la requete
        $query->execute(array(
          ':NumArt' => $NumArt,
          ':DtCreA' => $DtCreA,
          ':LibTitrA' => $LibTitrA,
          ':LibChapoA' => $LibChapoA,
          ':Parag1A' => $Parag1A,
          ':LibSsTitr1' => $LibSsTitr1,
          ':Parag2A' => $Parag2A,
          ':LibSsTitr2' => $LibSsTitr2,
          ':Parag3A' => $Parag3A,
          ':LibConclA' => $LibConclA,
          ':UrlPhotA' => $UrlPhotA,
          ':NumAngl' => $NumAngl,
          ':NumThem' => $NumThem,
          ':NumLang' => $NumLang,
          ));
		}

		catch (PDOException $e) {
			echo 'Echec de connexion : ' . $e->getMessage();
		}

?>
<img class="show" src="images/logo.png" alt="logo" />

<div class=flexbox>
<p>Votre article est bien enregistré<p>
<a href="index.php">Retour au site</a>
</div>
</body>
</html>
