<?PHP
include "../config.php";
class AvisC
{
	function ajouterAvis($avis)
	{
		$sql = "insert into aviss(nom,prenom,email,nombre,avis1,avis2) values ( :nom, :prenom, :email, :nombre, :avis1, :avis2)";
		$db = config::getConnexion();
		try {
			$req = $db->prepare($sql);

			$nom = $avis->getNom();
			$prenom = $avis->getPrenom();
			$email = $avis->getEmail();
			$nombre = $avis->getNombre();
			$avis1 = $avis->getAvis1();
			$avis2 = $avis->getAvis2();
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':email', $email);
			$req->bindValue(':nombre', $nombre);
			$req->bindValue(':avis1', $avis1);
			$req->bindValue(':avis2', $avis2);
			$req->execute();
		} catch (Exception $e) {
			echo 'Erreur: ' . $e->getMessage();
		}
	}
	function afficherAvis()
	{
		$sql = "SElECT * From aviss";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}

	function supprimerAvis($nom)
	{
		$sql = "DELETE FROM aviss where nom= :nom";
		$db = config::getConnexion();
		$req = $db->prepare($sql);
		$req->bindValue(':nom', $nom);
		try {
			$req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function recupererAvis($nom)
	{
		$sql = "SELECT * from aviss where nom=$nom";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function modifierAvis($avis, $nom)
	{
		$sql = "UPDATE aviss SET nom=:nom, prenom=:prenom, email=:email , nombre=:nombre , avis1=:avis1 , avis2=:avis2 WHERE nom=:nom ";

		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		try {
			$req = $db->prepare($sql);
			$nom = $avis->getNom();
			$prenom = $avis->getPrenom();
			$email = $avis->getEmail();
			$nombre = $avis->getNombre();
			$avis1 = $avis->getAvis1();
			$avis2 = $avis->getAvis2();
			$datas = array(':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':nombre' => $nombre, ':avis1' => $avis1, ':avis2' => $avis2);
			$req->bindValue(':nom', $nom);
			$req->bindValue(':prenom', $prenom);
			$req->bindValue(':email', $email);
			$req->bindValue(':nombre', $nombre);
			$req->bindValue(':avis1', $avis1);
			$req->bindValue(':avis2', $avis2);
			$s = $req->execute();
			// header('Location: index.php');
		} catch (Exception $e) {
			echo " Erreur ! " . $e->getMessage();
			echo " Les datas : ";
			print_r($datas);
		}
	}
	function rechercherAvis($nom)
	{
		$sql = "SELECT * from aviss where nom=$nom";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
	function trierAvis()
	{
		$sql = "SELECT * from aviss ORDER BY nom DESC";
		$db = config::getConnexion();
		try {
			$liste = $db->query($sql);
			return $liste;
		} catch (Exception $e) {
			die('Erreur: ' . $e->getMessage());
		}
	}
}
