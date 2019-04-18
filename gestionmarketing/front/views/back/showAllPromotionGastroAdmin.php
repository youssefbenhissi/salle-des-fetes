<?php
require_once "../../entities/PromotionGastronomie.php";
require_once "../../core/PromotionAnimationC.php";
require_once "../../core/PromotionDecorC.php";
require_once "../../core/PromotionGastroC.php";
require_once "../../core/PackC.php";
require_once "../connexion.php";
$c=new connexion();
$conn=$c->cnx;
$c=new connexion();
$conn=$c->cnx;
$crud = new PromotionGastroC();
$promotionGastro = $crud->afficherTousPromotionGastro($conn);
?>
<?php include_once 'header.php'  ?>
    <h3><i class="fa fa-angle-right"></i> All Gastronomies Promotions</h3>
    <a HREF="insertpromotioGastro.php"><input type="submit" name="ajouter" value="Ajouter" class="btn btn-primary  col-md-12"></a>
<br>
<br>
<br>
    <div class="row mt">
        <!-- page start-->
        <div class="content-panel">
            <div class="table">
                <table  class="display table table-bordered" id="hidden-table-info">
                    <thead>
                    <tr>
                        <th>photo</th>
                        <th>Date Debut</th>
                        <th class="hidden-phone">Date Fin</th>
                        <th class="hidden-phone">Value</th>
                        <th class="hidden-phone">Actions</th>
                    </tr>
                    </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        <?php foreach ($promotionGastro as  $p){  ?>
                        <tr><td class="center "><img style="width: 150px; height: 150px" src="../../<?php echo $p['image'] ?>"></td>
                            <td class=""> <?php echo $p['date_debut']  ?></td>
                            <td class=""> <?php echo $p['date_fin'] ?></td>
                            <td class=""> <?php echo $p['value'] ?></td>
                            <td class="hidden-phone ">
                                <a class="" href="EditPromotionGastro.php?id=<?php echo $p['id'] ?>">
                                    <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                </a>
                                <a class="" href="deletePromotionGastro.php?id=<?php echo $p['id'] ?>">
                                   <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                </a>
                        </tr>
                        <?php }  ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <!-- page end-->
    </div>
<?php include_once  'footer.php'?>
