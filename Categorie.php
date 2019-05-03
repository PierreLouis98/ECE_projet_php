
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
<a class="navbar-brand" href="#"><img class="logo" src="logo.png" height='75' width='90'/><br>	PENROSE</a>
<button class="navbar-toggler navbar-dark" type="button" datatoggle="collapse" data-target="#main-navigation" >
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="main-navigation">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link"
href="Categorie.php">Categorie</a></li>
<li class="nav-item"><a class="nav-link" href="#">Vente Flash</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_vendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_admi.php">Administrateur</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_acheteur.php">Mon Compte</a></li>
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70' ></a>
</ul>
</div>
</nav>

<div class="container features2">


<div>
<form action="Liste_item1.php" method="post">
<div class="row">

<div class="col-xs-2 col-sm-50">
	
<h3 class="feature-title2"> Livres/Comics</h3>
<img src="addlivre.jpg" height='250' width='400'>


</div>

<div class="col-xs-2 col-sm-1">
<h3 class="feature-title2"> Albums/Musique </h3>
<img src="addmusique.jpg" height='250' width='400'>
</div>


<div class="row">

<div class="col-xs-6 col-sm-50">
<h3 class="feature-title2"> Vetements</h3>
<img src="addvet.png" height='250' width='400' >
</div>

<div class="col-xs-6 col-sm-1">
<h3 class="feature-title2"> Sports/Loisirs </h3>
<img src="addsport.jpg" height='250' width='400'>
</div>

</div>
</div>


</form>
</div>
</div>

<footer class="page-footer">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-12">

</div>

<h4 class="contact">Contact<br> <br>
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