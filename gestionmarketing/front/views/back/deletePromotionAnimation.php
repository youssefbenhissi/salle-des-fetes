<?php
require_once "../connexion.php";
require_once "../../entities/PromotionAnimation.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$id = $_GET['id'];
$c = new connexion();
$conn = $c->cnx;
$crud = new PromotionAnimationC();
$crud->supprimerPromotionAnimation($id,$conn);
header("Location: showAllPromotionAnimationAdmin.php");
exit;