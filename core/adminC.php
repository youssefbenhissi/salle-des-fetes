<?php
	include "config.php";

	class adminC
	{
       function ajouterAdmin($admin)
   		{

   			$sql="insert into admin (idadmin, nom, prenom, login, mdp, tache) VALUES (:id, :nom, :prenom, :login, :mdp, :tache)";
   			$db = config::getConnexion();
   			try{
   				$req=$db->prepare($sql);

   				$id=$admin->get_id();
   				$nom=$admin->get_nom();
   				$prenom=$admin->get_pre();
   				$login=$admin->get_login();
   				$mdp=$admin->get_mdp();
   				$tache=$admin->get_tache();



   				$req->bindValue(':id',$id);
				$req->bindValue(':nom', $nom);
				$req->bindValue(':prenom', $prenom);
				$req->bindValue(':login', $login);
				$req->bindValue(':mdp', $mdp);
				$req->bindValue(':tache', $tache);
				$req->execute();


   			}
        	catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}			
		}

       
     





		function afficherAdmin(){
		$sql="SElECT * From admin";
		$c = config::getConnexion();
		return ($c->query($sql));
		
	}


	function modifier_admin($admin)
	{
		$c = config::getConnexion();
		try{
		$stmt=$c->prepare("UPDATE admin SET nom=:nom,prenom=:prenom,login=:login,mdp=:mdp,tache=:tache where idadmin=:id");
		
		$stmt->bindValue(":nom",$admin->get_nom());
		$stmt->bindValue(":prenom",$admin->get_pre());
		$stmt->bindValue(":login",$admin->get_login());
		$stmt->bindValue(":mdp",$admin->get_mdp());
		$stmt->bindValue(":tache",$admin->get_tache());
		$stmt->bindValue(":id",$admin->get_id());
		$stmt->execute();
		
		}
		catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}

	}

	function rechercheradmin($admin){

		$c = config::getConnexion();
		try{
		$stmt=$c->prepare("SELECT nom,prenom,tache From admin where idadmin =:id");
		

		
		}
		catch (Exception $e){
        		echo 'Erreur: ' .$e->getMessage();
        	}
	

	}






function supprimer_admin($admin)
	{
		$c = config::getConnexion();
		try{
		$stmt=$c->prepare("DELETE FROM admin where idadmin=:id1");
		
		
			$stmt->bindValue(":id1",$admin->get_id());
		$stmt->execute();
		
		}
		catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}

	}

}
?>
	



	
