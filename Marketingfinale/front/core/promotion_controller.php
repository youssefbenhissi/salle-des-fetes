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

    public $conn;

    public function count(){
        $c=new connexion();
        $this->conn=$c->cnx;
        $animationresult = $c->cnx->query("SELECT * FROM promotion_animation");
        $animation_cnt = $animationresult->num_rows;
        $decorresult = $c->cnx->query("SELECT * FROM promotion_decor");
        $decor_cnt = $decorresult->num_rows;
        $gastroresult = $c->cnx->query("SELECT * FROM promotion_gastronomie");
        $gastro_cnt = $gastroresult->num_rows;
        $a = array("animation"=>$animation_cnt,"decor"=>$decor_cnt,"gastronomie"=>$gastro_cnt);
    }


}