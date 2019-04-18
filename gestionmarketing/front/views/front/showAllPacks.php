<?php
require_once "../../entities/Pack.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";

$c=new connexion();
$conn=$c->cnx;
$crud = new PackC();
$allpacks = $crud->afficherTousPack($conn);
$packs = array();
$crudA = new PromotionAnimationC();
$crudD = new PromotionDecorC();
$crudG = new PromotionGastroC();
foreach ($allpacks as $p){
    $animation = $crudA->afficherAnimation($conn,$p['id_animation']);
    $decor = $crudD->afficherDEcor($conn,$p['id_decor']);
    $gastro = $crudG->afficherGastro($conn,$p['id_gastro']);
    $total = $decor['prix']+$animation['prix']+$gastro['prix'];
    echo 'console.log('.$total.')';
    $totalwithPackValue = $total * ($p['value']/100) ;
    $pack = array('total'=>$total,'pack'=>$p,'animation'=>$animation,'decor'=>$decor,
        'gastro'=>$gastro,'reduction'=>$totalwithPackValue);
    array_push($packs,$pack);
}
?>
<?php include_once 'header.php' ?>
<div class="ht__bradcaump__wrap" style="background: rgba(0, 0, 0, 0) url(views/front/images/bg/promotions.jpg) no-repeat scroll center center / cover ;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="bradcaump__inner text-center">
                    <h2 class="bradcaump-title">Packs</h2>
                    <nav class="bradcaump-inner">
                        <a class="breadcrumb-item" href="#">Home</a>
                        <span class="brd-separetor">/</span>
                        <span class="breadcrumb-item active">Packs </span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="htc__blog__area bg__white ptb--120">
    <div class="container">
        <div class="row blog__wrap blog--page clearfix">
            <!-- Start Single Blog -->
            <?php foreach ($packs as $p){ ?>
            <div class="col-md-6 col-lg-4 col-sm-12">
                <div class="plan">
                    <div class="plan-inner">
                        <div class="hot">- <?php echo $p['pack']['value'];?> % </div>
                        <div class="entry-title">
                            <h3><?php echo $p['pack']['nom'];?></h3>
                            <div class="price"><?php echo $p['reduction'];?><span>TND</span>
                            </div>
                        </div>
                        <div class="entry-content">
                            <ul>
                                <li><i class="fa fa-check">  </i><strong>  <?php print_r( $p['animation']['nom']);?> : </strong><del><?php print_r( $p['animation']['prix']);?>TND</del></li>
                                <li><i class="fa fa-check">  </i><strong>  <?php print_r( $p['animation']['nom']);?> : </strong><del><?php print_r( $p['animation']['prix']);?>TND</del></li>
                                <li><i class="fa fa-check">  </i><strong>  <?php print_r( $p['animation']['nom']);?> : </strong><del><?php print_r( $p['animation']['prix']);?>TND</del></li>

                            </ul>
                        </div>
                        <div class="btn btn-block">
                            <a class="btn-danger" href="#"><del><?php echo $p['total'];?> TND</del></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- End Single Blog -->
        </div>
    </div>
</div>
<?php include_once 'footer.php' ?>
