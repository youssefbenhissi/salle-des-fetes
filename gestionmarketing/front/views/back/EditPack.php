<?php
require_once "../connexion.php";
require_once "../../entities/Pack.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$id = $_GET['id'];
$c = new connexion();
$conn = $c->cnx;
$crud = new PackC();
$p = $crud->afficherPack($conn,$id);
$crudA = new PromotionAnimationC();
$animations = $crudA->afficherTousAnimations($conn);
$crudD = new PromotionDecorC();
$decors = $crudD->afficherTousDecor($conn);
$crudG = new PromotionGastroC();
$gastros = $crudG->afficherTousGastro($conn);
if (isset($_POST['submit'])) {
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $nom = $_POST['nom'];
    $value = $_POST['value'];
    $pack = new Pack($p['id_animation'],$p['id_gastro'],$p['id_decor'],$value,$date_debut,$date_fin,$nom);
    $crud = new PackC();
    $crud->modifierPack($pack,$id,$conn);
    //header('location :  http://{$_SERVER[\'HTTP_HOST\']}/views/back/showAllPacksAdmin.php');

    header("Location: showAllPacksAdmin.php");
    exit;
}

?>
<?php include_once 'header.php'  ?>
    <h3><i class="fa fa-angle-right"></i>Modifier Pack </h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <form id="main" class="form-horizontal"  method="post"  enctype="multipart/form-data" novalidate="">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="nom">Nom</label>
                        <div class='input-group col-sm-5' id='nom'>
                            <input type='text' name="nom" value="<?php echo $p['nom']?>" class="form-control" />

                        </div>
                        <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="date_debut">Date Debut</label>
                        <div class='input-group col-sm-5 date' id='date_debut'>
                            <input type='text' name="date_debut" value="<?php echo $p['date_debut']?>" class="form-control" />
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                        <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="date_fin">Date Fin</label>
                        <div class='input-group col-sm-5 date' id='date_fin'>
                            <input type='text' name="date_fin" value="<?php echo $p['date_fin']?>" class="form-control" />
                            <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                        </div>
                        <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="value">Value</label>
                        <div class="col-sm-5 input-group">
                            <input id="value" class="form-control" value="<?php echo $p['value']?>" type="text" placeholder="Value" name="value">
                        </div>
                        <div class="col-sm-5 messages"></div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-md-5">
                            <button type="submit" name="submit" value="submit" class="btn btn-block">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /form-panel -->
        </div>
        <!-- /col-lg-12 -->
    </div>
<?php include_once  'footer.php'?>