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
<?php // CODE PHP CORRESPONSDANT
		session_start();
		$cardtype = isset($_POST["cardtype"])? $_POST["cardtype"] : "";
		$cardsecu = isset($_POST["cardsecu"])? $_POST["cardsecu"] : "";
		$cardexp = isset($_POST["cardexp"])? $_POST["cardexp"] : "";
		$cardnumber = isset($_POST["cardnumber"])? $_POST["cardnumber"] : "";
		$cardname = isset($_POST["cardname"])? $_POST["cardname"] : "";
		$nom = isset($_POST["nom"])? $_POST["nom"] : "";
		
		$database = "ece_amazon";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) 
		{	
			if (isset($_POST["button1"]))
			{
				$sql = "SELECT * FROM clients WHERE nom='$nom'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				if (($data['cardtype']==$cardtype) && ($data['cardnumber']==$cardnumber) && ($data['cardname']==$cardname) && ($data['cardexp']==$cardexp) && ($data['cardsecu']==$cardsecu))
				{	
					$nbArticles=count($_SESSION['panier']['libelleProduit']);
					if ($nbArticles <= 0){ 
					header ('location : Panier.php');
					

					}
				    else
					   {
						   for ($i=0 ;$i < $nbArticles ; $i++)
						  {
							$sql = "UPDATE items SET vendu=(vendu+". $_SESSION['panier']['qteProduit'][$i] .") WHERE Titre='". $_SESSION['panier']['libelleProduit'][$i] ."'";
							$result = mysqli_query($db_handle, $sql);
						    //$sql = "DELETE FROM items WHERE Titre='". $_SESSION['panier']['libelleProduit'][$i] ."'";
						    //$result = mysqli_query($db_handle, $sql);
						  }
						  session_unset();
						  session_destroy();
						  header('location: merci.php');
					   }
				}
				else {	echo "Données bancaires incorrectes";	}
			}
			else {echo "non cliqué";}
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
<form method="post">
        <h1> Valider la transaction: </h1>
        <p>Les champs obligatoires sont suivis par <strong><abbr title="required">*</abbr></strong>.</p>
        <section>
            <h2>Informations de contact</h2>
            
            <p>
              <label for="nom">
                <span>Nom :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="nom" name="nom">
            </p>
            <p>
              <label for="name">
                <span>Adresse :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
			<p>
              <label for="name">
                <span>Ville :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
			<p>
              <label for="name">
                <span>Code Postal :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
            <p>
			<p>
              <label for="name">
                <span>Pays :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
            <p>
			<p>
              <label for="name">
                <span>Téléphone :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
            <p>
              <label for="mail">
                <span>E-mail :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="email" id="mail" name="usermail">
            </p>
           
        </section>
        <section>
            <h2>Informations de paiement</h2>
            <p>
              <label for="cardtype">
                <span>Type de carte :</span>
              </label>
              <select id="card" name="cardtype">
                <option value="visa">Visa</option>
                <option value="mc">Mastercard</option>
                <option value="amex">American Express</option>
              </select>
            </p>
            <p>
              <label for="cardnumber">
                <span>Numéro :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="text" id="cardnumber" name="cardnumber">
            </p>
            <p>
              <label for="date">
                <span>Validité :</span>
                <strong><abbr title="required">*</abbr></strong>
                <em>format mm/aa</em>
              </label>
              <input type="text" id="date" name="cardexp">
            </p>
			<p>
              <label for="number">
                <span>Code de sécurité :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="text" id="number" name="cardsecu">
            </p>
			<p>
              <label for="name">
                <span>Nom du porteur de la carte :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="cardname">
            </p>
        </section>
        <p> 
		<br>
		<input type="submit" name="button1" value="Valider la commande"/>
		</p>
    </form>
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

