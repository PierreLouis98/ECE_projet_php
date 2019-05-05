<!DOCTYPE html>

<html>
<head>
<title>TP sur Bootstrap</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script
src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="styles.css">
<script type="text/javascript">
$(document).ready(function(){
$('.header').height($(window).height());
});
</script>
</head>
	<?php // AJOUTER UN ITEM DANS item et vetement

			// vetement
			$couleur = isset($_POST["titre"])? $_POST["titre"] : "";
			$sexe = isset($_POST["Femme"])? "Femme" : "Homme";
			$marque = isset($_POST["marque"])? $_POST["marque"] : "";
			$taille = isset($_POST["taille"])? $_POST["taille"] : "";
			// item
			$titre = isset($_POST["titre"])? $_POST["titre"] : "";
			$video = "";
			$photo = isset($_POST["photo"])? $_POST["photo"] : "";
			$pho = basename($photo);
			$desc = isset($_POST["description"])? $_POST["description"] : "";
			$categorie = "Vetements";
			$prix = isset($_POST["prix"])? $_POST["prix"] : "";
			
			$database = "ece_amazon";
			$db_handle = mysqli_connect('localhost', 'root', 'root');
			$db_found = mysqli_select_db($db_handle, $database);
			if ($db_found) {
				if (isset($_POST["button1"])){
					$sql = "INSERT INTO items(Titre, Photos, Description, Video, Categorie, Prix) VALUES('$titre', '$pho', '$desc', '$video', '$categorie', '$prix')";
					$result = mysqli_query($db_handle, $sql);
					$sql = "SELECT * FROM items WHERE Titre='$titre'";
					$result = mysqli_query($db_handle, $sql);
					$data = mysqli_fetch_assoc($result);
					$id = $data['ID'];
					$sql = "INSERT INTO vetements(id, couleur, taille, marque, sexe) VALUES('$id', '$couleur', '$taille', '$marque', '$sexe')";
					$result = mysqli_query($db_handle, $sql);
					
				} 
				else {echo "WHAT THE FUCK";}
			}		
			else {echo "Database not found";}
			
			mysqli_close($db_handle);	
	?>
<body>

<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="https://sites.google.com/site/tpe44lesillusionsoptiques/info-presse-classeur/le-triangle-de-penrose"><img src="logo.png" height='75' width='90'/><br>	PENROSE</a>
<button class="navbar-toggler navbar-dark" type="button" datatoggle="collapse" data-target="#main-navigation" >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link"
href="Categorie.php">Catégories</a></li>
<li class="nav-item"><a class="nav-link" href="Venteflash.php">Vente Flash</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_vendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_admi.php">Administrateur</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_acheteur.php">Mon Compte</a></li>
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70' ></a>
<a class="navbar-brand" href="logout.php"><img class="deco" src="Deco.png" height='50' width='50'> </a>
</ul>
</div>
</nav>

<div class="container features">
	<div class="row">
		<div id="conteneur">
			<fieldset>
				<legend> Ajout Items vetements </legend>
				<form method="post" >
				<table>
					<p>
							<label for="titre"> Nom  </label>
							<input class="text" type="text" name="titre" id="titre" value=""/>
					</p>
					<p>
						<label for="marque"> Marque </label>                   
						<input class="text" type="text" name="marque" id="marque" value=""/>
					</p>
					<p>
						<label for="couleur"> Couleur </label>                   
						<input class="text" type="text" name="couleur" id="couleur" value=""/>
					</p>
					<p>
						<label for="description"> Description </label>                   
						<input class="text" name="description"/>
					</p>
					<p>
					   <label> Homme
						<input type="radio" name="Homme" value="Homme">
						</label>
						<label> Femme
						<input type="radio" name="Femme" value="Femme">
						</label>
					</p>
					<p> 
						<select name="taille" id="taille">
							<option>XS</option>
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
							<option>XXL</option>
						</select>
					</p>
					</p>
					<label for="photo"> <br> Photo de l'article ( max. 1 Mo) :</label><br />
					<input type="file" name="photo">
					<p>
						<label for="prix"> Prix </label>                   
						<input type="text" name="prix" value="0€" />
					</p>
					<p> 
						<input type="submit" name="button1" value="Soumettre"/>
					</p>
				</table>
				</form>
			</fieldset>
		</div>
	</div>
</div>


<footer class="page-footer">
<div class="container">
<div class="row">


<h4 class="contact2">Contact<br> <br>
37, quai de Grenelle, 75015 Paris, France <br>
penrose@edu.ece.fr <br>
06 22 61 69 40 <br>
06 13 99 67 66
</h4>

</div>
</div>
<div class="copyright">&copy; 2019 Copyright | Droit
d'auteur: webDynamique.ece.fr </div>
</footer>
</body>
</html>
