<?php


require_once "../connexion.php";

class PromotionDecorC
{public $conn;
    function __construct()
    {
        $c=new connexion();
        $this->conn=$c->cnx;
    }

    function ajoutPromotion($promotion_decor,$conn)
    {
        $query='insert into promotion_decor(id_decor,value,date_debut,date_fin,image)values( ?, ?,?,?,?);';
        $prep = $conn->prepare($query);

        $prep->bindValue(1, $promotion_decor->getidDecor(), PDO::PARAM_INT);
        $prep->bindValue(2, $promotion_decor->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $promotion_decor->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $promotion_decor->getDateFin(), PDO::PARAM_STR);
        $prep->bindValue(5, $promotion_decor->getImage(), PDO::PARAM_STR);
        $prep->execute();
    }

    function afficherDEcor($conn,$id)
    {
        $query='select * from decor where id=? ;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();

        return $prep->fetch();
    }

    function afficherTousPromotionDecor($conn)
    {
        $query='select * from promotion_decor;';
        $prep = $conn->prepare($query);
        $prep->execute();

        return $prep->fetchAll();
    }
    function afficherPromotionDecor($conn, $id)
    {
        $query = 'select *' . ' FROM promotion_decor'. ' WHERE id=?;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetch();
    }

    function modifierPromotionDecor($promotion,$id,$conn)
    {
        $query = "update promotion_decor  set image = ? , value =? , date_debut =?, date_fin =? where id =?";

        $prep = $conn->prepare($query);

        $prep->bindValue(5, $id, PDO::PARAM_INT);
        $prep->bindValue(1, $promotion->getImage(), PDO::PARAM_STR);
        $prep->bindValue(2, $promotion->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $promotion->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $promotion->getDateFin(), PDO::PARAM_STR);

        $prep->execute();

    }

    function afficherTousDecor($conn)
    {
        $query='select * from decor;';
        $prep = $conn->prepare($query);
        $prep->execute();

        return $prep->fetchAll();
    }

    function supprimerPromotionDecor($promotion,$conn)
    {
        $query = "delete from promotion_decor where id =?";

        $prep = $conn->prepare($query);
        $prep->bindValue(1, $promotion, PDO::PARAM_INT);
        $prep->execute();

    }

}

?>
