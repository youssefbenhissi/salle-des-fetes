<?PHP
include "../config.php";
class ReclamationC
{
	function ajouterReclamation($reclamation)
	{
		$sql = "insert into reclamationn (nom,prenom,email,texte,cin) values (:nom, :prenom,:email,:texte,:cin)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$nom = $reclamation->getNom();
			$prenom = $reclamation->getPrenom();
			$email = $reclamation->getEmail();
			$texte = $reclamation->getTexte();
			$cin = $reclamation->getCin();
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':email', $email);
			$req->bindValue(':texte', $texte);
			$req->bindValue(':cin', $cin);
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function afficherReclamations()
	{
		$sql = "SElECT * From reclamationn";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function supprimerReclamation($cin)
	{
		$sql = "DELETE FROM reclamationn where cin= :cin";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':cin', $cin);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function recupererReclamation($cin)
	{
		$sql = "SELECT * from reclamationn where cin=$cin";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierReclamation($reclamation, $cin)
	{
		$sql = "UPDATE reclamationn SET nom=:nom, prenom=:prenom, email=:email , texte=:texte,cin=:cin WHERE cin=:cin ";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
			$nom = $reclamation->getNom();
			$prenom = $reclamation->getPrenom();
			$email = $reclamation->getEmail();
			$texte = $reclamation->getTexte();
			$cin = $reclamation->getCin();
			$datas = array(':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':texte' => $texte, ':cin' => $cin);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':email', $email);
			$req->bindValue(':texte', $texte);
			$req->bindValue(':cin', $cin);
			$s = $req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	function rechercherReclamation($cin)
	{
		$sql = "SELECT * from reclamationn where cin=$cin";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function trierReclamation()
	{
		$sql = "SELECT * from reclamationn ORDER BY cin DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}
