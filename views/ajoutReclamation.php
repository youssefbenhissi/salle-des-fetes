<?PHP
include "../entities/reclamation.php";
include "../core/reclamationC.php";

if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['texte'])) {
	$Reclamation1 = new Reclamation($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['texte']);
	$reclamationC1 = new ReclamationC();
	$reclamationC1->ajouterReclamation($Reclamation1);
	header('Location: afficherReclamations.php');
} else {
	echo "vérifier les champs";
}
//*/
 