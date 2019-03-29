
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
	body{
		font-family: 'Work Sans', sans-serif;

		width:100%;
		height:100%;
		overflow: hidden;
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
	.flexbox a:hover  {
		background-color:  #2D8BC0;
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

        $id = $_GET['id'];
			$queryText = "DELETE FROM article WHERE NumArt = :id ";
			$query = $bdd->prepare($queryText);
			$query->execute(array(':id' => $id,));

?>
<img class="show" src="images/logo.png" alt="logo" />

<div class=flexbox>
<p>Votre article est bien supprimé<p>
<a href="modif.php">Retour aux Modifications</a>
<a href="index.php">Retour au site</a>
</a>
</body>
</html>
