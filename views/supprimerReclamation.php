<?PHP
include "../core/reclamationC.php";
$employeC = new ReclamationC();
echo "jkkjjkn";
if (isset($_POST["cin"])) {
	$employeC->supprimerReclamation($_POST["cin"]);
	header('Location: afficherReclamations.php');
}
 