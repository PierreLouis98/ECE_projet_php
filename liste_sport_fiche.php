
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
href="Categorie.php">Catégories</a></li>
<li class="nav-item"><a class="nav-link" href="#">Vente Flash</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_vendeur.php">Vendre</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_admi.php">Administrateur</a></li>
<li class="nav-item"><a class="nav-link"
href="verif_acheteur.php">Mon Compte</a></li>
<a class="navbar-brand" href="Panier.php"><img class="panier" src="panier.png" height='70' width='70'> </a>
<a class="navbar-brand" href="logout.php"><img class="deco" src="Deco.png" height='50' width='50'> </a>
</ul>
</div>
</nav>

<?php

$database = "ece_amazon"; 
$db_handle = mysqli_connect('localhost', 'root', 'root');
$db_found = mysqli_select_db($db_handle, $database);



if($db_found)
{
	if(isset($_GET['show']))
	{
		$product=$_GET['show'];
		$sql = "SELECT * from items WHERE Titre='$product'";
		$result = mysqli_query($db_handle, $sql);
		$data = mysqli_fetch_assoc($result);
		$description=$data["Description"];
		//$description_finale=wordwrap($description,200,'<br />',false);
		?>
		<br>
		<div class="texte-2" style="text-align: center;">
			<img src="imgs/<?php echo $data["Titre"];?>.jpg">
			<h1><?php echo $data["Titre"];?></h1>
			<h2><?php echo $data["Prix"];?> EUR</h2>
			<!-- <h5><?php echo $description_finale;?></h5> -->
			<a href="panier.php"><h3>Ajouter au panier</h3></a>
			<!--<a href="verificationCarteAcheteur.php"><h3>Acheter en un clic</h3></a>  -->
			<a href="liste_livre_fiche.php"><h4>Retour</h4></a>
		</div><br>
		<?php
	}
	else
	{	
		?><div class="texte-2"><h1>Bienvenue dans la catégorie Sport</h1></div><?php
		$sql = "SELECT * from items WHERE Categorie='Sports'";
		$result = mysqli_query($db_handle, $sql);
		while($data = mysqli_fetch_assoc($result))
		{
			$length=200;
			$description=$data["Description"];
			$new_description=substr($description,0,$length)."...";
			$description_finale=wordwrap($new_description,75,'<br />',false);
			?>
			<br><br>
			
			<div class="texte-2">
				<a href="?show=<?php echo $data["Titre"];?>"><h2><?php echo $data["Titre"];?></h2></a>
			</div>
			
			<div class="texte-2">
				<h3><?php echo $data["Prix"];?> EUR</h3>
			</div>
			<div class="texte-2">
				<a href="Panier.php"><h4>Ajouter au panier</h4></a>
			</div>
			<br/><br/><br/>	
			<?php 
		}
	}
		/*else {
			echo "Database not found";
		}*/
		mysqli_close($db_handle);
	}
	
	?>