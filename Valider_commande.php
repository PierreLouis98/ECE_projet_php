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
 
<div class="container features">


<form>
        <h1> Valider la transaction: </h1>
        <p>Les champs obligatoires sont suivis par <strong><abbr title="required">*</abbr></strong>.</p>
        <section>
            <h2>Informations de contact</h2>
            
            <p>
              <label for="name">
                <span>Nom :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
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
              <label for="card">
                <span>Type de carte :</span>
              </label>
              <select id="card" name="usercard">
                <option value="visa">Visa</option>
                <option value="mc">Mastercard</option>
                <option value="amex">American Express</option>
              </select>
            </p>
            <p>
              <label for="number">
                <span>Numéro :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="text" id="number" name="cardnumber">
            </p>
            <p>
              <label for="date">
                <span>Validité :</span>
                <strong><abbr title="required">*</abbr></strong>
                <em>format mm/aa</em>
              </label>
              <input type="text" id="date" name="expiration">
            </p>
			<p>
              <label for="number">
                <span>Code de sécurité :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
                <input type="text" id="number" name="cardnumber">
            </p>
			<p>
              <label for="name">
                <span>Nom du porteur de la carte :</span>
                <strong><abbr title="required">*</abbr></strong>
              </label>
              <input type="text" id="name" name="username">
            </p>
			
		
			
        </section>
        <section>
            <p> <button type="submit"> Valider la commande</button> </p>
        </section>
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

