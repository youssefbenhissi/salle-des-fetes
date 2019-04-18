<?php

require_once "core/PromotionAnimationC.php";
require_once "core/PromotionDecorC.php";
require_once "core/PromotionGastronomieC.php";
require_once "core/PackC.php";

class promotion_Controller {

    public function showAll(){
        $c = new connexion();
        $conn = $c->cnx;
        $crudA = new PromotionAnimationC();
        $animatons = $crudA->afficherTousPromotionAnimation($conn);
        $crudD = new PromotionDecorC();
        $decors = $crudD->afficherTousPromotionDecor($conn);
        $crudG = new PromotionGastroC();
        $gastros = $crudG->afficherTousPromotionGastro($conn);
        $promotions = array(['type'=>'animation','values'=>$animatons],['type'=>'decor','values'=>$decors],['type'=>'gastronomie','values'=>$gastros]);
        require_once 'views/front/showAllPromotions.php';
    }
}