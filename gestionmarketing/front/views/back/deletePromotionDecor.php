<?php
require_once "../connexion.php";
require_once "../../entities/PromotionDecor.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$id = $_GET['id'];
$c = new connexion();
$conn = $c->cnx;
$crud = new PromotionDecorC();
$crud->supprimerPromotionDecor($id,$conn);
header("Location: showAllPromotionDecorAdmin.php");
exit;