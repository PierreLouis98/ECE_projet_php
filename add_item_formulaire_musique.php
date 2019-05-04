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
<body>

<nav class="navbar navbar-expand-md">
<a class="navbar-brand" href="#"><img src="logo.png" height='75' width='90'/><br>	PENROSE</a>
<button class="navbar-toggler navbar-dark" type="button" datatoggle="collapse" data-target="#main-navigation" >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link"
href="Categorie.php">Catégories</a></li>
<li class="nav-item"><a class="nav-link" href="#">Vente Flash</a></li>
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
        <legend> Ajout Items Musique</legend>
		<form action="login1.php" method="post" >
		<table>
            <p>
                <label for="catnom"> Nom  </label>
                <input class="text" type="text" name="catnom" id="catnom" value=""/>
            </p>
            
            <p>
                <label for="catdesct"> Artiste </label>                   
                <input class="text" type="text" name="catdesct" id="catdesct" value=""/>
            </p>
            <p>
                <label for="catdesct"> Description </label>                   
                <TEXTAREA class="text" rows=4 cols=40></TEXTAREA>
            </p>
			<p>
			    <label for="catdesct"> Date </label>  
                <input type="date" name="d" value="">
            </p>
			
			<p>
                <label for="catdesct"> Prix </label>                   
                <input type="number" name="prix" value="0€" />
            </p>
			
     
     <label for="mon_fichier"> <br> Photo de l'article ( max. 1 Mo) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="mon_fichier" id="mon_fichier" /><br /> <br>
	 
	 
    
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

<footer class="page-footer3">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12">


<h4 class="contact2">Contact<br> <br>
37, quai de Grenelle, 75015 Paris, France <br>
penrose@edu.ece.fr <br>
06 22 61 69 40 <br>
06 13 99 67 66
</h4>

</div>
</div>
</div>
<div class="copyright">&copy; 2019 Copyright | Droit
d'auteur: webDynamique.ece.fr </div>
</footer>
</body>
</html>
