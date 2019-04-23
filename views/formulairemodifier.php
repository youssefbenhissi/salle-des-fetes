<?php 
include "../core/adminC.php";
$admin1=new adminC();

$listead=$admin1->afficheradmin($_POST['id']);

foreach ($listead as $row ) {
  $nom=$row['nom'];
  $prenom=$row['prenom'];
  $login=$row['login'];
  $tache=$row['tache'];
  $ide=$row['Identifiant'];
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Inscription</title>
  <meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="../css/stylemodifier.css">




</head>
<body background="image_de_fond.jpg">

<main>
  <form action="modifieradmin.php" method="POST">
    <hgroup>
      <h2>Modifier Admin</h2>
    </hgroup>
    
    <fieldset>
      
      <table>
        <tr>
          <td>
            <label>Nom</label>
          </td>
          <td>
            <input type="text"  required  name="nom" value="<?php echo $nom ?>">
          </td>
        </tr>
        <tr>
          <td>
            <label>Prenom</label>
          </td>
          <td>
             <input type="text" required  name="pre" value="<?php echo $prenom ?>">
          </td>
        </tr>
        <tr>
          <td>
            <label>Login</label>
          </td>
          <td>
            <input type="text"  required name="login" value="<?php echo $login ?>">
          </td>
          
        </tr>

        <tr>
          <td>
            <label>Tache</label>
          </td>
          <td>
             <select required class="sel" name="CHOIX" >
        <option value="<?php echo $tache ?>"><?php echo $tache ?></option>
  <option value="Produit">Produit</option>
  <option value="Marketing">Marketing</option>
  <option value="Panier">Panier</option>
  <option value="Reclamation">Reclamation</option>
  <option value="Livraison">Livraison</option>
</select>
          </td>
        </tr>
      </table>
      
     
      
      <input type="hidden" name="reps" value="<?php echo $ide ?>">
    
      


     
   
    </fieldset>

    


   <div class="container">
  <button type="submit" id="button" name="valider" value="Enovyer">submit</button>
</div>


    
  
   </form>

</main>


</body>
</html>
