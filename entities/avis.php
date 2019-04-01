<?PHP
class Avis
{
	private $nom;
	private $prenom;
	private $email;
	private $nombre;
	private $avis1;
	private $avis2;
	function __construct($nom, $prenom, $email, $nombre,$avis1,$avis2)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->email = $email;
		$this->nombre = $nombre;
		$this->avis1=$avis1;
		$this->avis2=$avis2;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
	function getEmail()
	{
		return $this->email;
	}
	function getNombre()
	{
		return $this->nombre;
	}
	function getAvis1()
	{
		return $this->avis1;
	}
	function getAvis2()
	{
		return $this->avis2;
	}
	function setNom($nom)
	{
		$this->nom = $nom;
	}
	function setPrenom($prenom)
	{
		$this->prenom = $prenom;
	}
	function setemail($email)
	{
		$this->email = $email;
	}
	function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}
	function setAvis1($avis1)
	{
		$this->avis1=$avis1;
	}
	function setAvis2($avis2)
	{
		$this->avis2=$avis2;
	}
}
 