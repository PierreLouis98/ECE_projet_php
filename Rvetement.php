
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

<div> Cliquez sur le Vetement que vous souhaitez Supprimer
<?php // CODE PHP CORRESPONSDANT
		$database = "ece_amazon";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		session_start ();
		$id = 0;
		
		if ($db_found) 
		{
			if(isset($_GET['show']))
			{
				$product=$_GET['show'];
				$sql = "DELETE FROM items WHERE Titre='$product'";
				$result = mysqli_query($db_handle, $sql);
				$sql = "DELETE FROM vetements WHERE titre='$product'";
				$result = mysqli_query($db_handle, $sql);
				echo "Delete successful.";
			}
			$mail = $_SESSION['login'];
			$sql = "SELECT * FROM vendeur WHERE mail='$mail'";
			$result = mysqli_query($db_handle, $sql);
			$data = mysqli_fetch_assoc($result);
			$id = $data['id'];
			$sql = "SELECT * FROM items WHERE Categorie='Vetements' AND id_vend='$id'";
			$result = mysqli_query($db_handle, $sql);
			while($data = mysqli_fetch_assoc($result))
			{
				?>
				<br><br>
				
				<div class="texte-2">
					<a href="?show=<?php echo $data["Titre"];?>"><h2><?php echo $data["Titre"];?></h2></a>
				</div>	
				<?php 
			}	
		}		
		else {echo "Database not found";}
		mysqli_close($db_handle);
	?>
</div>

<footer class="page-footer3">
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