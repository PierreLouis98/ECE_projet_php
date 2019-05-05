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
	<?php // AJOUTER UN ITEM DANS ITEM ET sport
			session_start();
			// musicslivres
			$couleur = isset($_POST["titre"])? $_POST["titre"] : "";
			$sport = isset($_POST["sport"])? $_POST["sport"] : "";
			$marque = isset($_POST["marque"])? $_POST["marque"] : "";
			// item
			$titre = isset($_POST["titre"])? $_POST["titre"] : "";
			$video = isset($_POST["video"])? $_POST["video"] : "";
			$photo = isset($_POST["photo"])? $_POST["photo"] : "";
			$pho = basename($photo);
			$desc = isset($_POST["description"])? $_POST["description"] : "";
			$categorie = "Sports";
			$prix = isset($_POST["prix"])? $_POST["prix"] : "";
			
			$database = "ece_amazon";
			$db_handle = mysqli_connect('localhost', 'root', '');
			$db_found = mysqli_select_db($db_handle, $database);
			if ($db_found) {
				if (isset($_POST["button1"])){
					$mail = $_SESSION['login'];
					if ($mail != "JeanMich") {
					$sql = "SELECT * FROM vendeur WHERE mail='$mail'";
					$result = mysqli_query($db_handle, $sql);
					$data = mysqli_fetch_assoc($result);
					$id_vend = $data['id'];
					}
					else {$id_vend = 0;}
					$vendu = 0;
					$sql = "INSERT INTO items(Titre, Photos, Description, Video, Categorie, Prix, vendu, id_vend) VALUES('$titre', '$pho', '$desc', '$video', '$categorie', '$prix', '$vendu', '$id_vend')";
					$result = mysqli_query($db_handle, $sql);
					$sql = "SELECT * FROM items WHERE Titre='$titre'";
					$result = mysqli_query($db_handle, $sql);
					$data = mysqli_fetch_assoc($result);
					$id = $data['ID'];
					$sql = "INSERT INTO sports(id, marque, couleur, sport) VALUES('$id', '$marque', '$couleur', '$sport')";
					$result = mysqli_query($db_handle, $sql);
					
				} 
				
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
				<legend> Ajout Items Sports et loisirs </legend>
				<form method="post" >
					<table>
						<p>
							<label for="titre"> Titre  </label>
							<input class="text" type="text" name="titre" id="titre" value=""/>
						</p>
						<p>
							<label for="couleur"> Couleur  </label>
							<input class="text" type="text" name="couleur" id="couleur" value=""/>
						</p>
						<p>
							<label for="sport"> Sport </label>                   
							<input class="text" type="text" name="sport" id="sport" value=""/>
						</p>
						<p>
							<label for="description"> Description </label>                   
							<input class="text" name="description"/>
						</p>
						<p>
							<label for="marque"> Marque </label>  
							<input type="text" name="marque" value="">
						</p>
						
						<p>
							<label for="prix"> Prix </label>                   
							<input type="text" name="prix" value="0€" />
						</p>
						<label for="photo"> <br> Photo de l'article ( max. 1 Mo) :</label><br />
						 <input type="file" name="photo">
						<p> 
							<br>
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
