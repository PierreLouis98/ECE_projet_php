<?php
$bouton1 = isset($_POST["button1"])? true : false;
$bouton2 = isset($_POST["button2"])? true : false;
$bouton3 = isset($_POST["button3"])? true : false;
$bouton4 = isset($_POST["button4"])? true : false;
//identifier votre BDD
$database = "ece_amazon";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

	
		if ($db_found){
			if ($bouton1){$sql = "SELECT Titre FROM items WHERE Categorie='Vetements'";}
			if ($bouton2){$sql = "SELECT Titre FROM items WHERE Categorie='Livres'";}
			if ($bouton3){$sql = "SELECT Titre FROM items WHERE Categorie='Sports'";}
			if ($bouton4){$sql = "SELECT Titre FROM items WHERE Categorie='Musiques'";}
			$result = mysqli_query($db_handle, $sql);
			//on trouve le livre recherché
			while ($data = mysqli_fetch_assoc($result)) {
				echo "Titre: " . $data['Titre'] . "<br>";
				echo "<br>";
			}
		}
		else {
			echo "Database not found";
		}
//fermer la connexion
mysqli_close($db_handle);
?>