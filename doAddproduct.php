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
*/ $platc=new platc();
    $platName=$_POST["nameplat"];
    $platDescription=$_POST["platdesc"];
    $platPrice=$_POST["platprice"];
    $platImage=$_FILES["platimage"];

    // upload image
  $image = "" ;
    if (!empty($_FILES)) {
        $file = $_FILES['platimage'];
        if ($file['name'] != '') {
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            $extensions = array("jpg","png");
            if (in_array($ext, $extensions)) {
                $name_p = $file['name'];
                $path = "IMG/".$name_p;
                if (move_uploaded_file($file['tmp_name'], $path)) {
                    $image = $name_p;
                }
            }
        }
    }



    //$cat=$_POST['categorie'];
    //$Catu=(int)$cat;

  //  $Message='produit Added';

    $plat=new plat($platName, $platDescription, $platPrice, $image, (int)$_POST['categorie']);
      var_dump($plat);


    $platc->ajouterplat($plat);

   // $notification=new notification($Message);
   // $notificationC->ajouternotification($notification);
    header('Location: affichplat.php');



//}
?>