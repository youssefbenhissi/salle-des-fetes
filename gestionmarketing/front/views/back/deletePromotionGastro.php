<?php
require_once "../connexion.php";
require_once "../../entities/PromotionGastronomie.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$id = $_GET['id'];
$c = new connexion();
$conn = $c->cnx;
$crud = new PromotionGastroC();
$crud->supprimerPromotionGastro($id,$conn);
header("Location: showAllPromotionGastroAdmin.php");
exit;