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
	<?php // Code qui marche pour ajouter un vendeur
		$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
		$mail = isset($_POST["mail"])? $_POST["mail"] : "";
		$nom = isset($_POST["nom"])? $_POST["nom"] : "";
		$profil = isset($_POST["profil"])? $_POST["profil"] : "";
		$pro = basename($profil);
		$fond = isset($_POST["fond"])? $_POST["fond"] : "";
		$fo = basename($fond);
		$statut = "vendeur";
		$connected = 0;
		
		$database = "ece_amazon";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		if ($db_found) {
			if (isset($_POST["button1"])){
				$sql = "INSERT INTO vendeur(nom, mail, pseudo, fond, photo) VALUES('$nom', '$mail', '$pseudo', '$fo', '$pro')";
				$result = mysqli_query($db_handle, $sql);
				$sql = "INSERT INTO logins(statut, identifiant, password, connected) VALUES('$statut', '$mail', '$pseudo', '$connected')";
				$result = mysqli_query($db_handle, $sql);
			}
		}			
		else {echo "Database not found";}
		
		mysqli_close($db_handle);
	?>
</head>
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
href="login.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link"
href="login.php">Administrateur</a></li>
<li class="nav-item"><a class="nav-link"
href="login.php">Mon Compte</a></li>
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70' > </a>
<a class="navbar-brand" href="logout.php"><img class="deco" src="Deco.png" height='50' width='50'> </a>
</ul>
</div>
</nav>

<div class="container features">
	<div class="row">
		<div id="conteneur">
			<fieldset>
				<legend> Compte vendeur </legend>
				<form method="post">
				<table>
					<p>
						<label for="pseudo"> Pseudo </label>
						<input class="text" type="text" name="pseudo" id="pseudo" value=""/>
					</p>
					<p>
						<label for="mail"> Adresse Mail </label>                   
						<input class="text" type="text" name="mail" id="mail" value=""/>
					</p>
					<p>
						<label for="nom"> Nom </label>                   
						<input class="text" type="text" name="nom" id="nom" value=""/>
					</p>
					
			 
			 <!--<label for="profil"> Photo de profil ( max. 1 Mo) :</label><br />
			 <input type="hidden" name="profil" />
			 <input type="file" name="profil" id="profil" /><br /> <br />-->
			 <input type="file" name="profil">
			 
			 <!--<label for="fond"> Image de fond préférée :</label><br />
			 <input type="hidden" name="fond" />
			 <input type="file" name="fond" id="fond" /><br /> <br />-->
			 <input type="file" name="fond">
			
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
