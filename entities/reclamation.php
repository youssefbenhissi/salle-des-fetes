<?PHP
class Reclamation
{
	private $nom;
	private $prenom;
	private $email;
	private $texte;
	private $cin;
	function __construct($nom, $prenom, $email, $texte,$cin)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->email = $email;
		$this->texte = $texte;
		$this->cin=$cin;
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
	function getTexte()
	{
		return $this->texte;
	}
	function getCin()
	{
		return $this->cin;
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
	function setTexte($texte)
	{
		$this->texte = $texte;
	}
	function setCin($cin)
	{
		$this->cin=$cin;
	}
}
 