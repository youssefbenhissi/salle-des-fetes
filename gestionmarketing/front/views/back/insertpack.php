<?php
require_once "../connexion.php";
require_once "../../entities/Pack.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$c = new connexion();
$conn = $c->cnx;
if ($_SERVER['REQUEST_METHOD'] === 'GET') {

    $crudA = new PromotionAnimationC();
    $animations = $crudA->afficherTousAnimations($conn);
    $crudD = new PromotionDecorC();
    $decors = $crudD->afficherTousDecor($conn);
    $crudG = new PromotionGastroC();
    $gastros = $crudG->afficherTousGastro($conn);
}if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $Aninmation = $_POST['animation'];
    $decor = $_POST['decor'];
    $gastro = $_POST['gastro'];
    $nom = $_POST['nom'];
    $value = $_POST['value'];
    $pack = new Pack($Aninmation, $gastro, $decor, $value, $date_debut, $date_fin, $nom);
    $crud = new PackC();
    $crud->ajoutPack($pack, $conn);
    header("Location: showAllPacksAdmin.php");
    exit;
}

?>

<?php include_once 'header.php'  ?>
<h3><i class="fa fa-angle-right"></i>Ajouter Un Pack </h3>
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <form id="main" class="form-horizontal"  method="post"  enctype="multipart/form-data" novalidate="">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="nom">Nom</label>
                    <div class='input-group col-sm-5' id='nom'>
                        <input type='text' name="nom" placeholder="saisir le nom du pack" onkeyup="letterOnly(this)" class="form-control" />
                    </span>
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="date_debut">Date Debut</label>
                    <div class='input-group col-sm-5 date' id='date_debut'>
                        <input type='text' name="date_debut" class="form-control" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="date_fin">Date Fin</label>
                    <div class='input-group col-sm-5 date' id='date_fin'>
                        <input type='text' name="date_fin" class="form-control" />
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <!-- DEcors -->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="decor">Promotion Gastronomie</label>
                    <div class="input-group col-sm-5">
                        <select id="gastro" class="form-control" name="gastro">
                            <option value=""></option>
                            <?php foreach ($gastros as $a){ ?>
                                <option value="<?php echo $a['id']?>"><?php echo $a['prix']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <!-- DEcors -->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="decor">Promotion Decors</label>
                    <div class="input-group col-sm-5">
                        <select id="decor" class="form-control" name="decor">
                            <option value=""></option>
                            <?php foreach ($decors as $a){ ?>
                                <option value="<?php echo $a['id']?>"><?php echo $a['prix']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <!-- Animation -->
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="decor">Promotion Animation</label>
                    <div class="input-group col-sm-5">
                        <select id="animation" class="form-control" name="animation">
                            <option value=""></option>
                            <?php foreach ($animations as $a){ ?>
                                <option value="<?php echo $a['id']?>"><?php echo $a['prix']?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="value">Value</label>
                    <div class="col-sm-5 input-group">
                        <input id="value" class="form-control" type="number" placeholder="Saisir le prix du pack" name="value">
                    </div>
                    <div class="col-sm-5 messages"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-md-5">
                        <button type="submit" class="btn btn-block">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->
</div>
<?php include_once  'footer.php'?>
<script>
      function letterOnly(input) {
          var regex = /[^a-z]/gi;
          input.value=input.value.replace(regex, "");
      }
  </script>