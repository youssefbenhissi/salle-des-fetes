<?php
require_once "../../entities/Pack.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$c = new connexion();
$conn = $c->cnx;
$crudA = new PromotionAnimationC();
$animatons = $crudA->afficherTousPromotionAnimation($conn);
$crudD = new PromotionDecorC();
$decors = $crudD->afficherTousPromotionDecor($conn);
$crudG = new PromotionGastroC();
$gastros = $crudG->afficherTousPromotionGastro($conn);
$promotions = array(['type'=>'animation','values'=>$animatons],
    ['type'=>'decor','values'=>$decors],
    ['type'=>'gastronomie','values'=>$gastros]);

?>
<?php  include_once 'header.php' ?>
    <div class="ht__bradcaump__wrap" style="background: rgba(0, 0, 0, 0) url(views/front/images/bg/promotions.jpg) no-repeat scroll center center / cover ;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Promotions</h2>
                        <nav class="bradcaump-inner">
                            <a class="breadcrumb-item" href="#">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb-item active">Promotions</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="htc__product__area ptb--130 bg__white">
        <div class="container">
            <div class="htc__product__container">
                <!-- Start Product MEnu -->
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <!-- End Product MEnu -->
                <div class="row product__list">
                        <?php foreach ($promotions as $p){ ?>
                            <?php foreach ($p['values'] as $pp){?>
                                <div class="col-md-3 single__pro col-lg-3 cat--1 col-sm-4 col-xs-12">
                                    <div class="product foo">
                                        <div class="product__inner">
                                             <div class="pro__thumb">
                                                <a href="#">
                                                    <img src="../../uploads/<?php echo $pp['image']?>" alt="product images">
                                                </a>
                                             </div>
                                             <div class="product__hover__info">
                                                <ul class="product__action">
                                                    <li><a title="Download" class="quick-view modal-view detail-link" href="../../uploads/<?php echo $pp['image']?>" download><span class="ti-download"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="add__to__wishlist">
                                            </div>
                                        </div>
                                        <div class="product__details">
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        <?php }?>
                     </div>
                </div>
            </div>
        </div>
    </section>
<?php  include_once 'footer.php' ?>