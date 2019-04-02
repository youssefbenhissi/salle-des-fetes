<?php
include "core/platc.php";
include "entity/plat.php";
session_start() ;
$platc=new platc();
if(isset($_POST["Modifier"])) {



    $platName = $_POST["nameplat"];
    $platDescription = $_POST["platdesc"];
    $platPrice = $_POST["platprice"];
    $platImage = $_FILES["platimage"];

    $message = "";
    if ($platName == "") {
        $message = "Plat  Name must be filled ";
    } else if ($platDescription == "") {
        $message = "Plat Description must be filled ";
    } else if ($platPrice == "") {
        $message = "Plat price  must be filled ";

    } else {
        if (isset($platImage["tmp_name"]) && $platImage["tmp_name"] != "") {

            $filePath = "img/" . basename($platImage["name"]);
            move_uploaded_file($platImage["tmp_name"], $filePath);

        }

        $message = "successfully edited  new Product";


    }
    $_SESSION["message"] = $message;


    var_dump($_GET['id']+0);
    var_dump($platName);
$p=new plat($platName,$platDescription,$platPrice,$platImage['name'],2);
var_dump($p);

  $platc->modifierplat($p, (int)$_GET["id"]);

}
else{
    echo "vous devez selectionée un plat !!!" ;

}
header location
?>