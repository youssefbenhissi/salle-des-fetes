<?php
include "../entities/admin.php";
include "../core/adminC.php";

if (isset($_POST['id'])  ){
$admin1=new admin($_POST['id'],"","","","","");
$admin1C=new adminC();
$admin1C->supprimer_admin($admin1);
header('Location: ../formulairesupp.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

