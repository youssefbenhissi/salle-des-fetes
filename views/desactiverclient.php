<?php
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['identifiant'])  ){

$client1C=new clientC();
$client1C->desactiverCompte($_POST['identifiant']);
header('Location: ../Desactivercompte.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

