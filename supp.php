<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 29/03/2019
 * Time: 19:47
 */

include "core/platc.php";


$plat=new platc();
var_dump($_GET['id']+0);

    $plat->supprimerplat($_GET['id']+0);

    header('Location: affichplat.php');

?>