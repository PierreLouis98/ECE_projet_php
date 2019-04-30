<?php
//identifier votre BDD
$database = "ece_amazon";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost et votre login = root et votre password = <rien>
$db_handle = mysqli_connect('localhost', 'root', '');
$db_found = mysqli_select_db($db_handle, $database);

// On récupère les données de la page html 
 $login = isset($_POST["catnom"]) ? $_POST["catnom"] : "";
 $pass = isset($_POST["catdesct"]) ? $_POST["catdesct"] : "";
 $connexion = false;
 
 if ($_POST["button1"]) 
	{
		if ($db_found) 
		{
			$sql = "SELECT * FROM logins";
			$result = mysqli_query($db_handle, $sql);
			//on trouve le livre recherché
			while ($data = mysqli_fetch_assoc($result))
			{
				 if ($login == $data['identifiant'] && $pass == $data['password']) 
				 {
					 $connexion = true;
					 break;
				 }
			}
			if ($connexion) {
				echo "Connexion okay";
			}
			else {
				echo "Mot de passe ou identifiant incorrecte";
			}
		}
		else {
			echo "Database books not found";
		}
	}
 //fermer la connexion
mysqli_close($db_handle);
?>