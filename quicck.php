<?php
include "../backoffice/core/categorieC.php";
include "../backoffice/core/platc.php";
$categor =new categorieC();
$plat=new platc();
$gg=$plat->recupererplat((int)$_GET['id_quick']);
var_dump($gg);
?>
<html>
<head>

    <meta charset="utf-8">
                         <meta http-equiv="x-ua-compatible" content="ie=edge">
                                                                             <title>Gastronomie Page || Uniqlo-Minimalist eCommerce Bootstrap 4 Template</title>
                                                                                                                                                          <meta name="description" content="">
                                                                                                                                                                                             <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
                                                                           <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
<body>

    <div id="quickview-wrapper">

        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->

                                  <div class="pro__thumb">
                                        <a href="#">
                                            <img src="../backoffice/img/<?php echo $gg['platImage']; ?>" alt="product images">
                                        </a>
                                      <?php var_dump($gg); ?>
                                    </div>

                            <!-- end product images -->
                            <div class="product-info">
                                <h1> Notre PLat </h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                 <div class="quick-desc">
                                    <?php echo $gg['platName']; ?>
                                </div><br>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                         <a href="#">
                                            <?php echo $gg['platPrice']; ?>
                                        </a>
                                        <span class="old-price"> DT45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    <?php echo $gg['platDescription']; ?>
                                </div>



                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
<!-- QUICKVIEW PRODUCT -->

<!-- END QUICKVIEW PRODUCT -->
<!-- Placed js at the end of the document so the pages load faster -->

<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap Framework js -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- All js plugins included in this file. -->
<script src="js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="js/main.js"></script>
</body>
</html>