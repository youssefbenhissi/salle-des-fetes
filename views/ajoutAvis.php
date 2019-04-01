<?PHP
include "../entities/avis.php";
include "../core/avisC .php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['nombre'])and isset($_POST['avis1'])and isset($_POST['avis2'])) {
	$Avis1 = new Avis($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['nombre'] ,$_POST['avis1'],$_POST['avis2']);
	$avisC1 = new AvisC();
	$avisC1->ajouterAvis($Avis1);
	header('Location: afficherAvis.php');
} else {
	echo "vérifier les champs";
}
//*/
 