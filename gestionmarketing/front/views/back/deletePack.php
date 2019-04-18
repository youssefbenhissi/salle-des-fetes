<?php
require_once "../../entities/Pack.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
require_once "../connexion.php";
$id = $_GET['id'];
$c = new connexion();
$conn = $c->cnx;
$crud = new PackC();
$crud->supprimerPack($id,$conn);
header("Location: showAllPacksAdmin.php");
exit;