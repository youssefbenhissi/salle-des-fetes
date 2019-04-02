<?php 
include_once "config.php";

if(isset($_GET['motclef']))
{
		$motclef=($_GET['motclef']

		$admin=array('motclef'=>$motclef. '%');
		$cnx = config::getConnexion();
		$sql='SELECT nom,prenom,tache from admin where nom like :motclef or prenom like :motclef or tache like :motclef';
		$req=$cnx->prepare($sql);
		$req->execute($q);
		$count=$req->rowCount($sql);

		if($count==1)
		{
			while($result = $req->fetch(PDO::FETCH_OBJ))
			{
				echo "nom :".$result->nom."<br/>prenom:".$result->prenom "<br/>tache:".$result->tache;
			}
		}
		else
			{
				echo"aucun resultat pour ".$motclef ;
			}
}	

?>