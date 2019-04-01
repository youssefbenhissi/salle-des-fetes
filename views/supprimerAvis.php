<?PHP
include "../core/avisC .php";
$employeC = new AvisC();
if (isset($_POST["nom"])) {
	$employeC->supprimerAvis($_POST["nom"]);
	header('Location: afficherAvis.php');
}
 