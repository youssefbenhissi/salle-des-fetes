<?php
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_POST['identifiant'])  ){

$client1C=new clientC();
$client1C->resactiverCompte($_POST['identifiant']);

header('Location: ../Reactivercompte.php');

	}
	else{
	echo "vérifier les champs";
}
	
	?>

