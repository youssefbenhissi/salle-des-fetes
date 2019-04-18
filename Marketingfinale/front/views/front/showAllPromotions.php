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
                    <div class="product__menu">
                        <button data-filter="*"  class="is-checked">All</button>
                        <button data-filter=".gastronomie">Gastronomie</button>
                        <button data-filter=".animation">Animation</button>
                        <button data-filter=".decor">Decor</button>
                    </div>
                </div>
            </div>
            <!-- End Product MEnu -->
            <div class="row product__list">
                <!-- Start Single Product -->
                <?php foreach ($promotions as $p){ ?>
                <?php foreach ($p['values'] as $pp){?>
                <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 <?php echo $p['type']?>">
                    <div class="product foo">
                        <div class="product__inner">
                            <div class="add__to__wishlist">
                                <a data-toggle="tooltip" style="background-color: #ff4136" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class=""> <?php echo $pp['value']."   %"?></span></a>
                            </div>
                            <div class="pro__thumb">
                                <a href="#">
                                    <img src="../../uploads/<?php echo $pp['image']?>" alt="product images">
                                </a>
                            </div>
                            <div class="product__hover__info">
                                <ul >
                                    <li><a data-toggle="modal"  title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                </ul>
                            </div>

                        </div>
                        <div class="product__details">
                            <h2><a href="product-details.html"><?php echo $p['type']?></a></h2>
                            <ul class="product__price">
                                <li class="old__price"><?php echo $pp['value']?></li>
                                <li class="new__price"><?php echo $pp['value'].'%' ?></li>
                            </ul>
                            <div class="review__date">
                                <span>start Date : <?php echo $pp['date_debut']?></span>
                            </div>
                            <div class="review__date">
                                <span>End Date : <?php echo $pp['date_fin']?></span>
                            </div>
                        </div>
                    </div>
                </div>
                    <?php }?>
                    <?php }?>
                <!-- End Single Product -->
            </div>
        </div>
    </div>
</section>

<?php  include_once 'footer.php' ?>
