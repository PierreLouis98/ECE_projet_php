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
	<?php // AJOUTER UN ITEM DANS ITEM ET vetements  

			// musicslivres
			$titre = isset($_POST["titre"])? $_POST["titre"] : "";
			$auteur = isset($_POST["auteur"])? $_POST["auteur"] : "";
			$date = isset($_POST["date"])? $_POST["date"] : "";
			// item
			$video = isset($_POST["video"])? $_POST["video"] : "";
			$photo = isset($_POST["photo"])? $_POST["photo"] : "";
			$pho = basename($photo);
			$desc = isset($_POST["description"])? $_POST["description"] : "";
			$categorie = "Livres";
			$prix = isset($_POST["prix"])? $_POST["prix"] : "";
			
			$database = "ece_amazon";
			$db_handle = mysqli_connect('localhost', 'root', '');
			$db_found = mysqli_select_db($db_handle, $database);
			if ($db_found) {
				if (isset($_POST["button1"])){
					$sql = "INSERT INTO items(Titre, Photos, Description, Video, Categorie, Prix) VALUES('$titre', '$pho', '$desc', '$video', '$categorie', '$prix')";
					$result = mysqli_query($db_handle, $sql);
					$sql = "SELECT * FROM items WHERE Titre='$titre'";
					$result = mysqli_query($db_handle, $sql);
					$data = mysqli_fetch_assoc($result);
					$id = $data['ID'];
					$sql = "INSERT INTO musicslivres(id, auteur, titre, sortie) VALUES('$id', '$auteur', '$titre', '$date')";
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
href="login.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link"
href="login.php">Administrateur</a></li>
<li class="nav-item"><a class="nav-link"
href="login.php">Mon Compte</a></li>
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70' ></a>
<a class="navbar-brand" href="logout.php"><img class="deco" src="Deco.png" height='50' width='50'> </a>
</ul>
</div>
</nav>

<div class="container features">




<div class="row">




<!-- 
Les balises <form> sert à dire que c'est un formulaire
on lui demande de faire fonctionner la page connexion.php une fois le bouton "Connexion" cliqué
on lui dit également que c'est un formulaire de type "POST"
 
Les balises <input> sont les champs de formulaire
type="text" sera du texte
type="password" sera des petits points noir (texte caché)
type="submit" sera un bouton pour valider le formulaire
name="nom de l'input" sert à le reconnaitre une fois le bouton submit cliqué, pour le code PHP
 -->
 


<div id="conteneur">
    <fieldset>
        <legend> Ajout Items vetements </legend>
		<form action="login1.php" method="post" >
		<table>
            <p>
                <label for="catnom"> Type  </label>
                <input class="text" type="text" name="catnom" id="catnom" value=""/>
            </p>
            <p>
                <label for="catdesct"> Marque </label>                   
                <input class="text" type="text" name="catdesct" id="catdesct" value=""/>
            </p>
            <p>
                <label for="catdesct"> Description </label>                   
                <TEXTAREA class="text" rows=4 cols=40></TEXTAREA>
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
                <select name="taille" id="catdesct" >
<option>XS</option>
<option>S</option>
<option>M</option>
<option>L</option>
<option>XL</option>
<option>XXL</option>

</select>

            </p>
			<p> 
			
     
     <label for="mon_fichier"> <br> Photo de l'article ( max. 1 Mo) :</label><br /> <br/> 
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br /><br />
	 
	 <label for="mon_fichier"> Autre Photo de l'Article:</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br /><br>
	 
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
