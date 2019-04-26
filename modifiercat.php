<?php
include "core/categorieC.php";
include "entity/categorie.php";
session_start() ;
$categorieC=new categorieC();
if(!isset($_POST["Modifier"])) {



    $lib = $_POST["libelle"];
    $the = $_POST["theme"];
    $des = $_POST["Description"];





$p=new categorie($lib,$des,$the);
var_dump($p);

  $categorieC->modifiercat($p,(int)$_GET["id"]);

}
else{
    echo "vous devez selectionée une categorie  !!!" ;

}
//header location
header('Location:affichercat.php');
?>