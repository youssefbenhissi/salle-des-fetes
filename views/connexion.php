<?php
include "../core/loginC.php";



$c=new config();
$conn=$c->getConnexion();
$user=new loginC($_POST['login'],$_POST['mdp'],$conn);
$u=$user->Logedin($conn,$_POST['login'],$_POST['mdp']);
$vide=false;
if (!empty($_POST['login']) && !empty($_POST['mdp'])){
	
	foreach($u as $t){
		$vide=true;
	if ($t['login']==$_POST['login'] && $t['mdp']==$_POST['mdp']){
		
		session_start();
		$_SESSION['l']=$_POST['login'];
		$_SESSION['p']=$_POST['mdp'];
		$_SESSION['r']=$t['tache'];


		header("Location: ../index.php");
		
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Membre non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=../login.php">'; 
      } 
}	  
 
else { 
      echo "Les variables du formulaire ne sont pas déclarées.<br> Vous devez remplir le formulaire"; 
     ?> <a href="login.php">Retour au formulaire</a>	 <?php 
}  

?> 
