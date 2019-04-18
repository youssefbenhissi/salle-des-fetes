<?php
require_once "../../entities/PromotionDecor.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
require_once "../connexion.php";
$c = new connexion();
$conn = $c->cnx;
$querya='SELECT * FROM promotion_animation';
$prep = $conn->prepare($querya);
$result = $prep->execute();
$rows = $prep->fetchAll(); // assuming $result == true
$animation_cnt = count($rows);

$queryd='SELECT * FROM promotion_decor';
$prepd = $conn->prepare($queryd);
$resultd = $prepd->execute();
$rowsd = $prepd->fetchAll(); // assuming $result == true
$decor_cnt = count($rowsd);

$queryg='SELECT * FROM promotion_gastronomie';
$prepg = $conn->prepare($queryg);
$resultg = $prepg->execute();
$rowsg = $prepg->fetchAll(); // assuming $result == true
$gastro_cnt = count($rowsg);



$a = array(["type"=>"animation","value"=>$animation_cnt],["type"=>"decor","value"=>$decor_cnt],["type"=>"gastronomie","value"=>$gastro_cnt]);
$someJSON = json_encode($a);
?>
<?php include_once 'header.php'  ?>
<h3><i class="fa fa-angle-right"></i> Promotion Statistique </h3>
<!-- page start-->
<div id="morris">
    <div class="row mt">
        <div class="col-lg-12">
            <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Promotion Statistique</h4>
                <div class="panel-body">
                    <div id="hero-bar" class="graph"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="lib/jquery/jquery.min.js"></script><script src="lib/raphael/raphael.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/morris/morris.min.js"></script>
<script>
    var tax_data =<?php echo $someJSON ;?>;

        Morris.Bar({
            element: 'hero-bar',
            data: tax_data,
            xkey: 'type',
            ykeys: ['value'],
            labels: ['Nomnre de promotion'],
            barRatio: 0.4,
            xLabelAngle: 35,
            hideHover: 'auto',
            barColors: ['#3498db', '#2980b9', '#34495e']
        });
</script>
<?php include_once  'footer.php'?>