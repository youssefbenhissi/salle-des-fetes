<?php
//include config.php;
include "core/platc.php";

include "entity/plat.php";
include "core/categorieC.php";

include "entity/categorie.php";
/*
$x=$_POST['categorie'];
$j=strpos($x,":");
$d=strlen($_POST['categorie']);
var_dump(substr($d,$j));*/
/*
if(isset($_POST["platform"])){
*/ $categoriec=new categorieC ();
    $lib=$_POST["libelle"];
    $Des=$_POST["Description"];
    $the=$_POST["theme"];
    

    // upload image



    //$cat=$_POST['categorie'];
    //$Catu=(int)$cat;

  //  $Message='produit Added';

    $categorie=new categorie($lib, $Des, $the);
      var_dump($categorie);


    $categoriec->ajoutercategorie($categorie);

   // $notification=new notification($Message);
   // $notificationC->ajouternotification($notification);
    header('Location: affichercat.php');



//}
?>