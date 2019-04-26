<?php

include "../backoffice/core/wishlistC.php";
include "../backoffice/entity/wishlist.php";

$w=new wishlist((int)$_GET['wish']);
//var_dump($w);
$wc=new wishlistC();

$wc->addwish($w);
header('Location: shop.php');



//}
?>