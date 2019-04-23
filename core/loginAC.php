<?php
	include "config.php";

	class loginC
	{
	private $login;
    private $mdp;
	private $role;
    public $conn;	

	public function __construct($login,$mdp,$conn)
	{
		$this->login=$login;
		$this->mdp=$mdp;
		$c=new config();
		$this->conn=$c->getConnexion();
		
	}
	function getLog()
	{
		return $this->login;
	}
    function getPWD()
	{
		return $this->mdp;
		
	}
	 function getRole()
	{
		return $this->role;
		
	}

	public function Logedin($conn,$login,$mdp)
	{
		$req="select * from admin where login='$login' && mdp='$mdp'";
		$rep=$conn->query($req);
		return $rep->fetchAll();
	}

	}
	
	

	?>