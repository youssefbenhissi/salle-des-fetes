<?php
include "../entities/client.php";
include "../core/clientC.php";

if (isset($_GET['q']) and !empty($_GET['q'])){
$q=htmlspecialchars($_GET['q']);
$client1=new client($_GET['q']);
$client1C=new clientC();
$clien1C->rechercherclient($q);



	}
	else{
	header("afficher liste client.php");
}
	
	?>

