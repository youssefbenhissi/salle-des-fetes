<?php
require_once "../connexion.php";
require_once "../../entities/PromotionAnimation.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
$id = $_GET['id'];
$c = new connexion();
$conn = $c->cnx;
$crud = new PromotionAnimationC();
$p = $crud->afficherPromotionAnimation($conn,$id);
$animations = $crud->afficherTousAnimations($conn);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date_debut = $_POST['date_debut'];
    $date_fin = $_POST['date_fin'];
    $value = $_POST['value'];
    if (is_uploaded_file($_FILES['image']["tmp_name"])) {
        $temp = explode(".", $_FILES["image"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        move_uploaded_file($_FILES["image"]["tmp_name"], '../../uploads/'.$newfilename);
        $promotionA = new PromotionAnimation($p['id_animation'],$value,$date_debut,$date_fin,$newfilename);
    }else{
        $promotionA = new PromotionAnimation($p['id_animation'],$value,$date_debut,$date_fin,$p['image']);
    }
    $crud = new PromotionAnimationC();
    $crud->modifierPromotionAnimation($promotionA,$id,$conn);
    header("Location: showAllPromotionAnimationAdmin.php");
    exit;
}
?>
<?php include_once 'header.php'  ?>
    <h3><i class="fa fa-angle-right"></i>Modifier Promotion pour l'animation </h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <form id="mainEdit" class="form-horizontal"  method="post"  enctype="multipart/form-data" novalidate="">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="date_debut">Date Debut</label>
                        <div class="col-sm-5 input-group">
                            <input id="date_debut" name="date_debut" value="<?php echo $p['date_debut']?>" class="form-control" type="date" placeholder="YYYY-MM-DD" >
                        </div>
                        <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="date_fin">Date Fin</label>
                        <div class="col-sm-5 input-group">
                            <input id="date_fin" name="date_fin" class="form-control" value="<?php echo $p['date_fin']?>" type="date" placeholder="YYYY-MM-DD" >
                        </div>
                        <div class="col-sm-5 messages"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2">Image Upload</label>
                        <div class="col-sm-5 input-group">
                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                    <img src="../../uploads/<?php echo $p['image'] ?>" alt="" />
                                </div>
                                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                        <input type="file" name="image" data-validation="mime size" data-validation-allowing="jpg, png, gif" data-validation-max-size="2M" class="default" />
                        </span>
                                </div>
                            </div>
                        </div>
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