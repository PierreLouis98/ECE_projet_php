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
 $_SESSION['connected'] = 0;
 
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
			if ($connexion == 1) { 
			
		//	session_start();
    //$_SESSION['login'] = $login;
    
    //echo 'Vous etes bien logué';
    // ici vous pouvez afficher un lien pour renvoyer
    // vers la page d'accueil de votre espace membres 
			//header ('Location: Categorie.php');
			
			
			
			
			
			
				// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $login;
		$_SESSION['connected'] = 1;
		header ('Location: Categorie.php');
		
			}
			else if ($connexion == 3) { 
			
			// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $login;
		$_SESSION['connected'] = 3;
		header ('Location: Categorie.php');
			header ('Location: AddSuppVI.php');
			
			}
			else if ($connexion == 2) {
				
				// on la démarre :)
		session_start ();
		$sql = "SELECT * FROM vendeur WHERE mail='$login'";
		$result = mysqli_query($db_handle, $sql);
		$data = mysqli_fetch_assoc($result);
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $login;
		$_SESSION['connected'] = 2;
		$_SESSION['photoprofil'] = $data['photo'];
		$_SESSION['photofond'] =  $data['fond'];
		echo  $data['photo'];
		
		header ('Location: AddSuppI.php');
			}
			else {$_SESSION['connected'] = 0;
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