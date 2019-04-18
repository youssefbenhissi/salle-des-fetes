<?php


require_once "../connexion.php";

class PromotionGastroC
{public $conn;
    function __construct()
    {
        $c=new connexion();
        $this->conn=$c->cnx;
    }

    function ajoutPromotion($promotion_gastro,$conn)
    {
        $query='insert into promotion_gastronomie(id_gastro,value,date_debut,date_fin,image)values( ?, ?,?,?,?);';
        $prep = $conn->prepare($query);


        $prep->bindValue(1, $promotion_gastro->getidGastro(), PDO::PARAM_INT);
        $prep->bindValue(2, $promotion_gastro->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $promotion_gastro->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $promotion_gastro->getDateFin(), PDO::PARAM_STR);
        $prep->bindValue(5, $promotion_gastro->getImage(), PDO::PARAM_STR);
        $prep->execute();
    }
    function afficherTousPromotionGastro($conn)
    {
        $query='select * from promotion_gastronomie;';
        $prep = $conn->prepare($query);
        $prep->execute();
        return $prep->fetchAll();
    }
    function afficherPromotionGastro($conn, $id)
    {
        $query = 'select *'.' FROM promotion_gastronomie'. ' WHERE id=?;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetch();
    }

    function modifierPromotionGastro($promotion,$id,$conn)
    {
        $query = "update promotion_gastronomie set image = ? , value =? , date_debut =?, date_fin =? where id =?";

        $prep = $conn->prepare($query);
        $prep->bindValue(5, $id, PDO::PARAM_INT);
        $prep->bindValue(1, $promotion->getImage(), PDO::PARAM_STR);
        $prep->bindValue(2, $promotion->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $promotion->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $promotion->getDateFin(), PDO::PARAM_STR);

        $prep->execute();

    }



    function afficherTousGastro($conn)
    {
        $query='select * from gastrnomie;';
        $prep = $conn->prepare($query);
        $prep->execute();

        return $prep->fetchAll();
    }

    function afficherGastro($conn,$id)
    {
        $query='select * from gastrnomie where id=? ;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();

        return $prep->fetch();
    }

    function supprimerPromotionGastro($promotion,$conn)
    {
        $query = "delete from promotion_gastronomie where id =?";

        $prep = $conn->prepare($query);
        $prep->bindValue(1, $promotion, PDO::PARAM_INT);
        $prep->execute();

    }

}

?>
