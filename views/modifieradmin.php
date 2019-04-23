<?php
include "../entities/admin.php";
include "../core/adminC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['login'])and isset($_POST['mdp']) and isset($_POST['tache']) ){
$admin1=new admin($_POST['id'],$_POST['nom'],$_POST['prenom'],$_POST['login'],$_POST['mdp'],$_POST['tache']);
$admin1C=new adminC();
$admin1C->modifier_admin($admin1);



header('Location: ../formulairemodif.php');
echo "admin modifier";
	}
else echo "verifier les champ";
	?>

