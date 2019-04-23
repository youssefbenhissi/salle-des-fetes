<?php
	
	class admin
	{
		private $id;
		private $nom;
		private $pre;
		private $login;
		private $mdp;
		private $tache;


		function __construct($id,$nom,$pre,$login,$mdp,$tache){
		$this->id=$id;
		$this->nom=$nom;
		$this->pre=$pre;
		$this->login=$login;
		$this->mdp=$mdp;
		$this->tache=$tache;
	}
		
public function get_id()
		{
			return $this->id;
		}

		public function set_id($id)
		{
			$this->id = $id;
		}


		public function get_nom()
		{
			return $this->nom;
		}

		public function set_nom($nom)
		{
			$this->nom = $nom;
		}
		public function get_pre()
		{
			return $this->pre;
		}

		public function set_pre($pre)
		{
			$this->pre = $pre;
		}
		public function get_login()
		{
			return $this->login;
		}

		public function set_login($login)
		{
			$this->login = $login;
		}
		public function get_mdp()
		{
			return $this->mdp;
		}

		public function set_mdp($mdp)
		{
			$this->mdp = $mdp;
		}



public function get_tache()
		{
			return $this->tache;
		}

		public function set_tache($tache)
		{
			$this->tache = $tache;
		}

	

	}
?>