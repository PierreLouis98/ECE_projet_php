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
	<?php
	// logins
		$pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
		$password = isset($_POST["password"])? $_POST["password"] : "";
		$statut = "client";
		$connected = 0;
	// clients
		$mail = isset($_POST["mail"])? $_POST["mail"] : "";
		$nom = isset($_POST["nom"])? $_POST["nom"] : "";
		$prenom = isset($_POST["prenom"])? $_POST["prenom"] : "";
		$adresse = isset($_POST["adresse"])? $_POST["adresse"] : "";
		$sexe = isset($_POST["femme"])? "Femme" : "Homme";
		$cardtype = isset($_POST["cardtype"])? $_POST["cardtype"] : "";
		$cardsecu = isset($_POST["cardsecu"])? $_POST["cardsecu"] : "";
		$cardexp = isset($_POST["cardexp"])? $_POST["cardexp"] : "";
		$cardname = isset($_POST["cardname"])? $_POST["cardname"] : "";
		$cardnumber = isset($_POST["cardnumber"])? $_POST["cardnumber"] : "";
	// connexion
		$database = "ece_amazon";
		$db_handle = mysqli_connect('localhost', 'root', '');
		$db_found = mysqli_select_db($db_handle, $database);
		
		if ($db_found) {
			if (isset($_POST["bouton"])){
				$sql = "INSERT INTO clients(nom, prenom, sexe, mail, adresse, cardtype, cardnumber, cardexp, cardsecu, cardname) VALUES('$nom', '$prenom', '$sexe', '$mail', '$adresse', '$cardtype', '$cardnumber', '$cardexp', '$cardsecu', '$cardname')";
				$result = mysqli_query($db_handle, $sql);
				$sql = "SELECT * FROM clients WHERE nom='$nom'";
				$result = mysqli_query($db_handle, $sql);
				$data = mysqli_fetch_assoc($result);
				$id = $data['id'];
				echo $id;
				$sql = "INSERT INTO logins(ID, statut, identifiant, password, connected) VALUES('$id', '$statut', '$pseudo', '$password', '$connected')";
				$result = mysqli_query($db_handle, $sql);
				echo "coool";
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
	<form method="post">
        <h1>Créer Compte Acheteur</h1>
        <p>Les champs obligatoires sont suivis par <strong><abbr title="required">*</abbr></strong>.</p>
        <section>
            <h2>Informations de contact</h2>
            <fieldset>
                 <ul>
                    <label for="homme">
                      <input type="radio" id="homme" name="homme" value="M." >
                      Monsieur
                    </label>
                    <label for="femme">
                      <input type="radio" id="femme" name="femme" value="Mme.">
                      Madame
                    </label>
                 </ul>
            </fieldset>
            <p>
              <label for="nom">
                <span>Nom :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="nom" name="nom">
            </p>
            <p>
              <label for="prenom">
                <span>Prénom :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="prenom" name="prenom">
            </p>
            <p>
              <label for="adresse">
                <span>Adresse :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="adresse" name="adresse">
            </p>
            <p>
              <label for="mail">
                <span>E-mail :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="mail" name="mail">
            </p>
			<p>
              <label for="pseudo">
                <span>Pseudo :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="pseudo" name="pseudo">
            </p>
            <p>
              <label for="password">
                <span>Mot de passe :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="password" name="password">
            </p>
        </section>
        <section>
            <h2>Informations de paiement</h2>
            <p>
              <label for="cardtype">
                <span>Type de carte :</span>
              </label>
              <select id="cardtype" name="cardtype">
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
              <label for="cardexp">
                <span>Validité :</span>
                <strong><abbr title="required">*</abbr></strong>
                <em>format mm/aa</em>
              </label>
              <input type="text" id="cardexp" name="cardexp">
            </p>
			<p>
              <label for="cardsecu">
                <span>Code de sécurité :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="text" id="cardsecu" name="cardsecu">
            </p>
			<p>
              <label for="cardname">
                <span>Nom du porteur de la carte :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="cardname" name="cardname">
            </p>
        </section>
			<input type="submit" name="bouton" value="Soumettre"/> 
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

