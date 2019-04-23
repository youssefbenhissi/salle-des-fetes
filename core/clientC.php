<?php
	include "config.php";
	class clientC 
	{
	
	




    public function desactiverCompte($x)
    {
     
    $c = config::getConnexion();
    try{
      $stmt=$c->prepare("UPDATE client set active=0 where cin='$x'");
      echo $x;
    
    $stmt->execute();
    
    }
    catch (Exception $e){
            echo 'Erruer: ' .$e->getMessage();
          }

    }

    function afficherEmployes(){
    $sql="SElECT * From client";
    $c = config::getConnexion();
    return ($c->query($sql));
    
  }

public function resactiverCompte($x)
    {
     
    $c = config::getConnexion();
    try{
      $stmt=$c->prepare("UPDATE client set active=1 where cin='$x'");
      echo $x;
    
    $stmt->execute();
    
    }
    catch (Exception $e){
            echo 'Erruer: ' .$e->getMessage();
          }

    }

	   		
	 function afficherDESC(){
    $sql="select * from client ORDER BY cin DESC";
    $c = config::getConnexion();
    return ($c->query($sql));
    
  }

   function afficherASC(){
    $sql="select * from client ORDER BY cin ASC";
    $c = config::getConnexion();
    return ($c->query($sql));
    
  }
  
      /* public function rechercheclient()
    {
        $sql = "select * from client ";
        try {
            $this->$c->query($sql);
            foreach ($c as $row) {
                 echo "<tr><td>" . $row['cin'] . "</td><td>" . $row['nom']  . "</td><td>" . $row['prenom'] . "</td><td>" . $row['email'] . $row['mdp'] . "</td><td>" . $row['tel']  . "</td><td>" . $row['active'] . "</td></tr>";
            }
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }*/
  /* function rechercheclient($q){
    $sql="SElECT * From client where cin LIKE "%'.$q.'%" order by id DESC";
    $c = config::getConnexion();
    return ($c->query($sql));
    
  }
*/
   		

   		

	}
?>