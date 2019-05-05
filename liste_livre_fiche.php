
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
$db_handle = mysqli_connect('localhost', 'root', '');
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
		<div  style="margin-left: 750px; color:#AB0606; margin-top: 50px;">
			<img style="margin-left: -700px; margin-bottom: -300px;" src="<?php echo $data["Photos"];?>">
			<h1><?php echo $data["Titre"];?></h1>
			<h2 style="margin-left: 40px;"> <?php echo $data["Prix"];?> €</h2>
			<!-- <h5><?php echo $description_finale;?></h5> -->
			
			<a href="Panier.php?action=ajout&amp;l=<?php echo $data["Titre"];?>&amp;q=1&amp;p=<?php echo $data["Prix"];?>&amp;ph=<?php echo $data["Photos"];?>" onclick="window(this.href, '', 
'toolbar=no, location=no, directories=no, status=yes, scrollbars=yes, resizable=yes, copyhistory=no, width=600, height=350'); return false;">Ajouter au panier</a>
			<!--<a href="verificationCarteAcheteur.php"><h3>Acheter en un clic</h3></a>  -->
			<a href="liste_livre_fiche.php"><h4 style="margin-left: 40px; color:#000000;" >Retour</h4></a>
		</div><br>
		<?php
	}
	else
	{	
		?><div style="margin-left: 40px; margin-top: 40px; " ><h1 > Livres : </h1></div><?php
		$sql = "SELECT * from items WHERE Categorie='Livres'";
		$result = mysqli_query($db_handle, $sql);
		while($data = mysqli_fetch_assoc($result))
		{
			$length=200;
			$description=$data["Description"];
			$new_description=substr($description,0,$length)."...";
			$description_finale=wordwrap($new_description,75,'<br />',false);
			?>
			<br><br>
			
			<div style="margin-left:100px;">
				<a href="?show=<?php echo $data["Titre"];?>"><h2 style="color:#AB0606;"><?php echo $data["Titre"];?></h2></a>
				<h3 style="color:#AB0606;"><?php echo $data["Prix"];?> € </h3>	
				
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
	
	<footer class="page-footer2">
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