
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style>
	body{
		font-family: 'Work Sans', sans-serif;

		width:100%;
		height:100%;
		overflow-x: hidden;
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
		width:90%;
		display: flex;
		justify-content:flex-end;
		margin-bottom: 10px;
		text-align: right;
	}

	.bouton  {
		text-decoration: none;
		color:black;
		border-radius: 10px;
		padding: 10px;
		margin-left: 10px;
		background-color: white;




	}
	.bouton:hover  {
		background-color:  #2D8BC0;
	}
	.flexbox2{
	display:flex;
	justify-content: center;
	align-items:center;
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
		<form  name="inscription" method="post" action="saisie.php">
			<div class="flexbox">
					<label for="NumArt" >NUMERO DE TON ARTICLE :</label><input type="text" name="NumArt"/></input>
				</div>
				<div class="flexbox">
			<label for="DtCreA" >Date :</label> <input type="date" name="DtCreA"/></input>
		</div>
		<div class="flexbox">

					<label for="LibTitrA" >Titre :</label> <input type="text" name="LibTitrA"/></input>
				</div>
						<div class="flexbox">
					<label for="LibChapoA" >Chapo :</label> <input type="text" name="LibChapoA"/></input>
				</div>
				<div class="flexbox">

	<label for="Parag1A" >Paragraphe 1 :</label> <input type="text" name="Parag1A"/></input>
</div>			<div class="flexbox">

			<label for="LibSsTitr1" >Sous-titre 1 :</label> <input type="text" name="LibSsTitr1"/></input>
		</div>
		<div class="flexbox">

			<label for="Parag2A" >Paragraphe 2 :</label> <input type="text" name="Parag2A"/></input>
		</div>
		<div class="flexbox">

			<label for="LibSsTitr2" >Sous-titre 2 :</label> <input type="text" name="LibSsTitr2"/></input>
		</div>
		<div class="flexbox">

			<label for="Parag3A" >Paragraphe 3 :</label> <input type="text" name="Parag3A"/></input>
		</div>
		<div class="flexbox">

			<label for="LibConclA" >Conclusion :</label> <input type="text" name="LibConclA"/></input>
		</div>
		<div class="flexbox">

				<label for="UrlPhotA" >Lien de la photo :</label> <input type="text" name="UrlPhotA"/></input>
			</div>

		
		<input class="bouton" name="valid" type="submit" value="SUBMIT">
	</div>

			</form>
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
