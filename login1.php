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
 $connexion = 0;
 
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
					 if ($data['statut'] == 'client')
						$connexion = 1;
					 if ($data['statut'] == 'vendeur')
						$connexion = 2;
					 if ($data['statut'] == 'administrateur')
						$connexion = 3;
					 break;
				 }
			}
			if ($connexion == 1) { header ('Location: Categorie.php');}
			else if ($connexion == 3) { header ('Location: AddSuppVI.php');}
			else {
				header ('Location: login.php');
			}
		}
		else {
			echo "Database books not found";
		}
	}
 //fermer la connexion
mysqli_close($db_handle);
?>