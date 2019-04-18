<?php


require_once "../connexion.php";

class PromotionAnimationC
{public $conn;
    function __construct()
    {
        $c=new connexion();
        $this->conn=$c->cnx;
    }

    function ajoutPromotion($promotion_animation,$conn)
    {
        $query='insert into promotion_animation(id_animation,value,date_debut,date_fin,image)values( ?, ?,?,?,?);';
        $prep = $conn->prepare($query);


        $prep->bindValue(1, $promotion_animation->getidAnimation(), PDO::PARAM_INT);
        $prep->bindValue(2, $promotion_animation->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $promotion_animation->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $promotion_animation->getDateFin(), PDO::PARAM_STR);
        $prep->bindValue(5, $promotion_animation->getImage(), PDO::PARAM_STR);
        $prep->execute();
    }
    function afficherTousPromotionAnimation($conn)
    {
        $query='select * from promotion_animation;';
        $prep = $conn->prepare($query);
        $prep->execute();

        return $prep->fetchAll();
    }

    function afficherTousAnimations($conn)
    {
        $query='select * from animation;';
        $prep = $conn->prepare($query);
        $prep->execute();

        return $prep->fetchAll();
    }

    function afficherAnimation($conn,$id)
    {
        $query='select * from animation where id=? ;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();

        return $prep->fetch();
    }

    function afficherPromotionAnimation($conn, $id)
    {
        $query = 'select * FROM promotion_animation'. ' WHERE id=?;';
        $prep = $conn->prepare($query);
        $prep->bindValue(1, $id , PDO::PARAM_INT);
        $prep->execute();
        return $prep->fetch();
    }

    function modifierPromotionAnimation($promotion,$id,$conn)
    {
        $query = "update promotion_animation set image = ? , value =? , date_debut =?, date_fin =? where id =?";

        $prep = $conn->prepare($query);

        $prep->bindValue(5, $id, PDO::PARAM_INT);
        $prep->bindValue(1, $promotion->getImage(), PDO::PARAM_STR);
        $prep->bindValue(2, $promotion->getvalue(), PDO::PARAM_INT);
        $prep->bindValue(3, $promotion->getDateDebut(), PDO::PARAM_STR);
        $prep->bindValue(4, $promotion->getDateFin(), PDO::PARAM_STR);

        $prep->execute();

    }

    function supprimerPromotionAnimation($promotion,$conn)
    {
        $query = "delete from promotion_animation where id =?";

        $prep = $conn->prepare($query);
        $prep->bindValue(1, $promotion, PDO::PARAM_INT);
        $prep->execute();

    }

}

?>
