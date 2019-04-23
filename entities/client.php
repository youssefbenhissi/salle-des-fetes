<?php
	
	class client 
	{
		private $cin;
		private $nom;
		private $pre;
		private $Email;
		private $mdp;
		private $daten;
		private $tel;
		//private $qs;
		


		

		function __construct($cin,$nom,$pre,$Email,$mdp,$daten,$tel){
		$this->cin=$cin;
		$this->nom=$nom;
		$this->pre=$pre;
		$this->Email=$Email;
		$this->mdp=$mdp;
		$this->daten=$daten;
		$this->tel=$tel;
	}
		



		
public function get_cin()
		{
			return $this->cin;
		}

		public function set_cin($cin)
		{
			$this->cin = $cin;
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
		public function get_email()
		{
			return $this->Email;
		}

		public function set_email($Email)
		{
			$this->Email = $Email;
		}
		public function get_mdp()
		{
			return $this->mdp;
		}

		public function set_mdp($mdp)
		{
			$this->mdp = $mdp;
		}

		public function get_daten()
		{
			return $this->daten;
		}

		public function set_daten($daten)
		{
			$this->daten = $daten;
		}



		public function get_tel()
		{
			return $this->tel;
		}

		public function set_tel($tel)
		{
			$this->tel = $tel;
		}


		


}
?>