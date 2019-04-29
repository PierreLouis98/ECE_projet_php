<?php
//
// ICI ON DOIT POUVOIR LISTER LES ITEMS PAR NOM SELON LA CATEGORIE QU'ON A CHOISIE
//
//identifier votre BDD
$database = "livres2019";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);
//*** Partie Recherche d'un livre ***
	if ($_POST["button1"]) 
	{
		if ($db_found) 
		{
			$sql = "SELECT * FROM books";
			$result = mysqli_query($db_handle, $sql);
			//on trouve le livre recherché
			while ($data = mysqli_fetch_assoc($result)){
				echo "Titre: " . $data['Titre'] . "<br>";
				echo "<br>";
			}
		} 
		else {
			echo "Database books not found";
		}
	}
	if ($_POST["button2"]){
		if ($db_found){
			$sql = "SELECT * FROM clothes";
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
	}
	if ($_POST["button3"]){
		if ($db_found){
			$sql = "SELECT * FROM sports";
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
	}
	if ($_POST["button4"]){
		if ($db_found){
			$sql = "SELECT * FROM musics";
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
	}
//fermer la connexion
mysqli_close($db_handle);
?>