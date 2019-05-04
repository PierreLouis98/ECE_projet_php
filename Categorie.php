
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
<a class="navbar-brand" href="https://sites.google.com/site/tpe44lesillusionsoptiques/info-presse-classeur/le-triangle-de-penrose"><img class="logo" src="logo.png" height='75' width='90'/><br>	PENROSE</a>
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
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70'> </a>
<a class="navbar-brand" href="logout.php"><img class="deco" src="Deco.png" height='50' width='50'> </a>
</ul>
</div>
</nav>


<div class="container features">


<div>

<div class="row">

<div class="col-xs-5 col-sm-10">	
<h3 class="feature-title3"> LIVRES </h3>
<a href="liste_livre_fiche.php"> <img src="addlivre.jpg" height='250' width='400' ></a> <br><br><br>
</div>

<div class="col-xs-5 col-sm-10">
<h3 class="feature-title4"> MUSIQUES </h3>
<a href="liste_musique_fiche.php"> <img src="addmusique.jpg" height='250' width='400'> </a> <br><br><br>
</div>
</div>


<div class="row">

<div class="col-xs-5 col-sm-10">
<h3 class="feature-title5"> VÊTEMENTS </h3>
<a href="liste_vetements_fiche.php"><img src="addvet.png" height='250' width='400' > </a> <br><br><br>
</div>

<div class="col-xs-5 col-sm-10">
<h3 class="feature-title6"> SPORTS/LOISIRS </h3>
<a href="liste_sport_fiche.php"><img src="addsport.jpg" height='250' width='400'> </a>
</div>

</div>
</div>
</div>
</div>



<!--

<form action="liste_livre_fiche.php" method="post">
<div class="container features2">


<div class="row">

<div class="col-xs-6 col-sm-50">	
<input class="button1" type="submit" value="Livres" name="button2"> 
<img src="addlivre.jpg" height='250' width='400' > <br><br>
</div>

<div class="col-xs-6 col-sm-50">
<input class="button2" type="submit" value="Albums" name="button4">
<img src="addmusique.jpg" height='250' width='400'><br><br>
</div>


<div class="row">

<div class="col-xs-6 col-sm-50">
<input class="button3" type="submit" value="Vetements" name="button1">
<img src="addvet.png" height='250' width='400' > <br><br>
</div>

<div class="col-xs-6 col-sm-50">
<input class="button4" type="submit" value="Sports" name="button3">  
<img class="sport" src="addsport.jpg" height='250' width='400' > <br><br>
</div>

</div>
</div>
</div>
</div>
</form>
-->
<footer class="page-footer">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12">

</div>

<h4 class="contact">Contact<br> <br>
37, quai de Grenelle, 75015 Paris, France <br>
info@webDynamique.ece.fr <br>
+33 01 02 03 04 05 <br>
+33 01 03 02 05 04
</h4>

</div>
</div>
<div class="copyright">&copy; 2019 Copyright | Droit
d'auteur: webDynamique.ece.fr </div>
</footer>
</body>
</html>