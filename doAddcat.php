<?php

include "core/categorieC.php";

include "entity/categorie.php";


if(!isset($_POST["platform"])) {
    $categoriec = new categorieC();
    $lib = $_POST["libelle"];
    $Des = $_POST["Description"];
    $the = $_POST["theme"];

    $categorie = new categorie($lib, $Des, $the);
    var_dump($categorie);


    $categoriec->ajoutercategorie($categorie);

}
    header('Location: affichercat.php');
?>