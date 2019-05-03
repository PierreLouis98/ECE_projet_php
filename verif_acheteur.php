<?php

session_start ();
/* 
si la variable de session login n'existe pas cela siginifie que le visiteur 
n'a pas de session ouverte, il n'est donc pas logué ni autorisé à
acceder à l'espace membres

if(!isset($_SESSION['login']) ) {
  echo 'Vous n\'êtes pas autoris´ à acceder à cette zone';
  header ('login.php');
  
}
if($_SESSION['connected'] == 0){
	 echo 'Vous n\'êtes pas autoris´ à acceder à cette zone';
  header ('login.php');
  
  
  $nom_fichier = basename($_SERVER['HTTP_REFERER']);
echo basename($_SERVER['HTTP_REFERER']);

}*/
 
if($_SESSION['connected'] == 1 ){
	echo 'Vous êtes acheteur';
	header('Location: Categorie.php');
	
/*echo $_SESSION['login'];
echo $_SESSION['connected'];
*/
}else{ /* 'Vous n\'êtes pas autoris´ à acceder à cette zone'; */
header ('Location: login.php');}
?> 