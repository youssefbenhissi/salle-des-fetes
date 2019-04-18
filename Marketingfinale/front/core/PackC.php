<?php



require_once "../connexion.php";

class PackC
{
    public $conn;

    function __construct()
    {
        $c=new connexion();
        $this->conn=$c->cnx;
    }

    function ajoutPack($pack,$conn)
    {
        $query='insert into pack(id_animation,id_decor,id_gastro,value,date_debut,date_fin,nom)values( ?, ?,?,?,?,?,?);';
        $prep = $conn->prepare($query);


        $prep->bindValue(1, $pack->getidAnimation(), PDO::PARAM_INT);
        $prep->bindValue(2, $pack->getidDecor(), PDO::PARAM_INT);
        $prep->bindValue(3, $pack->getidGastro(), PDO::PARAM_INT);
        $prep->bindValue(4, $pack->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(5, $pack->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(6, $pack->getDateFin(), PDO::PARAM_STR);
        $prep->bindValue(7, $pack->getNom(), PDO::PARAM_STR);
        $prep->execute();
    }
    function afficherTousPack($conn)
    {
        $query='select * from pack;';
        $prep = $conn->prepare($query);
        $prep->execute();

        return $prep->fetchAll();
    }

    function afficherPack($conn, $id)
    {
        $query = 'select * FROM pack'. ' WHERE id=?;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetch();
    }

    function modifierPack($pack,$id,$conn)
    {
        $query = "update pack set nom = ? , value =? , date_debut =?, date_fin =? where id =?";

        $prep = $conn->prepare($query);

        $prep->bindValue(5, $id, PDO::PARAM_INT);
        $prep->bindValue(1, $pack->getNom(), PDO::PARAM_STR);
        $prep->bindValue(2, $pack->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $pack->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $pack->getDateFin(), PDO::PARAM_STR);

        $prep->execute();

    }

    function supprimerPack($pack_id,$conn)
    {
        $query = "delete from pack where id =?";

        $prep = $conn->prepare($query);
        $prep->bindValue(1, $pack_id, PDO::PARAM_INT);
        $prep->execute();

    }

}

?>
