<?php
include "../entities/admin.php";
include "../core/adminC.php";

if (isset($_POST['nom']) and isset($_POST['pre']) and isset($_POST['login']) and isset($_POST['CHOIX']) ){
$admin1=new admin($_POST['reps'],$_POST['nom'],$_POST['pre'],$_POST['login'],"",$_POST['CHOIX']);
$admin1C=new adminC();
$admin1C->modifier_admin($admin1);



header('Location: ../Modifier un admin.php');



	}
	else{
	echo "vérifier les champs";
}
	
	?>

