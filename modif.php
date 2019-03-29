
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
		/* height:100%; */
		background-color: #1E1E1E;
		color: white;
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
	.flexbox{
		margin:auto;
		width:50%;
		display: flex;
		justify-content:flex-end;
		align-items: center;
		margin-bottom: 10px;
	}

	.flexbox a  {
		text-decoration: none;
		color:black;
		border-radius: 10px;
		padding: 10px;
		margin-left: 10px;
		background-color: white;




	}
	.flexbox a:hover  {
		background-color:  #2D8BC0;
	}
	.flexbox2{
	display:flex;
	justify-content: center;
	flex-direction: column;
	height:100vh;
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
	<div class="flexbox2">
		<div>

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

	         if ($result) {

	        while ($row = $result->fetch()) {

	?>
		<div class=flexbox>

                    <td><?php echo $row["NumArt"]; ?></td>
                    <td><?php echo $row["DtCreA"]; ?></td>
                    <td><?php echo $row["LibTitrA"]; ?></td>

                    <td>
                    <!-- Bouton update -->
                    <a  href="modifier.php?id=<?php echo $row["NumArt"]; ?>" title="Modifier le post">modifier</a>

                    <!-- Bouton delete -->
                    <a href="supprimer.php?id=<?php echo $row["NumArt"]; ?>" title="Supprimer le post">supprimer</a>
                    </td>
                    <br>
									</div>

								<?php
							                }
							                $result->closeCursor();

							        }
							?>
						</div>
						</div>

<img class="show" src="images/logo.png" alt="logo" />
<footer>
<a href="writeArticle.php">Ecrire un article</a>
-
<a href="modif.php">Modifier un article</a>
-
<a href="cgu.html">Cgu</a>
</footer>
</body>
</html>
